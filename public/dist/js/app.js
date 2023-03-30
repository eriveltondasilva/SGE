"use strict";
// #DARK MODE

// *Variáveis:
const BODY = document.body;
const NAVBAR = document.querySelector(".js-navbar");
const SIDEBAR = document.querySelector(".js-sidebar");
const MODE_DARK = document.querySelector(".js-dark-mode");

// *Eventos:
MODE_DARK.addEventListener("click", () => {
    changeMode();
    saveMode();
});

// *Funções:
// Adicionar ou remove a classe "dark" do "body" para ativar ou desativar o modo dark
function changeMode() {
    const NAVBAR_IS_LIGHT = NAVBAR.classList.contains("navbar-light");
    const SIDEBAR_IS_LIGHT = SIDEBAR.classList.contains("sidebar-light-warning");

    BODY.classList.toggle("dark-mode");

    // torna o navbar dark mode ou light mode
    if (NAVBAR_IS_LIGHT) {
        NAVBAR.classList.replace("navbar-light", "navbar-dark");
    } else {
        NAVBAR.classList.replace("navbar-dark", "navbar-light");
    }


    if (SIDEBAR_IS_LIGHT) {
        SIDEBAR.classList.replace("sidebar-light-warning", "sidebar-dark-warning");
    } else {
        SIDEBAR.classList.replace("sidebar-dark-warning", "sidebar-light-warning");
    }
}

// Salvar ou remover dark-mode do localStorage
function saveMode() {
    const HAS_DARK_MODE = BODY.classList.contains("dark-mode");

    if (HAS_DARK_MODE) {
        localStorage.setItem("dark-mode", 1);
        return;
    }

    localStorage.removeItem("dark-mode");
}

// Carregar dark mode(função autodeclarada!)
(function loadMode() {
    const HAS_DARK_MODE = localStorage.getItem("dark-mode");

    if (HAS_DARK_MODE) {
        changeMode();
    }
})();
