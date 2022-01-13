<?php

// création d'un titre de page
$title = "Ramina Grobis lp";



include "header.php";
?>

<!-- formulaire en alpha pour test -->
<form action="#" method="post">
    <div class="div-input-label"> 
            <label for="name">Nom : </label>
            <input type="text" name="name" id="name">
    </div>

    <div class="div-input-label"> 
            <label for="firstname">Prénom : </label>
            <input type="text" name="firstname" id="firstname">

    </div>

    <div class="div-input-label"> 
            <label for="email">Email : </label>
            <input type="email" name="email" id="email">
    </div>

    <div class="div-input-label"> 
            <label for="civilite">Civilité : </label>
            <select name="civilite" id="civilite">
               <option value="Homme"></option>
               <option value="Femme"></option>
               <option value="Autre"></option>
            </select>
    </div>

    <div class="div-input-label"> 
            <label for="accompagnants">Nombre d'accompagnants : </label>
            <input type="number" name="accompagnants" id="accompagnants">
    </div>

    <div class="div-input-label"> 
            <label for="mobile-phone">Téléphone portable : </label>
            <input type="number" name="mobile-phone" id="mobile-phone">
    </div>

    <div class="div-input-label"> 
            <label for="fixe-phone">Téléphone fixe : </label>
            <input type="number" name="fixe-phone" id="fixe-phone">
    </div>

    <div class="div-input-label"> 
            <label for="secteur">Secteur : </label>
            <select name="secteur" id="secteur">
                <!-- Faire une boucle php forEach pour les options de secteur. -->

            </select>
    </div>

    <div class="div-input-label"> 
            <label for="entreprise">Nom de l'entreprise : </label>
            <input type="text" name="entreprise" id="entreprise">

    </div>

    <div class="div-input-label"> 
            <label for="job">Métier : </label>
            <input type="text" name="job" id="job">

    </div>

    <div class="div-input-label"> 
            <input type="checkbox" name="RGPD" id="RGPD" required>
            <label for="RGPD">RGPD</label>
    </div>

    <div class="div-input-label"> 
            <input type="checkbox" name="newsletter" id="newsletter">
            <label for="newsletter">Newsletter</label>
    </div>

    <input type="submit" value="Envoyer">
</form>




<?php
include "footer.php";
?>