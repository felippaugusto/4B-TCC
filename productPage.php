<?php
// Header
include_once 'includes/header.php';
?>
<!-- header structure -->
    <!-- header left -->
    <header class="displayFlex header" id="header">
        <a href="index.php" class="text-logo-header displayFlex">
            <p>Assembly</p>
            <p>Tech</p>
        </a>

        <!-- header right -->
        <div class="header-right displayFlex">
            <!-- registered or logged user -->
            <?php include_once 'includes/loggedUser.php'; ?>

            <div id="theme-white-or-dark" class="displayFlex">
                <div id="ball" class="displayFlex">
                    <img src="IMAGES/header/theme-white-and-dark/moon-black.png" alt="" id="moon-and-sun">
                </div>
            </div>

            <!-- button shopping cart -->
            <a href="shopping-cart.php" id="carrinho" class="displayFlex">
                <img src="IMAGES/header/shopping-cart.png" alt="shopping-cart" id="shopping-cart-img">
                <div class="shopping-cart-text">
                    <div class="displayFlex container-img-down-arrow">
                        <p>Carrinho</p>
                        <img src="IMAGES/header/down-arrow.png" alt="down-arrow" id="down-arrow-shopping-cart">
                    </div>
                    <p>Produtos: 0</p>
                </div>
            </a>
        </div>
    </header>

    <!-- container of product to buy -->
    <main id="productPageMain" class="displayFlex">
        <!-- product container -->
        <div class="container-product productPage displayFlex">
            <img src="IMAGES/main/hardware-demonstration/ryzen-5600x-1.png" alt="" class="hardware-image">
            <div class="product-description">
                <p class="product-especification">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                <p class="product-especification">Marca: AMD</p>
                <p class="product-especification">Modelo: AM4</p>
                <p id="available">Produto disponível</p>
                <p class="product-value">R$ 1200,00 reais</p>
                <button id="btn-product-add">Adicionar ao carrinho</button>
            </div>
        </div>
    </main>
<?php
// Footer
include_once 'includes/footer.php';
?>