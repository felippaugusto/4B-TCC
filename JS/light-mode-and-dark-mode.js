// global variables
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
const containerShoppingCart = $(".container-shopping-cart");
idImg = 2;

// theme light or dark
const themes = {
    't-dark': 't-light',
    't-light': 't-dark',
}

document.body.setAttribute('data-theme', 't-dark');

if(localStorage.getItem("theme")) {
    document.body.setAttribute('data-theme', localStorage.getItem('theme'));
}

if(themeWhiteDark) {
    themeWhiteDark.click(() => {
        const currentTheme = document.body.dataset.theme;
        const changingThemes = themes[currentTheme];
        document.body.setAttribute('data-theme', changingThemes || 't-light');
        localStorage.setItem("theme", changingThemes);
        
        if(changingThemes == 't-dark') {
            moonOrSun.attr("src", "IMAGES/header/theme-white-and-dark/moon-black.png");
            imgEmail.attr("src", "IMAGES/form-login/email.png");
            imgPassword.attr("src", "IMAGES/form-login/padlock.png");
        }
        else {
            moonOrSun.attr("src", "IMAGES/header/theme-white-and-dark/sun.png");
            imgEmail.attr("src", "IMAGES/form-login/email-dark.png");
            imgPassword.attr("src", "IMAGES/form-login/padlock-dark.png");
        }
    })
}

if(localStorage.getItem("theme") == "t-dark") {
    moonOrSun.attr("src", "IMAGES/header/theme-white-and-dark/moon-black.png");
    imgEmail.attr("src", "IMAGES/form-login/email.png");
    imgPassword.attr("src", "IMAGES/form-login/padlock.png");
}
else if(localStorage.getItem("theme") == "t-light") {
    moonOrSun.attr("src", "IMAGES/header/theme-white-and-dark/sun.png");
    imgEmail.attr("src", "IMAGES/form-login/email-dark.png");
    imgPassword.attr("src", "IMAGES/form-login/padlock-dark.png");
}