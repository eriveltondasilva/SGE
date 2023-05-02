"use strict";

// #MASK

$(".js-date").mask("00/00/0000", { placeholder: "__/__/____" });
$(".js-hour").mask("00:00:00", { placeholder: "00:00:00" });
$(".js-cep").mask("00000-000", { placeholder: "00000-000" });
$(".js-fone").mask("(00) 0 0000-0000", { placeholder: "(82) 0 0000-0000" });
$(".js-rg").mask("0000000-0", { placeholder: "0000000-0" });
$(".js-cpf").mask("000.000.000-00", { placeholder: "000.000.000-00" });
$(".js-money").mask("#.##0,00", { reverse: true, placeholder: "#.##0,00" });
$(".js-percentage").mask("##0,00%", { reverse: true, placeholder: "%" });

// ----------------
// #UTILITÁRIOS

// *Pesquisar o ano letivo sem precisar clicar em botão selecionar
$(".js-select_school_year").on('change', function () {
    $(".js-form_school_year").trigger('submit');
});


// *Fechar automaticamente os alertes
$(".js-close_alert").delay(8000).slideUp("slow");


// ----------------
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
    const SIDEBAR_IS_LIGHT = SIDEBAR.classList.contains(
        "sidebar-light-warning"
    );

    BODY.classList.toggle("dark-mode");

    // torna o navbar dark mode ou light mode
    if (NAVBAR_IS_LIGHT) {
        NAVBAR.classList.replace("navbar-light", "navbar-dark");
    } else {
        NAVBAR.classList.replace("navbar-dark", "navbar-light");
    }

    if (SIDEBAR_IS_LIGHT) {
        SIDEBAR.classList.replace(
            "sidebar-light-warning",
            "sidebar-dark-warning"
        );
    } else {
        SIDEBAR.classList.replace(
            "sidebar-dark-warning",
            "sidebar-light-warning"
        );
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

