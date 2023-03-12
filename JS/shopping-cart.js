// globals variables
const rowTable = $("table tr");
const removeAllBtn = $(".btn-remove");
const totalValueProductsCart = $(".total-values-products span");
const freightValue = $(".freight-value span");
const totalValues = $(".paragraph-total span");
const productValue = document.querySelectorAll(".product-value");
const removeProduct = document.querySelectorAll(".remove-cart-product");
let productValueTotal = 0;

// function to get only numbers
function onlyNumbers(string) {
    let numsStr = string.replace(/[^0-9]/g,'');
    numsStr = numsStr / 100;

    return numsStr;
}

// adding shipping and products
function addingEverythingCart() {
    const totalFreightFiltered = onlyNumbers(freightValue.text());
    const totalEverything = productValueTotal + totalFreightFiltered;

    totalValues.text(`R$ ${totalEverything.toFixed(2)}`);
}

// remove all products
removeAllBtn.click(() => {
    totalValueProductsCart.text("R$ 0,00");
    freightValue.text("R$ 0,00");
    totalValues.text("R$ 0,00");

    rowTable.text("");
    productValueTotal = 0;
    addingEverythingCart();
})

// remove the clicked product
removeProduct.forEach((removeBtn) => {
    removeBtn.addEventListener("click", () => {
        let value = onlyNumbers(removeBtn.previousElementSibling.textContent);
        productValueTotal -= value;
        removeBtn.parentNode.parentNode.remove();
        totalValueProductsCart.text(`R$ ${productValueTotal.toFixed(2)}`)
        addingEverythingCart();
    })
})

// adding all products
productValue.forEach((value) => {
    productValueTotal += onlyNumbers(value.textContent);
    
    totalValueProductsCart.text(`R$ ${productValueTotal.toFixed(2)}`)
})

addingEverythingCart();


