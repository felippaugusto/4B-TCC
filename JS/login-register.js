// variables globals
const body = $("body");
const header = $(".header");
const loginOrSignUpText = $("#loginOrSignUp p")
const themeWhiteDark = $("#theme-white-or-dark");
const socialMedias = $(".social-medias");
const footer = $(".footer");
const textLogoHeader = $(".text-logo-header");
const containerLogin = $(".container-login");
const imgEmail = $("#img-email");
const imgPassword = $("#img-password");
const goToHeader = $(".goToHeader");
let idImg = 1;

// theme white or dark
themeWhiteDark.click(() => {
    header.toggleClass("active");
    themeWhiteDark.toggleClass("active");
    textLogoHeader.toggleClass("active");
    socialMedias.toggleClass("active");
    containerLogin.toggleClass("active");
    goToHeader.toggleClass("activeThemeWhite")

    if(idImg === 1) {
        imgEmail.attr("src", "IMAGES/form-login/email-dark.png");
        imgPassword.attr("src", "IMAGES/form-login/padlock-dark.png");
        idImg = 2;
    }
    else if(idImg === 2) {
        imgEmail.attr("src", "IMAGES/form-login/email.png");
        imgPassword.attr("src", "IMAGES/form-login/padlock.png");
        idImg = 1;
    }
})

window.addEventListener("scroll", () => {
    if(document.documentElement.scrollTop > 200) {
        goToHeader.addClass("active");
    }
    else {
        goToHeader.removeClass("active");
    }
})
