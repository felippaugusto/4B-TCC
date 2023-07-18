// global variables
const productRegister = $("#productRegister");
const categoryRegister = $("#categoryRegister");
const subCategoryRegister = $("#subCategoryRegister");
const closeModels = document.querySelectorAll(".close-models");
const arrowOpenModal = $("#formProductRegister .arrow-light#arrow-light-open-modal");
const arrowCloseModal = $("#modelImageName .arrow-light");
const modelImageName = $("#modelImageName");
const linkProductChange = $(".links.linkChangingProductsCategories.product");
const linkCategoryChange = $(".links.linkChangingProductsCategories.category");
const linkSubCategoryChange = $(".links.linkChangingProductsCategories.subCategory");
const formProduct = $("#formProduct");
const formCategory = $("#formCategory");
const formSubCategory = $("#formSubCategory");
const exitAdmin = document.querySelectorAll(".exitAdmin");

// open form to add products
productRegister.click(() => {
    const containerProductRegister = $("#containerProductRegister");
    containerProductRegister.addClass("active");
})

// open form to add product code
linkProductChange.click(() => {
    formProduct.addClass("active");
    formCategory.removeClass("active")
    formSubCategory.removeClass("active");
})

// open form to add category code
linkCategoryChange.click(() => {
    formCategory.addClass("active");
    formProduct.removeClass("active");
    formSubCategory.removeClass("active");
})

// open form to add subcategory code
linkSubCategoryChange.click(() => {
    formSubCategory.addClass("active");
    formProduct.removeClass("active");
    formCategory.removeClass("active");
})

// close forms for changing products and categories
exitAdmin.forEach(exitAdmin => {
    exitAdmin.addEventListener("click", () => {
        containerForm = exitAdmin.parentElement.parentNode;
        containerForm.classList.remove("active");
    })
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
            modelImageName.removeClass("active");
            arrowOpenModal.removeClass("active");
        })
    })
})

// open modal image name
arrowOpenModal.click(() => {
    arrowOpenModal.addClass("active");
    modelImageName.addClass("active");
})

// close modal image name
arrowCloseModal.click(() => {
    modelImageName.removeClass("active");
    arrowOpenModal.removeClass("active");
})