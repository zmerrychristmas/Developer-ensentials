<?php
include '../src/Crawler.php';

$url = "http://curl.phptrack.com/login.php"; // URL
$POSTFIELDS = 'name=admin&password=guest&submit=save';
$reffer = "http://curl.phptrack.com/index.php";
$agent = "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4)
Gecko/20030624 Netscape/7.1 (ax)";
$cookie_file_path = "/home/sunshine/public_html/git/ensentials/share/cookie/cook"; // Please


$crawler = new Crawler($url);
$crawler->setAgent($agent);
$crawler->setPostFields($POSTFIELDS);
$crawler->setopt([
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_FOLLOWLOCATION => 1,
    ]);
$crawler->setReffer($reffer);
$crawler->setCookieFilePath($cookie_file_path);
$result = $crawler->exec();
echo $result;
?>