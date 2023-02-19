// variables globals
const header = document.querySelector(".header");
const loginOrSignUpText = document.querySelector("#loginOrSignUp p")
const themeWhiteDark = document.querySelector("#theme-white-or-dark");
const socialMedias = document.querySelector(".social-medias");
const footer = document.querySelector(".footer")
const textLogoHeader = document.querySelector(".text-logo-header");
const containerIntel = document.querySelector(".containerIntel");
const containerAmd = document.querySelector(".containerAmd");
const selectIntel = document.querySelector(".btnSelectIntel");
const selectAmd = document.querySelector(".btnSelectAmd");

// theme white or dark
themeWhiteDark.addEventListener("click", function() {
    themeWhiteDark.classList.toggle("active");
    header.classList.toggle("active");
    textLogoHeader.classList.toggle("active");
    footer.classList.toggle("active");
    socialMedias.classList.toggle("active");
    loginOrSignUpText.classList.toggle("active");
})

// animation choose intel or amd
const toggleBtnIntelAmd = {
    intelActive() {
            containerIntel.addEventListener("mouseover", function() {
            selectIntel.classList.add("active");
        })
    },

    intelDesactive() {
            containerIntel.addEventListener("mouseout", function() {
            selectIntel.classList.remove("active");
        })
    },

    amdActive() {
            containerAmd.addEventListener("mouseover", function() {
            selectAmd.classList.add("active");
        })
    },

    amdDesactive() {
            containerAmd.addEventListener("mouseout", function() {
            selectAmd.classList.remove("active");
        })
    }
}