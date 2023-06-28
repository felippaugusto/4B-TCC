// global variables
const productRegister = $("#productRegister");
const categoryRegister = $("#categoryRegister");
const subCategoryRegister = $("#subCategoryRegister");
const closeModels = document.querySelectorAll(".close-models");

// open form to add products
productRegister.click(() => {
    const containerProductRegister = $("#containerProductRegister");
    containerProductRegister.addClass("active");
})

// open form to add categories
categoryRegister.click(() => {
    const containerCategoriesRegister = $("#containerCategoriesRegister");
    containerCategoriesRegister.addClass("active");
})

// open form to add sub-categories
subCategoryRegister.click(() => {
    const containerSubCategoriesRegister = $("#containerSubCategoriesRegister");
    containerSubCategoriesRegister.addClass("active");
})

// buttons to close forms
closeModels.forEach(closeModel => {
    closeModel.addEventListener("click", () => {
        const modelsEdit = document.querySelectorAll(".modelEdit");
        modelsEdit.forEach(modelEdit => {
            modelEdit.classList.remove("active");
        })
    })
})