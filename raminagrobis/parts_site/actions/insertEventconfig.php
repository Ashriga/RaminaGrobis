<?php

//il faudre un code token de sécurité
//TODO antiforgerytoken

//recuperation des donnees de l'input post dans des variables
$title = filter_input(INPUT_POST, "title");
$description = filter_input(INPUT_POST, "description");
$form_title = filter_input(INPUT_POST, "form_title");
$img = filter_input(INPUT_POST, "img");
$color = filter_input(INPUT_POST, "color");


//recuperation du fichier de config qui contient toutes les infos de connexion a la base de donnee
//TODO ajouter info de connexion dans la base de donnee (admin/admin)
include_once "../config.php";

//initialisation de la connexion a la base de donnee
$pdo = new PDO("mysql:host=" . Config::SERVEUR . ";dbname=" . Config::BDD, Config::USERNAME, Config::PASSWORD);

//preparation de la requete
//$requete = $pdo->prepare("insert into event (color) values (:color)");
$requete = $pdo->prepare("insert into event (title, description, form_title, img, color)
                                values (:title, :description, :form_title, :img, :color)");

//assignation des variables aux valeurs => pour eviter les injections SQL
$requete->bindParam(":title", $title);
$requete->bindParam(":description", $description);
$requete->bindParam(":form_title", $form_title);
$requete->bindParam(":img", $img);
$requete->bindParam(":color", $color);

//execution de la requete
$requete->execute();

header("location: ../index.php");