"use strict";
// #DARK MODE

// *Variáveis:
const BODY = document.body;
const NAVBAR = document.querySelector(".js-navbar");
const MODE_DARK = document.querySelector(".js-dark-mode");

// *Eventos:
MODE_DARK.addEventListener("click", () => {
    changeMode();
    saveMode();
});

// *Funções:
// Adicionar ou remove a classe "dark" do "body" para ativar ou desativar o modo dark
function changeMode() {
    const IS_LIGHT = NAVBAR.classList.contains("navbar-light");

    BODY.classList.toggle("dark-mode");

    // torna o navbar dark mode ou light mode
    if (IS_LIGHT) {
        NAVBAR.classList.replace("navbar-light", "navbar-dark");
        return;
    }

    NAVBAR.classList.replace("navbar-dark", "navbar-light");
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
