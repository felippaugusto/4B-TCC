// page building computer
function typeWriter() {
    const title = document.querySelector(".paragraph-team");

    let counter = 95;
    const textoArray = title.innerHTML.split('');
    title.innerHTML = "";
    textoArray.forEach((letra, i) => {
        counter += 75;
        setTimeout(function() {
            title.innerHTML += letra; 
        }, counter);
    })   
}

setTimeout(typeWriter, 2000)

// user page
const containerLoggedUser = $("#containerLoggedUser");
        const modelLoggedUser = $(".modelLoggedUser");

        containerLoggedUser.mouseover(() => {
            modelLoggedUser.addClass("active");

            console.log("adicionou");
        })

        containerLoggedUser.mouseout(() => {
            modelLoggedUser.removeClass("active");
            console.log("removeu");
        })

// payments page
const labelPix = document.querySelector("#labelInputPix");
const labelMoney = document.querySelector("#labelInputMoney");

labelMoney.addEventListener("click", () => {
    if(labelPix.style.backgroundColor == colorLabelsHover) {
        labelPix.style.backgroundColor = colorLabels;
        labelMoney.style.backgroundColor = colorLabelsHover;
        clickedLabel = 2;
    }
    else {
        labelMoney.style.backgroundColor = colorLabelsHover;
        labelPix.style.backgroundColor = colorLabels;
        clickedLabel = 2;
    }
})

labelPix.addEventListener("click", () => { 
    labelPix.style.backgroundColor = colorLabelsHover;
    labelMoney.style.backgroundColor = colorLabels;
    clickedLabel = 1;
})