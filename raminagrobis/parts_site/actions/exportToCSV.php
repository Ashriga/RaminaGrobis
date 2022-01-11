<?php
    include_once "../config.php";

$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);

$requete = $pdo->prepare("select * from subscription");

$requete->execute();

$lines = $requete->fetchAll();



