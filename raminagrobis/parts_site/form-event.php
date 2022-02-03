<?php

$id = filter_input(INPUT_GET, "id");

// création d'un titre de page
$title = "Ramina Grobis lp";

include "header.php";
include "formulaire-connexion.php";
include "information.php";



?>

    <!-- formulaire en alpha pour test -->

    <h2 class="form-title">Sign In</h2>

    <form class="formulaire-creation" action="actions/insertSubscription.php" method="post">
        <div class="div-input-label">
            <label for="sex">Civilité : </label>
            <select type="text "name="sex" id="sex">
                <option value="M">Homme</option>
                <option value="F">Femme</option>
                <option value="O">Autre</option>
            </select>
        </div>
        <div class="div-input-label">
            <label for="last_name">Nom : </label>
            <input type="text" name="last_name" id="last_name">
        </div>
        <div class="div-input-label">
            <label for="first_name">Prénom : </label>
            <input type="text" name="first_name" id="first_name">
        </div>
        <div class="div-input-label">
            <label for="email">Email : </label>
            <input type="text" name="email_adress" id="email">
        </div>
        <div class="div-input-label">
            <label for="group_nb">Nombre d'accompagnants : </label>
            <input type="number" name="group_nb" id="group_nb">
        </div>
        <div class="div-input-label">
            <label for="mobile_num">Téléphone portable : </label>
            <input type="text" name="mobile_num" id="mobile_num">
        </div>

        <div class="div-input-label">
            <label for="fix_num">Téléphone fixe : </label>
            <input type="text" name="fix_num" id="fix_num">
        </div>

        <div class="div-input-label">
            <label for="activity_sector">Secteur d'activité : </label>
            <select type="text" name="activity_sector" id="activity_sector">
                <!-- TODO: Faire une boucle php forEach pour les options de secteur. -->
                <option value="default">default</option>
            </select>
        </div>

        <div class="div-input-label">
            <label for="company_name">Nom de l'entreprise : </label>
            <input type="text" name="company_name" id="company_name">
        </div>

        <div class="div-input-label">
            <label for="job">Métier : </label>
            <input type="text" name="job" id="job">
        </div>

        <div class="div-input-label">
            <input type="checkbox" name="consent_data" id="consent_data" required>
            <label for="rgpd">RGPD</label>
        </div>

        <div class="div-input-label">
            <input type="checkbox" name="newsletter" id="newsletter">
            <label for="newsletter">Newsletter</label>
        </div>
        <div class="div-input-label">
            <input type="checkbox" name="is_professional" id="is_professional">
            <label for="is_professional">Êtes-vous un professionel ?</label>
        </div>
        <input type="hidden" value="<?php echo $id?>" name="event_id">
        <input type="submit" value="Envoyer" class="btn-submit">
    </form>


<?php
include "footer.php";
?>