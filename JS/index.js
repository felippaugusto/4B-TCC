// variables globals
const body = $("body");
const header = $(".header");
const loginOrSignUpText = $("#loginOrSignUp p")
const themeWhiteDark = $("#theme-white-or-dark");
const hardwareShowcase = $(".hardware-showcase");
const containerProduct = $(".container-product")
const columnProducts = $(".column-products");
const socialMedias = $(".social-medias");
const footer = $(".footer")
const textLogoHeader = $(".text-logo-header");
const containerIntel = $(".containerIntel");
const containerAmd = $(".containerAmd");
const selectIntel = $(".btnSelectIntel");
const selectAmd = $(".btnSelectAmd");
const goToHeader = $(".goToHeader");

// theme white or dark
themeWhiteDark.click(() => {
    body.toggleClass("active");
    themeWhiteDark.toggleClass("active");
    header.toggleClass("active");
    textLogoHeader.toggleClass("active");

    containerProduct.find(".column-products").toggleClass("active");

    hardwareShowcase.toggleClass("active");
    socialMedias.toggleClass("active");
    goToHeader.toggleClass("activeThemeWhite");
})

// animation choose intel or amd
const toggleBtnIntelAmd = {
    intelActive() {
            containerIntel.mouseover(() => {
                selectIntel.addClass("active");
            })

            selectIntel.mouseover(() => {
                selectIntel.addClass("active");
            })
    },

    intelDesactive() {;
        containerIntel.mouseout(() => {
            selectIntel.removeClass("active");
        })

        selectIntel.mouseout(() => {
            selectIntel.removeClass("active");
        })
    },

    amdActive() {
        containerAmd.mouseover(() => {
            selectAmd.addClass("active");
        })

        selectAmd.mouseover(() => {
            selectAmd.addClass("active");
        })
    },

    amdDesactive() {
        containerAmd.mouseout(() => {
            selectAmd.removeClass("active");
        })

        selectAmd.mouseout(() => {
            selectAmd.removeClass("active");
        })
    }
}

window.addEventListener("scroll", () => {
    if(document.documentElement.scrollTop > 200) {
        goToHeader.addClass("active");
    }
    else {
        goToHeader.removeClass("active");
    }
})