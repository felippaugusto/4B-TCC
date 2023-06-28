// global variables
const exit = $(".exit");
const boxModelChooseHardwares = $(".box-model-choose-hardwares");
const btnChooseHardware = $(".btn-choose-hardwares");
const blueOrRedTeam = $(".blueOrRedTeam");
const paragraphTeam = $(".paragraph-team");
const blueOrRed = sessionStorage.getItem('blueOrRed');

if(blueOrRed == 1) {
    blueOrRedTeam.addClass("blue-team");
    paragraphTeam.text("Você escolheu o time azul da força");
}
else {
    paragraphTeam.text("Você escolheu o time vermelho da força");
    blueOrRedTeam.addClass("red-team");
}

exit.click(() => {
    boxModelChooseHardwares.removeClass("active");
})

btnChooseHardware.click(() => {
    document.documentElement.scrollTop = 0;
    boxModelChooseHardwares.addClass("active");
})

window.addEventListener("scroll", () => {
    if(document.documentElement.scrollTop > 200) {
        goToHeader.addClass("active");
    }
    else {
        goToHeader.removeClass("active");
    }
})