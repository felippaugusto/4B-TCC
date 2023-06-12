const modelEditUserInformations = $(".modelChangingUserInformations.modelEdit");
const userRegistration = $("#userRegistration");
const closeModelEditUserInformations = $("#close-model-edit-user-informations");
const modelEditPassword = $(".modelChangingPassword.modelEdit");
const changingUserPassword = $("#changingUserPassword");
const closeModelEditPassword = $("#close-model-edit-password");
const userAddress = $("#userAddress");
const modelUserAddress = $(".modelUserAddress");
const closeModelUserAddress = $("#close-model-user-address");

// user informations
userRegistration.click(() => {
    modelEditUserInformations.addClass("active");
    })

closeModelEditUserInformations.click(() => {
    modelEditUserInformations.removeClass("active");
})

// changing user password
changingUserPassword.click(() => {
    modelEditPassword.addClass("active");
})

closeModelEditPassword.click(() => {
    modelEditPassword.removeClass("active");
})

// add or edit user address
userAddress.click(() => {
    modelUserAddress.addClass("active");
})

closeModelUserAddress.click(() => {
    modelUserAddress.removeClass("active");
})