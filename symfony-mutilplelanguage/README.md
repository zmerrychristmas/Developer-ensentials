Mookeen
=======

A Symfony project created on July 25, 2017, 10:22 am.


Software and tool
============================ 

- Ubuntu 16.04
- Docker
- php 5.6
- mysql 5.7
- Apache2
- git
- Phpstorm
- Phpmyadmin

Install git
===========
```bash
sudo apt-get -y install git
git config --global user.name "your name"
git config --global user.email "youremail@myourmaildomain.com"
git config --global credential.helper cache
git config --global push.default simple
```

Install docker and docker-compose
=================================
- Install docker
```bash
sudo apt-get -y remove docker docker-engine docker.io
sudo apt-get update
sudo apt-get -y install \
    apt-transport-https \
    ca-certificates \
    curl \
    software-properties-common
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
sudo apt-key fingerprint 0EBFCD88
sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
   $(lsb_release -cs) \
   stable"
sudo apt-get update
sudo apt-get install docker-ce
```
- Install docker-compose
```bash
sudo sh -c "curl -L https://github.com/docker/compose/releases/download/1.15.0/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose"
sudo chmod +x /usr/local/bin/docker-compose
```


Remove php 7 on Ubuntu 16.04
============================
```bash
sudo dpkg -l | grep php| awk '{print $2}' |tr "\n" " " | xargs --no-run-if-empty sudo apt-get purge -y
sudo rm -fr /usr/lib/php
sudo rm -fr /usr/include/php
sudo rm -fr /usr/share/php
sudo rm -fr /run/php
sudo rm -fr /etc/php
sudo apt autoremove
```

Install Apache2, php 5.6, xdebug on Ubuntu 16.04
===============================================
- Install php 5.6
```bash
sudo apt-add-repository -y ppa:ondrej/php
sudo apt-get -y update
sudo apt-get -y install php5.6 php5.6-dev php-pear php5.6-mysql php5.6-cli php5.6-curl php5.6-json php5.6-sqlite3 php5.6-mcrypt php5.6-curl php5.6-mbstring php5.6-xml php5.6-intl zip unzip php5.6-zip php5.6-gd php5.6-xmlrpc php5.6-soap php5.6-bcmath php5.6-ldap
```

- Install apache2
```bash
sudo apt-get -y install apache2 libapache2-mod-php5.6
```
Enable some apache2 moodules
```bash
sudo a2enmod rewrite
sudo service apache2 restart
```
Change user to run apache with current login user
```bash
whoami | xargs sudo usermod -a -G www-data
sudo sed -i "s/export APACHE_RUN_USER=www-data/export APACHE_RUN_USER=$(whoami)/g" /etc/apache2/envvars
```

- Config php.ini (in /etc/php/5.6/cli/php.ini and /etc/php/5.6/apache2/php.ini) to  run application
```ini
max_execution_time = 1800
max_input_time = 1800
max_input_vars = 3000
post_max_size = 300M
upload_max_filesize = 300M
max_file_uploads = 200
max_input_nesting_level = 300
date.timezone = Europe/Paris
```
By run commands
```bash
sudo sed -i "s/^;*\s*max_execution_time\s*[^\r\n]*$/max_execution_time = 1800/g" /etc/php/5.6/apache2/php.ini /etc/php/5.6/cli/php.ini
sudo sed -i "s/^;*\s*max_input_time\s*[^\r\n]*$/max_input_time = 1800/g" /etc/php/5.6/apache2/php.ini /etc/php/5.6/cli/php.ini
sudo sed -i "s/^;*\s*max_input_vars\s*[^\r\n]*$/max_input_vars = 3000/g" /etc/php/5.6/apache2/php.ini /etc/php/5.6/cli/php.ini
sudo sed -i "s/^;*\s*post_max_size\s*[^\r\n]*$/post_max_size = 300M/g" /etc/php/5.6/apache2/php.ini /etc/php/5.6/cli/php.ini
sudo sed -i "s/^;*\s*upload_max_filesize\s*[^\r\n]*$/upload_max_filesize = 300M/g" /etc/php/5.6/apache2/php.ini /etc/php/5.6/cli/php.ini
sudo sed -i "s/^;*\s*max_file_uploads\s*[^\r\n]*$/max_file_uploads = 200/g" /etc/php/5.6/apache2/php.ini /etc/php/5.6/cli/php.ini
sudo sed -i "s/^;*\s*max_input_nesting_level\s*[^\r\n]*$/max_input_nesting_level = 300/g" /etc/php/5.6/apache2/php.ini /etc/php/5.6/cli/php.ini
sudo sed -i "s/^;*\s*date\.timezone\s*[^\r\n]*$/date\.timezone = Europe\/Paris/g" /etc/php/5.6/apache2/php.ini /etc/php/5.6/cli/php.ini
```

