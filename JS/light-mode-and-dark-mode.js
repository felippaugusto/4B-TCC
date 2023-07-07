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
const imagePix = $("#image-pix");
idImg = 2;
let clickedLabel;
let colorLabels;
let colorLabelsHover;

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
            imagePix.attr("src", "IMAGES/paymentsPage/pix-dark.png");
            colorLabels = "rgb(0, 68, 77)";
            colorLabelsHover = "rgb(0, 90, 102)";

            if(clickedLabel == 2) {
                labelMoney.style.backgroundColor = "rgb(0, 90, 102)";
                labelPix.style.backgroundColor = "rgb(0, 68, 77)";
                clickedLabel = 2;
            }
            else if(clickedLabel == 1) {
                labelPix.style.backgroundColor = "rgb(0, 90, 102)";
                labelMoney.style.backgroundColor = "rgb(0, 68, 77)";
                clickedLabel = 1;
            }
            else {
                labelMoney.style.backgroundColor = "rgb(0, 68, 77)";
                labelPix.style.backgroundColor = "rgb(0, 68, 77)";
                console.log(clickedLabel)
            }
        }
        else {
            moonOrSun.attr("src", "IMAGES/header/theme-white-and-dark/sun.png");
            imgEmail.attr("src", "IMAGES/form-login/email-dark.png");
            imgPassword.attr("src", "IMAGES/form-login/padlock-dark.png");
            imagePix.attr("src", "IMAGES/paymentsPage/pix-light.png");
            colorLabels = "#a82700";
            colorLabelsHover = "#ff3c00";

            if(clickedLabel == 2) {
                labelMoney.style.backgroundColor = "#ff3c00";
                labelPix.style.backgroundColor = "#a82700";
                clickedLabel = 2;
            }
            else if(clickedLabel == 1) {
                labelPix.style.backgroundColor = "#ff3c00";
                labelMoney.style.backgroundColor = "#a82700";
                clickedLabel = 1;
            }
            else {
                labelMoney.style.backgroundColor = "#a82700";
                labelPix.style.backgroundColor = "#a82700";
            }
        }
    })
}

if(localStorage.getItem("theme") == "t-dark") {
    moonOrSun.attr("src", "IMAGES/header/theme-white-and-dark/moon-black.png");
    imgEmail.attr("src", "IMAGES/form-login/email.png");
    imgPassword.attr("src", "IMAGES/form-login/padlock.png");
    colorLabels = "rgb(0, 68, 77)";
    colorLabelsHover = "rgb(0, 90, 102)";
}
else if(localStorage.getItem("theme") == "t-light") {
    moonOrSun.attr("src", "IMAGES/header/theme-white-and-dark/sun.png");
    imgEmail.attr("src", "IMAGES/form-login/email-dark.png");
    imgPassword.attr("src", "IMAGES/form-login/padlock-dark.png");
    colorLabels = "#a82700";
    colorLabelsHover = "#ff3c00";
}