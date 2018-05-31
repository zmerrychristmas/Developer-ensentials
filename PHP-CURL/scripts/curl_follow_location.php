<?php
include '../src/Crawler.php';

# add -L -d/-F to follow action. POST first after will change action to GET method

// $url = 'http://dailytravelbeauty.com.local/login';
$url = "http://for.blog.local/git/ensentials/PHP-CURL/server.php"; // URL
$crawler = new Crawler($url);
$crawler->requireBasicAuth('huybinh', '123456');
$crawler->setopt([CURLOPT_FOLLOWLOCATION => 1]);
$crawler->requireToken('okay-boy');
$result = $crawler->login($url, 'Ha noi', 'katana');
echo $result;