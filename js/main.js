var menuIcon = document.getElementById('menu-toggle');
menuIcon.addEventListener('click', isMenuDisplayed);

var navBar = document.getElementById('navbar');
var menuOpen = false;

var windowSize = window.matchMedia("(min-width: 767px)");

var navLinks = document.getElementsByClassName("navbar-items");
for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener("click", closeMenu);
}

runMediaQuery(windowSize);
windowSize.addListener(runMediaQuery);

function isMenuDisplayed() {
    if (menuOpen == true) {
        closeMenu();
    } else {
        showMenu();
    }
}

function showMenu() {
    navBar.style.display = "block";
    menuOpen = true;
}

function closeMenu() {
    navBar.style.display = "none";
    menuOpen = false;
    navBar.style.removeProperty('display');
}

function runMediaQuery(windowSize) {
    if (windowSize.matches) {
        navBar.style.removeProperty('display');
    }
}