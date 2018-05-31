<?php

include '../src/Crawler.php';
include '../lib/simple_html_dom.php';

$url = 'http://dailytravelbeauty.com.local/login';
$reffer = 'http://dailytravelbeauty.com.local/login';
$agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.109 Safari/537.36';
// $crawler->setHeaders($headers);
// $crawler->setReffer($reffer);
$crawler = new Crawler($url);
$crawler->setAgent($agent);
$cookie_file_path = "/home/sunshine/public_html/git/ensentials/share/cookie/cook"; // Please
$crawler->setopt([
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_FOLLOWLOCATION => 1,
    ]);
$crawler->setCookieFilePath($cookie_file_path);
$result = $crawler->exec();

$html = new simple_html_dom();
$html->load($result);
$form = $html->find('form[class="form-signin"]', 0);
$token = $form->find('input[name="_token"]', 0)->value;

$crawler2 = new Crawler($url);
$crawler2->setAgent($agent);
$crawler2->setCookieFilePath($cookie_file_path);
$crawler2->setopt([
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_FOLLOWLOCATION => 1,
    ]);
$crawler2->post([
    '_token'    =>  $token,
    'email' =>  'admin@travelbeauty.vn',
    'password'  =>  '1234567'
    ]);
$result = $crawler2->exec();
echo $result;
// $url3 = 'http://dailytravelbeauty.com.local/user/list';
// // $cookie_file_path = "/home/sunshine/public_html/git/ensentials/share/cookie/cook"; // Please
// $crawler3 = new Crawler($url3);
// $crawler3->setAgent($agent);
// $crawler3->setCookieFilePath($cookie_file_path);
// $crawler3->setopt([
//     CURLOPT_RETURNTRANSFER => 1,
//     CURLOPT_FOLLOWLOCATION => 1,
//     ]);
// $result = $crawler3->exec();
// echo $result;
