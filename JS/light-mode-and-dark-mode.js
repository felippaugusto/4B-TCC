// variables globals
const body = $("body");
const header = $(".header");
const loginOrSignUpText = $("#loginOrSignUp p")
const themeWhiteDark = $("#theme-white-or-dark");
const hardwareShowcase = $(".hardware-showcase");
const containerProduct = $(".container-product")
const columnProducts = $(".column-products");
const socialMedias = $(".social-medias");
const containerLogin = $(".container-login");
const footer = $(".footer")
const textLogoHeader = $(".text-logo-header");
const goToHeader = $(".goToHeader");
const imgEmail = $("#img-email");
const imgPassword = $("#img-password");
const moonOrSun = $("#moon-and-sun");
let idImg = 2;


// theme white or dark
themeWhiteDark.click(() => {
    body.toggleClass("active");
    themeWhiteDark.toggleClass("active");
    header.toggleClass("active");
    containerLogin.toggleClass("active");
    textLogoHeader.toggleClass("active");

    containerProduct.find(".column-products").toggleClass("active");

    hardwareShowcase.toggleClass("active");
    socialMedias.toggleClass("active");
    goToHeader.toggleClass("activeThemeWhite");

    if(idImg === 1) {
        moonOrSun.attr("src", "IMAGES/header/theme-white-and-dark/moon-black.png");
        imgEmail.attr("src", "IMAGES/form-login/email.png");
        imgPassword.attr("src", "IMAGES/form-login/padlock.png");
        idImg = 2;
    }
    else if(idImg === 2) {
        moonOrSun.attr("src", "IMAGES/header/theme-white-and-dark/sun.png");
        imgEmail.attr("src", "IMAGES/form-login/email-dark.png");
        imgPassword.attr("src", "IMAGES/form-login/padlock-dark.png");
        idImg = 1;
    }
})