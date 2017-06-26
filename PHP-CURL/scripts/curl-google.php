<?php

// 1
$cSession = curl_init();

// 2
curl_setopt($cSession, CURLOPT_URL, "http://www.google.com/search?q=curl");
curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cSession, CURLOPT_HEADER, false);

// 3
$result = curl_exec($cSession);

// 4
curl_close($cSession);

// 5
echo $result;

?>