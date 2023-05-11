// navbar
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};
// hamburger

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});
document.addEventListener("DOMContentLoaded", function () {
    const currentYear = new Date().getFullYear();
    const copyrightContainer = document.getElementById("copyright-container");
    const appName = copyrightContainer.getAttribute("data-appname");

    const creatorName = "Muhamad Rifqi";
    const creatorLink = "https://muhamadrifqi.com";

    const copyrightHTML = `
        <p class="text-sm">
            &copy; <span id="copyright">${currentYear}</span> ${appName}
            <a href="${creatorLink}" target="_blank" rel="noopener noreferrer">. Created by ${creatorName}</a>
        </p>
    `;

    copyrightContainer.innerHTML = copyrightHTML;
});
