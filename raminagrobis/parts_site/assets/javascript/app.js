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
