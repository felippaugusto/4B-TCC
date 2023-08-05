// global variables
const modelEditUserInformations = $(".modelChangingUserInformations.modelEdit");
const userRegistration = $("#userRegistration");
const closeModelEditUserInformations = $("#close-model-edit-user-informations");
const modelEditPassword = $(".modelChangingPassword.modelEdit");
const changingUserPassword = $("#changingUserPassword");
const closeModelEditPassword = $("#close-model-edit-password");
const userAddress = $("#userAddress");
const modelUserAddress = $(".modelUserAddress");
const closeModelUserAddress = $("#close-model-user-address");
const inputCep = document.querySelector("input#cep");
const formUserAddress = document.querySelector("#formUserAddress");

// user informations
userRegistration.click(() => {
    modelEditUserInformations.addClass("active");
})

// changing user password
changingUserPassword.click(() => {
    modelEditPassword.addClass("active");
})

// add or edit user address
userAddress.click(() => {
    modelUserAddress.addClass("active");
})

// getting cep online
inputCep.addEventListener("keyup", (e) => {
    const inputValue = e.target.value;
    
    if(inputValue.length === 9) {
        const formatedInputValue = Number(inputValue.replace(/[^0-9]/g,''));
        getAdress(formatedInputValue);
    }
})

// getting address form API
const getAdress = async (cep) => {
    inputCep.blur();
    const apiUrl = `https://viacep.com.br/ws/${cep}/json/`;
    const request = await fetch(apiUrl);
    const datas = await request.json();
    const messageError = $("#paragraphMessages");
    const street = $("input#street");
    const neighborhood = $("input#neighborhood");
    const city = $("#optionCity");
    const state = $("#optionState");
    const selectCity = $("#selectCity");
    const selectState = $("#selectState");

    if(datas.erro === true) {
        messageError.remove();
        body.append("<p id='paragraphMessages'>CEP inválido</p>");
        formUserAddress.reset();
    }

    street.val(datas.logradouro);
    neighborhood.val(datas.bairro);
    city.attr("value", datas.localidade);
    city.text(datas.localidade);
    state.attr("value", datas.uf);
    state.text(datas.uf);
    selectCity.val(city.val());
    selectState.val(state.val());
}
