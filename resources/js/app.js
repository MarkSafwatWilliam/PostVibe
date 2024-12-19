import "./bootstrap";

//  To ensure that the DOM is fully loaded before running the script
document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementById("menu");
    const menuToggle = document.getElementById("menu-toggle");
    const toggleMenu = () => {
        menu.classList.toggle("hidden");
    };
    menuToggle.addEventListener("click", toggleMenu);
});
