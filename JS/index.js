// variables globals
const body = document.querySelector("body");
const header = document.querySelector(".header");
const loginOrSignUpText = document.querySelector("#loginOrSignUp p")
const themeWhiteDark = document.querySelector("#theme-white-or-dark");
const hardwareShowcase = document.querySelector(".hardware-showcase");
const columnProducts = document.querySelectorAll(".column-products");
const socialMedias = document.querySelector(".social-medias");
const footer = document.querySelector(".footer")
const textLogoHeader = document.querySelector(".text-logo-header");
const containerIntel = document.querySelector(".containerIntel");
const containerAmd = document.querySelector(".containerAmd");
const selectIntel = document.querySelector(".btnSelectIntel");
const selectAmd = document.querySelector(".btnSelectAmd");
const goToHeader = document.querySelector(".goToHeader");

// theme white or dark
themeWhiteDark.addEventListener("click", function() {
    body.classList.toggle("active");
    themeWhiteDark.classList.toggle("active");
    header.classList.toggle("active");
    textLogoHeader.classList.toggle("active");

    columnProducts.forEach(itens => {
        itens.classList.toggle("active");
    })

    hardwareShowcase.classList.toggle("active");
    socialMedias.classList.toggle("active");
    goToHeader.classList.toggle("activeThemeWhite");
})

// animation choose intel or amd
const toggleBtnIntelAmd = {
    intelActive() {
            containerIntel.addEventListener("mouseover", function() {
            selectIntel.classList.add("active");
        })

        selectIntel.addEventListener("mouseover", function() {
            selectIntel.classList.add("active");
        })
    },

    intelDesactive() {;
            containerIntel.addEventListener("mouseout", function() {
            selectIntel.classList.remove("active");
        })

        selectIntel.addEventListener("mouseout", function() {
            selectIntel.classList.remove("active");
        })
    },

    amdActive() {
            containerAmd.addEventListener("mouseover", function() {
            selectAmd.classList.add("active");
        })

        selectAmd.addEventListener("mouseover", function() {
            selectAmd.classList.add("active");
        })
    },

    amdDesactive() {
            containerAmd.addEventListener("mouseout", function() {
            selectAmd.classList.remove("active");
        })

        selectAmd.addEventListener("mouseout", function() {
            selectAmd.classList.remove("active");
        })
    }
}

window.addEventListener("scroll", () => {
    if(document.documentElement.scrollTop > 200) {
        goToHeader.classList.add("active");
    }
    else {
        goToHeader.classList.remove("active");
    }
})