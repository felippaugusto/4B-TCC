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
const openModalRemove = $(".btnRemove");
const exitAdmin = document.querySelectorAll(".exitAdmin");
const boxModel = $(".box-model");

// open form to add products
productRegister.click(() => {
  const containerProductRegister = $("#containerProductRegister");
  containerProductRegister.addClass("active");
});

// open form to add product code
linkProductChange.click(() => {
  formProduct.addClass("active");
  formCategory.removeClass("active");
  formSubCategory.removeClass("active");
});

// open form to add category code
linkCategoryChange.click(() => {
  formCategory.addClass("active");
  formProduct.removeClass("active");
  formSubCategory.removeClass("active");
});

// open form to add subcategory code
linkSubCategoryChange.click(() => {
  formSubCategory.addClass("active");
  formProduct.removeClass("active");
  formCategory.removeClass("active");
});

// close forms for changing products and categories
exitAdmin.forEach((exitAdmin) => {
  exitAdmin.addEventListener("click", () => {
    containerForm = exitAdmin.parentElement.parentNode;
    containerForm.classList.remove("active");
  });
});

// open form to add categories
categoryRegister.click(() => {
  const containerCategoriesRegister = $("#containerCategoriesRegister");
  containerCategoriesRegister.addClass("active");
});

// open form to add sub-categories
subCategoryRegister.click(() => {
  const containerSubCategoriesRegister = $("#containerSubCategoriesRegister");
  containerSubCategoriesRegister.addClass("active");
});

// buttons to close forms
closeModels.forEach((closeModel) => {
  closeModel.addEventListener("click", () => {
    const modelsEdit = document.querySelectorAll(".modelEdit");
    modelsEdit.forEach((modelEdit) => {
      modelEdit.classList.remove("active");
      modelImageName.removeClass("active");
      arrowOpenModal.removeClass("active");
    });
  });
});

// open modal image name
arrowOpenModal.click(() => {
  arrowOpenModal.addClass("active");
  modelImageName.addClass("active");
});

// close modal image name
arrowCloseModal.click(() => {
  modelImageName.removeClass("active");
  arrowOpenModal.removeClass("active");
});

// open modals for remove users, products, categories or sub-categories
bodyHeight = body.outerHeight();
openModalRemove.each(function () {
  $(this).click((tag) => {
    boxModel.append(`
                                <div class="model-description displayFlex">
                                    <p id="paragraph"></p>
                                    <form action="../php_actions/deletes.php" method="POST" class="displayFlex container-form" id="containerFormAdmin">
                                        <input type="hidden" name="id" value="">

                                        <!-- button to delete the user -->
                                        <button type="submit" class="btn-remove-form"></button>
                                        <!-- close the modal -->
                                        <p id="close-model">Cancelar</p>
                                    </form>
                                </div>
    `);
    closeModalRegistersRemove();
    const hrefTag = tag.currentTarget.attributes.href.nodeValue;
    const hrefOnlyNumber = hrefTag.replace(/[^0-9]/g,'');
    const btnRemoveForm = $(".btn-remove-form");
    const inputHiddenCod = $(".container-form input");
    const modelParagraph = $(".model-description #paragraph");
    boxModel.attr("id", `modal${hrefOnlyNumber}`);
    inputHiddenCod.attr("value", hrefOnlyNumber);

    // dynamic height relative to the body
    boxModel.outerHeight(bodyHeight);

    if(tag.currentTarget.attributes.id.nodeValue == "users") {
        btnRemoveForm.attr("name", "btnDeleteUsers");
        btnRemoveForm.text("Deletar usuário");
        modelParagraph.text("Você tem certeza que deseja deletar esse cliente?");
    }
    else if(tag.currentTarget.attributes.id.nodeValue == "products") {
        btnRemoveForm.attr("name", "btnDeleteProducts");
        btnRemoveForm.text("Deletar produto");
        modelParagraph.text("Você tem certeza que deseja deletar esse produto?");
    }
    else if(tag.currentTarget.attributes.id.nodeValue == "categories") {
        btnRemoveForm.attr("name", "btnDeleteCategories");
        btnRemoveForm.text("Deletar categoria");
        modelParagraph.text("Você tem certeza que deseja deletar essa categoria?");
    }
    else {
        btnRemoveForm.attr("name", "btnDeleteSubCategories");
        btnRemoveForm.text("Deletar sub-categoria");
        modelParagraph.text("Você tem certeza que deseja deletar essa sub-categoria?");
    }
  });
});
// close model that remove users, products, categories or sub-categories
function closeModalRegistersRemove() {
    const closeModel = $("#close-model");
    boxModel.addClass("active");

    closeModel.click(() => {
        boxModel.removeClass("active");
        boxModel.empty();
    })
}