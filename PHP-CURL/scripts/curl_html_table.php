<?php

include '../src/Crawler.php';
include '../lib/simple_html_dom.php';

$url = 'http://dailytravelbeauty.com.local/user/list';
$cookie_file_path = "/home/sunshine/public_html/git/ensentials/share/cookie/cook"; // Please

$crawler = new Crawler($url);
$crawler->setCookieFilePath($cookie_file_path);
$headers = [
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
    'Cookie: XSRF-TOKEN=eyJpdiI6IjZqSzRFUkhcL3dxUkUxVklFXC94TnZKZz09IiwidmFsdWUiOiJGdHZPMlNEYklZa3JYUUgyTWVwNnNoOWt5Y3F6TmV1UGxWZ0U4XC84QVFCem53d2M2aExsdkdTZEtIVVRpdm4rUFJ2TlRMSGRTQlV5blZVSUlQRWRIK1E9PSIsIm1hYyI6IjU5NTk0ODJjZGUzNGQ4OTgzMjAxY2MwNTVmZjlmNTliMTVmY2QxZDYzZmNjOTZlMThlZWUxZTg5OWIzZmU5NWQifQ%3D%3D; laravel_session=eyJpdiI6IjFcL3E0eWgwMUdHMW9pYnhZcFwvY1R3UT09IiwidmFsdWUiOiJaeURyOHY2RVUzS29zcGxsUjNtTW1hcnI5WFhyelFUaDhIZDIrNWx2Z2tvazNSdFZBUUVNd1wvR3BhSE1xN0lXT2U5WjRlbEFkRkhjYWhlNU9TS3Zaa2c9PSIsIm1hYyI6IjUwNjA3YTI5Mjk0OGY3OGQxY2Y3NmJhMGNlN2E5M2JlYWU3ODdkNzRlOTQ1OGQ1MzlkZTE2MjdjOTNiYTVmMTkifQ%3D%3D',
    'Connection: keep-alive',
    'Cache-Control: max-age=0'
];
$reffer = 'http://dailytravelbeauty.com.local/login';
$agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.109 Safari/537.36';
// $crawler->setHeaders($headers);
// $crawler->setReffer($reffer);
$crawler->setAgent($agent);
$crawler->setopt([
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_FOLLOWLOCATION => 1,
    ]);
$result = $crawler->exec();
var_dump($result);