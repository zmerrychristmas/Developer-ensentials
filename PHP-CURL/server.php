<?php

if ($_POST['token'] == 'okay-boy') {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    echo $user_name . ' - ' . $password;
    $url = 'http://for.blog.local/git/ensentials/PHP-CURL/hello.php';
    header('Location: ' . $url); // redirect to hello world page
} else {
    echo 'Give me a try!';
}