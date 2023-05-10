// Variabel string yang akan digunakan
const strings = {
    onscroll: "onscroll",
    header: "header",
    querySelector: "querySelector",
    offsetTop: "offsetTop",
    pageYOffset: "pageYOffset",
    navbarFixed: "navbar-fixed",
    add: "add",
    classList: "classList",
    remove: "remove",
    hamburgerId: "#hamburger",
    navMenuId: "#nav-menu",
    click: "click",
    hamburgerActive: "hamburger-active",
    toggle: "toggle",
    hidden: "hidden",
    addEventListener: "addEventListener",
    DOMContentLoaded: "DOMContentLoaded",
    getFullYear: "getFullYear",
    copyrightContainer: "copyright-container",
    getElementById: "getElementById",
    dataAppName: "data-appname",
    getAttribute: "getAttribute",
    creatorName: "Muhamad Rifqi",
    creatorLink: "https://muhamadrifqi.com",
    copyrightLine1: "<p class=\"text-sm\">",
    copyrightLine2: "© <span id=\"copyright\">",
    copyrightLine3: "</span> ",
    copyrightLine4: "<a href=\"",
    copyrightLine5: "\" target=\"_blank\" rel=\"noopener noreferrer\">. Created by ",
    copyrightLine6: "</a>",
    copyrightLine7: "</p>",
    innerHTML: "innerHTML",
};

window[strings.onscroll] = function () {
    const header = document[strings.querySelector](strings.header);
    const headerOffsetTop = header[strings.offsetTop];
    if (window[strings.pageYOffset] > headerOffsetTop) {
        header[strings.classList][strings.add](strings.navbarFixed);
    } else {
        header[strings.classList][strings.remove](strings.navbarFixed);
    }
};

const hamburger = document[strings.querySelector](strings.hamburgerId);
const navMenu = document[strings.querySelector](strings.navMenuId);

hamburger[strings.addEventListener](strings.click, function () {
    hamburger[strings.classList][strings.toggle](strings.hamburgerActive);
    navMenu[strings.classList][strings.toggle](strings.hidden);
});

document[strings.addEventListener](strings.DOMContentLoaded, function () {
    const currentYear = new Date()[strings.getFullYear]();
    const copyrightContainer = document[strings.getElementById](strings.copyrightContainer);
    const appName = copyrightContainer[strings.getAttribute](strings.dataAppName);

    const copyrightHTML = `${strings.copyrightLine1}${strings.copyrightLine2}${currentYear}${strings.copyrightLine3}${appName}${strings.copyrightLine4}${strings.creatorLink}${strings.copyrightLine5}${strings.creatorName}${strings.copyrightLine6}${strings.copyrightLine7}`;

    copyrightContainer[strings.innerHTML] = copyrightHTML;
});
