<?php

$username = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST, "password");

if ($username == 'admin' && $password == 'admin') {
    echo '<script src="../assets/javascript/app.js">document.getElementById("home-card").classList.add("verified");</script>';
}


header("location: ../index.php");

