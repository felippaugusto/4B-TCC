<?php
// Header
include_once 'includes/header.php'; 
// sql getting the data from the tb_produtos
$productDatas = selectAllFromTable("tb_produtos");
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
                    <img src="IMAGES/includes/header/theme-white-and-dark/moon-black.png" alt="" id="moon-and-sun">
                </div>
            </div>

            <!-- button shopping cart -->
            <a href="shopping-cart.php" id="carrinho" class="displayFlex">
                <img src="IMAGES/includes/header/shopping-cart.png" alt="shopping-cart" id="shopping-cart-img">
                <div class="shopping-cart-text">
                    <div class="displayFlex container-img-down-arrow">
                        <p>Carrinho</p>
                        <img src="IMAGES/includes/header/down-arrow.png" alt="down-arrow" id="down-arrow-shopping-cart">
                    </div>
                    <p>Produtos: 0</p>
                </div>
            </a>
        </div>
    </header>
    
    <!-- structure main -->
    <main>
        <!-- choose intel or amd -->
        <div class="containerIntelAndAmd displayFlex">
            <a href="building-computer.php" class="containerIntel displayFlex blue" onmouseover="toggleBtnIntelAmd.intelActive()" onmouseout="toggleBtnIntelAmd.intelDesactive()">
                <p class="intel">INTEL</p>
            </a>
    
            <a href="building-computer.php" class="containerAmd displayFlex red" onmouseover="toggleBtnIntelAmd.amdActive()" onmouseout="toggleBtnIntelAmd.amdDesactive()">
                <img src="IMAGES\pageIndex\logo-amd/ryzen-amd-logo.png" alt="image-logo-ryzen" class="imgLogoRyzen">
            </a>
        </div>

        <div class="selectAmdOrIntel displayFlex">
            <a href="building-computer.php" class="btnSelectIntel">Selecionar</a>
            <a href="building-computer.php" class="btnSelectAmd">Selecionar</a>
        </div>

        <!-- product showcase -->
        <table class="hardware-showcase">
            <tr class="row-products displayFlex">
                <!-- foreach products -->
                <?php foreach($productDatas as $productData) { ?>

                <!-- product demo table -->
                <td class="container-product">
                    <a href="productPage.php?productId=<?php echo $productData['cod_produto']; ?>" class="column-products displayFlex">
                        <img src="IMAGES/product_images/<?php echo $productData['imagem']; ?>" alt="" class="hardware-image">
                        <p class="product-especification"><?php echo $productData['descricao_produto']; ?></p>
                        <p class="product-value">R$ <?php echo $productData['preco_atual_produto']; ?> reais</p>
                    </a>
                    <a href="productPage.php?productId=<?php echo $productData['cod_produto']; ?>" class="add-cart">Adicionar ao carrinho</a>
                </td>
                <?php }; ?>
            </tr>
        </table>
    </main>

    <!-- button to navegate to header -->
    <a href="#header" class="goToHeader"><img src="IMAGES/includes/down-arrow-navegation-website.png" alt=""></a>

    <!-- <p id="paragraphMessages">Sucesso ao cadastrar</p> -->

<?php
// Footer
include_once 'includes/footer.php';
?>
</body>
</html>