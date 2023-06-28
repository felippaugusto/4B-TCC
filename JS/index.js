// global variables
const containerIntel = $(".containerIntel");
const containerAmd = $(".containerAmd");
const selectIntel = $(".btnSelectIntel");
const selectAmd = $(".btnSelectAmd");
const intel = $(".blue");
const amd = $(".red");

intel.click(() => {
    sessionStorage.setItem('blueOrRed', 1);
})

amd.click(() => {
    sessionStorage.setItem('blueOrRed', 2);
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