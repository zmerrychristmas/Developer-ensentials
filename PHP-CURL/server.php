<?php

if ($_POST['token'] == 'okay-boy') {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    echo $user_name . ' - ' . $password;
} else {
    echo 'Give me a try!';
}