<?php

$username = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST, "password");

if ($username == 'admin' && $password == 'admin') {
    global $isAdmin;
    $isAdmin = true;
}


header("location: ../index.php");

