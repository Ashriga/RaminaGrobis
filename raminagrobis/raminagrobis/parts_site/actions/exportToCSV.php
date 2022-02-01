<?php
    include_once "../config.php";

$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);

$requete = $pdo->prepare("select * from subscription");

$requete->execute();

$lines = $requete->fetchAll();

$filename = 'event_subscription.csv';

file_put_contents(
    $filename,
    $lines,
    $flags = 0,
    $context = null);

?>

<a href="event_subscrption.csv">TELECHARGER EN FORMAT CSV</a>



