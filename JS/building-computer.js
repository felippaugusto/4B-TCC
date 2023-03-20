const exit = $(".exit");
const boxModelChooseHardwares = $(".box-model-choose-hardwares");
const btnChooseHardware = $(".btn-choose-hardwares");

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