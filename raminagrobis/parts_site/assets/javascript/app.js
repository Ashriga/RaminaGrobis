const headerAnim = document.getElementById("header");
const listNavHeader = document.querySelectorAll(".link-list-header");
const siteName = document.querySelector(".title");

window.addEventListener("scroll", () => {

    if (window.scrollY > 0) {

        headerAnim.classList.add("anim-header");
        siteName.classList.add("title_on_scroll");

        listNavHeader.forEach(item => {

            item.classList.add("link-underline-deleted");

        });

    } else {

        headerAnim.classList.remove("anim-header");
        siteName.classList.remove("title_on_scroll");

        listNavHeader.forEach(item => {

            item.classList.remove("link-underline-deleted");

        });
    }

});

// ------------------------- OVERLAY CONNEXION ------------------------------

const overlayConnexion = document.getElementById("overlay-connexion");
const homeHero = document.getElementById("home-hero");
const homeCard = document.getElementById("home-card");
const btnConnexion = document.getElementById("btn-connexion");

btnConnexion.addEventListener("click", () => {
    // Fonction pour faire apparaitre le form de connexion
    homeHero.classList.add("hidden");
    homeCard.classList.add("hidden");

    overlayConnexion.classList.remove("hidden");
})


// Attention ne pas dblclick rapidement sur le formulaire, cela l'enlèverait.

overlayConnexion.addEventListener("dblclick", () => {
    // Fonction pour faire disparaitre le formulaire de connexion
    overlayConnexion.classList.add("hidden");
    if (homeCard.classList.contains("verified")) {
        homeCard.classList.remove("hidden");
    }
    homeHero.classList.remove("hidden");
})

// Faire une fonction pour faire apparaitre le "Créer son Event"
// Valider la class verified si la personne se connecte en tant qu'admin 
// Création fonction addVerified en php avec une balise script. 