- Install xdebug for development only
```bash
sudo apt-get -y install php-xdebug

sudo sh -c 'echo "xdebug.remote_enable = On" >> /etc/php/5.6/mods-available/xdebug.ini'
sudo sh -c 'echo "xdebug.remote_host = 127.0.0.1" >> /etc/php/5.6/mods-available/xdebug.ini'
sudo sh -c 'echo "xdebug.remote_port = 9000" >> /etc/php/5.6/mods-available/xdebug.ini'
sudo sh -c 'echo "xdebug.remote_handler = dbgp" >> /etc/php/5.6/mods-available/xdebug.ini'
sudo sh -c 'echo "xdebug.max_nesting_level=2000" >> /etc/php/5.6/mods-available/xdebug.ini'
sudo phpdismod xdebug
sudo phpendmod xdebug
```

Install Xdebug helper extension on chrome by going to url https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc

Go to options page of the extension via url chrome-extension://eadndfjplgieldjbigjakmdgkmoaaaoc/options.html  then choice IDE key is PhpStorm and click Save

Install php composer in global mode
===================================
```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```

Install phpcs
=============
```bash
sudo apt install php-codesniffer
```

Install php-cs-fixer for fixing coding convention follow by PSR2
================================================================
Install php-cs-fixer
```bash
wget http://cs.sensiolabs.org/download/php-cs-fixer-v2.phar -O php-cs-fixer
sudo chmod a+x php-cs-fixer
sudo mv php-cs-fixer /usr/local/bin/php-cs-fixer
```

Install mysql 5.7 on Ubuntu 16.04
=================================
```bash
sudo apt-get -y install mysql-server-5.7 mysql-client-5.7 
```
config root password is 1233456 for easy to remember

Working folder conventions
==========================
- Create working directory is /working/mookeen for storing source code and /working/data for storing app local data
```bash
sudo mkdir /working
sudo mkdir /working/mookeen
sudo mkdir /working/data
sudo chown -hR $(whoami):www-data /working
sudo chmod -hR 0777 /working
```
- Set DocumentRoot on apache2 config (/etc/apache2/sites-enabled/000-default.conf) to this folder /working/mookeen
```apacheconfig
DocumentRoot /working/mookeen
<Directory “/working/mookeen”>
    AllowOverride All
</Directory>
```

- Replace /var/www/ in /etc/apache2/apache2.conf by /working/ and set AllowOverride All on /working/ folder
```apacheconfig
<Directory /working/>
    Options Indexes FollowSymLinks
    AllowOverride All
    Require all granted
</Directory>
```
**_Note:_**
> If get error about permission so change 'Require all granted' to 'Allow from all'
- And restart apache2 service
```bash
sudo service apache2 restart
``` 
Install phpmyadmin
==================
```bash
wget https://files.phpmyadmin.net/phpMyAdmin/4.7.3/phpMyAdmin-4.7.3-english.zip -P /working/mookeen
unzip /working/mookeen/phpMyAdmin-4.7.3-english.zip -d /working/mookeen
rm /working/mookeen/phpMyAdmin-4.7.3-english.zip
mv /working/mookeen/phpMyAdmin-4.7.3-english /working/mookeen/phpmyadmin
```
Access phpmyadmin at url http://localhost/phpmyadmin
with root / 123456

Run Symfony Mookeen application on development mode
===================================

Clone source code and start development server
```bash
git clone git@bitbucket.org:pentalog_mookeen/mookeen.git /working/mookeen/mookeen
cd /working/mookeen/mookeen
composer install -n
bin/console doctrine:database:create
bin/console doctrine:schema:update --force
bin/console doctrine:fixture:load -n
bin/console cache:clear --env=dev --no-warmup
bin/console cache:clear --env=prod --no-warmup

bin/console server:start
```

Stop development server
```bash
bin/console server:stop
```

Or stop by killing a process on a port
```bash
sudo lsof -t -i:8000 | xargs --no-run-if-empty sudo kill
```

Or can run
```bash
bin/console server:run
```

Also you can run the application with production mode at http://localhost/mookeen  
And Dev mode: http://localhost/mookeen/web/app_dev.php/   
Accounts:   admin/@MooKeen2017 and mookeendemo/@MooKeen2017

Config virtual host  on dev machine
===================================
- Create mookeen.dev log folder
```bash
sudo mkdir /var/log/apache2/mookeen.dev
```
- Copy configs/mookeen.dev.conf to /etc/apache2
```bash
sudo cp /working/mookeen/mookeen/configs/mookeen.dev.conf /etc/apache2/sites-available
sudo a2ensite mookeen.dev.conf
sudo service apache2 restart
```
- Set new domain name mookeen.dev to /etc/hosts
```bash
sudo sed -ri "s/^127\.0\.0\.1\s+mookeen.dev$//g" /etc/hosts
sudo sh -c 'echo "127.0.0.1    mookeen.dev" >> /etc/hosts'
```
- Run application on virtual host mode with prod environment at url: http://mookeen.dev and dev environment at http://mookeen.dev/app_dev.php

Other documents
===============
[DEVOPS.md](DEVOPS.md)
----------------------

Test server mookeen.test 10.190.42.2
------------------------------------

- ssh account: user / user123
- sudo pass: user123
- login to test server by using ssh: 
```bash
ssh user@10.190.42.2
```
- Add mookeen.test domain to hosts file
```bash
sudo sed -ri "s/^10\.190\.42\.2\s+mookeen.test$//g" /etc/hosts   
sudo sh -c 'echo "10.190.42.2    mookeen.test" >> /etc/hosts'
```