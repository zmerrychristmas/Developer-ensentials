<?php

$ch = curl_init();
$username = 'huybinh';
$password = '123456';
$url = 'http://for.blog.local/git/ensentials/PHP-CURL/server.php';
curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_PROXY, '127.0.0.1:80');
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);

$data = array('user_name' => 'ha noi',
        'password'  =>  'welcome',
        'token'  =>  'okay-boy'
    );
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$contents = curl_exec($ch);
echo $contents;
curl_close($ch);