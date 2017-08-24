Install jenkins and sonar
========================
# Login to test server with password is user123
```bash
ssh user@10.190.42.2
```

# Install JDK
```bash
sudo add-apt-repository ppa:webupd8team/java
sudo apt-get update
sudo apt install oracle-java8-installer
```

# Install sonar (support java8)
```bash
sudo sh -c 'echo deb http://downloads.sourceforge.net/project/sonar-pkg/deb binary/ > /etc/apt/sources.list.d/sonarqube.list'
sudo apt-get update
sudo apt-get install sonar
sudo update-rc.d sonar defaults
sudo sed -i 's/^#*\s*sonar.jdbc.username\s*=\s*[^\n\r]*$/sonar.jdbc.username=root/g'  /opt/sonar/conf/sonar.properties
sudo sed -i 's/^#*\s*sonar.jdbc.password\s*=\s*[^\n\r]*$/sonar.jdbc.password=123456/g'  /opt/sonar/conf/sonar.properties
sudo sed -i 's/^#*\s*sonar.jdbc.url\s*=\s*jdbc:mysql/sonar.jdbc.url=jdbc:mysql/g'  /opt/sonar/conf/sonar.properties

```
- Configure Systemd service: create new file /etc/systemd/system/sonar.service with below content:
```apacheconfig
[Unit]
Description=SonarQube service
After=syslog.target network.target

[Service]
Type=forking

ExecStart=/opt/sonarqube/bin/linux-x86-64/sonar.sh start
ExecStop=/opt/sonarqube/bin/linux-x86-64/sonar.sh stop

User=root
Group=root
Restart=always

[Install]
WantedBy=multi-user.target
```
- Start sonar and start service automatic at boot time
```bash
sudo systemctl start sonar
sudo systemctl enable sonar
sudo systemctl status sonar
``` 
access sonar at http://localhost:9000

# Install jenkins
1. Install jenkins
````bash
wget -q -O - https://pkg.jenkins.io/debian/jenkins-ci.org.key | sudo apt-key add -
echo deb http://pkg.jenkins.io/debian-stable binary/ | sudo tee /etc/apt/sources.list.d/jenkins.list
sudo apt-get update
sudo apt-get install jenkins

sudo systemctl start jenkins

#sudo in jenkins without password
sudo sh -c 'echo "jenkins ALL= NOPASSWD: ALL" >> /etc/sudoers'
````
Go to jenkins add address http://localhost:8080 to create admin account with password is 123456   
You can see more at https://www.digitalocean.com/community/tutorials/how-to-install-jenkins-on-ubuntu-16-04   
2. Install jenkins plugin via cli
```bash
wget http://localhost:8080/jnlpJars/jenkins-cli.jar
java -jar jenkins-cli.jar -auth admin:123456 -s http://localhost:8080/ install-plugin sonar ansicolor
java -jar jenkins-cli.jar -auth admin:123456 -s http://localhost:8080/ safe-restart

```
3. Config SonarQube servers
* Go to http://10.190.42.2:8080/configure and change some configs on **SonarQube installations**
    * Name: Sonar
    * Server URL: http://10.190.42.2
    * Server version 5.3 or higher
4. Config SonarQube Scanner
* Go to http://10.190.42.2:8080/configureTools/ and change some configs on **SonarQube Scanner**
    * SonarQube Scanner  Name: Sonar
    * Check Install automatically
    * Install from Maven Center Version: SonarQube Scanner 3.0.3 or lastest
# Config jenkins job for TEST_Symfony_center_app
1. Create new job add url http://10.190.42.2:8080/view/all/newJob and choice Freestyle project
2. Change configurations
* Project name: TEST_Symfony_center_app
* Source Code Management:
    * Repository URL: https://nguyenhuuhuy@bitbucket.org/pentalog_mookeen/mookeen.git
    * Credentials: nguyenhuuhuy
    * Branches to build: dev
* Build Triggers:
    * Check Poll SCM and input Schedule with value: * * * * * 
* Build Environment
    * Check Color ANSI Console Output
    * ANSI color map: xterm
* Build (add Execute shell and Execute SonarQube Scanner)
    * Execute shell command:
        ```bash
        composer install -n
        bin/console doctrine:schema:update --force
        bin/console cache:clear --env=prod --no-warmup
        sudo rm /working/mookeen/mookeen/* -fr
        sudo cp -a $WORKSPACE/* /working/mookeen/mookeen
        sudo chown -hR www-data:www-data /working/mookeen/mookeen
        ```
    * Execute SonarQube Scanner:
        * Analysis properties
            ```apacheconfig
            # Required metadata
            sonar.projectKey=symfony_center_app
            sonar.projectName=Symfony center application
            sonar.projectVersion=1.0
            
            # Comma-separated paths to directories with sources (required)
            sonar.sources=src
            
            # Language
            sonar.language=php
            
            # To deactivate features related to unit tests execution and coverage
            #sonar.dynamicAnalysis=false
            
            # Encoding of the source files
            sonar.sourceEncoding=UTF-8
            
            # Reusing PHPUnit reports
            #sonar.php.tests.reportPath=tests/nemapi_phpunit.xml
            #sonar.coverage.exclusions=src/*Bundle/Mock/**/*.php,src/*Bundle/DependencyInjection/*.php
            sonar.exclusions=src/*Bundle/Mock/**/*.php,src/*Bundle/DependencyInjection/*.php
            ```
3. Config virtual host for test machine
- Create mookeen.test log folder
```bash
sudo mkdir /var/log/apache2/mookeen.test
```
- Copy configs/mookeen.test.conf to /etc/apache2
```bash
sudo cp /working/mookeen/mookeen/configs/mookeen.test.conf /etc/apache2/sites-available
sudo a2ensite mookeen.test.conf
sudo service apache2 restart
```
- Set new domain name mookeen.dev to /etc/hosts of **_your local machine_**
```bash
sudo sed -ri "s/^127\.0\.0\.1\s+mookeen.test$//g" /etc/hosts
sudo sh -c 'echo "127.0.0.1    mookeen.test" >> /etc/hosts'
```
- Run application on virtual host mode with prod environment at url: http://mookeen.test