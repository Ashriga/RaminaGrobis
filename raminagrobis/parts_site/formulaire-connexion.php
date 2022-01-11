<!-- 
    Faire un formulaire avec un overlay prenant 100% de la page. 
    Si on clic sur l'overlay, la page de connexion se ferme.
-->


<div class="grey-overlay hidden">

    <!-- Div contenant titre et formulaire -->
    <div class="border-formulaire-connexion">

        <h2 class="form-title">Formulaire de connexion</h2>

        <form action="#" method="get">
            <div class="div-input-label">   
                <label for="username-connexion">Username : </label>
                <input type="text" name="username-connexion" id="username-connexion">
            </div>

            <div class="div-input-label">
                <label for="password-connexion">Password : </label>
                <input type="password" name="password-connexion" id="password-connexion">
            </div>

            <input type="submit" value="Confirmer" id="submit-connexion" class="btn-submit">
        </form>
    </div>

    
</div>
