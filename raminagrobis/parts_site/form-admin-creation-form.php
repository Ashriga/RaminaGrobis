<?php

// création d'un titre de page
$title = "Admin creation form";

include "formulaire-connexion.php";
include "information.php";


include "header.php";
?>

<!-- Modifier le form pour que ce soit u qui crée un event. -->

<h2 class="title-creation-form">Formulaire de création d'Évenement.</h2>
<form class="formulaire-creation" action="#" method="post">

    <div class="div-input-label">
        <label for="image">Insérez une image :</label>
        <input type="file" name="image" id="image">
    </div>

    <div class="div-input-label">
        <label for="title">Entrez un titre :</label>
        <input type="text" name="title" id="title">
    </div>

    <div class="div-input-label">
        <label for="desc">Entrez une description :</label>
        <textarea name="desc" id="desc" rows="5" cols="33">  </textarea>
    </div>

    <div class="div-input-label">
        <label for="colors">Choisissez une couleur :</label>
        <select name="colors" id="colors"></select>
    </div>

    <div class="div-input-label">
        <label for="secteur">Secteur : </label>
        <select name="secteur" id="secteur">
        <!-- Faire une boucle php forEach pour les options de secteur. -->
        </select>
    </div>


</form>

<?php

        include "footer.php"
?>
