<?php
//il faudre un code token de sécurité
//TODO antiforgerytoken

//recuperation des donnees de l'input post dans des variables
$first_name=filter_input(INPUT_POST, "first_name");
$last_name=filter_input(INPUT_POST, "last_name");
$email_adress=filter_input(INPUT_POST, "email_adress");
$sex=filter_input(INPUT_POST, "sex");
$is_professional=filter_input(INPUT_POST, "is_professional");
$company_name=filter_input(INPUT_POST, "company_name");
$job=filter_input(INPUT_POST, "job");
$activity_sector=filter_input(INPUT_POST, "activity_sector");
$consent_data=filter_input(INPUT_POST, "consent_data");
$newsletter=filter_input(INPUT_POST, "newsletter");
$fix_num=filter_input(INPUT_POST, "fix_num");
$mobile_num=filter_input(INPUT_POST, "mobile_num");
$group_nb=filter_input(INPUT_POST, "group_nb");

//recuperation du fichier de config qui contient toutes les infos de connexion a la base de donnee
//TODO ajouter info de connexion dans la base de donnee (admin/admin)
include_once "../config.php";

//initialisation de la connexion a la base de donnee
$pdo = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BDD, Config::USERNAME, Config::PASSWORD);

//preparation de la requete
$requete=$pdo->prepare("insert into subscription (first_name, last_name, email_adress,
                          sex, is_professional, company_name, job, activity_sector, consent_data,
                          newsletter, fix_num, mobile_num, group_nb) values (:first_name, :last_name, :email_adress,
                          :sex, :is_professional, :company_name, :job, :activity_sector, :consent_data,
                          :newsletter, :fix_num, :mobile_num, :group_nb)");

//assignation des variables aux valeurs => pour eviter les injections SQL
$requete->bindParam(":first_name",$first_name);
$requete->bindParam(":last_name",$last_name);
$requete->bindParam(":email_adress",$email_adress);
$requete->bindParam(":sex",$sex);
$requete->bindParam(":is_professional",$is_professional);
$requete->bindParam(":company_name",$first_name);
$requete->bindParam(":job",$first_name);
$requete->bindParam(":activity_sector",$first_name);
$requete->bindParam(":consent_data",$first_name);
$requete->bindParam(":newsletter",$first_name);
$requete->bindParam(":fix_num",$first_name);
$requete->bindParam(":mobile_num",$first_name);
$requete->bindParam(":group_nb",$first_name);

//execution de la requete
$requete->execute();

header("location: ../index.php");