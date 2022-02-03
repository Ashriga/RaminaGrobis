<?php

// création d'un titre de page
$title = "Admin creation form";

include "header.php";
include "formulaire-connexion.php";
include "information.php";

?>

<!-- Modifier le form pour que ce soit u qui crée un event. -->

<h2 class="title-creation-form">Formulaire de création d'Évenement.</h2>
<form class="formulaire-creation" action="actions/insertEventconfig.php" method="post">

    <div class="div-input-label">
        <label for="img">Insérez une image :</label>
        <input type="text" name="img" id="img">
    </div>

    <div class="div-input-label">
        <label for="title">Entrez un titre :</label>
        <input type="text" name="title" id="title">
    </div>

    <div class="div-input-label">
        <label for="description">Entrez une description :</label>
        <textarea name="description" id="description" rows="5" cols="33">  </textarea>
    </div>

    <div class="div-input-label">
        <label for="color">Choisissez une couleur :</label>
        <select name="color" id="color">
            <option value=0>default</option>
            <option value=1>yellow</option>
            <option value=2>green</option>
            <option value=3>red</option>
            <option value=4>blue</option>
        </select>
    </div>

<!--    <div class="div-input-label">-->
<!--        <label for="activity_sector">Secteur : </label>-->
<!--        <select name="activity_sector" id="activity_sector">-->
<!--        Faire une boucle php forEach pour les options de secteur. -->
<!--            <option value=0>default</option>-->
<!--        </select>-->
<!--    </div>-->
    <div class="div-input-label">
        <label for="form_title">Titre du formulaire : </label>
        <input type="text"name="form_title" id="form_title">
        <!-- Faire une boucle php forEach pour les options de secteur. -->
    </div>
    <input type="submit" value="Envoyer" class="btn-submit">


</form>

<?php

        include "footer.php"
?>
