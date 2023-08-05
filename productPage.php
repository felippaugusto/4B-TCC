<?php
// Header
include_once 'includes/header.php';

// get product code
$productId = filter_input(INPUT_GET, 'productId', FILTER_SANITIZE_NUMBER_INT);
$productDatas = selectAllFromTableWhere("tb_produtos", "cod_produto", $productId, "fetch", "código do produto inválido");

// get product category
$productCategory = selectAllFromTableWhere("tb_categorias", "cod_categoria", $productDatas['id_categorias'], "fetch", "código da categoria inválido");

// get product sub category
$productSubCategory = selectAllFromTableWhere("tb_subcategorias", "cod_subcategoria", $productDatas['id_subcategorias'], "fetch", "código da sub-categoria inválido");
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

    <!-- container of product to buy -->
    <main id="productPageMain" class="displayFlex">
        <!-- product container -->
        <div class="container-product productPage displayFlex">
            <img src="IMAGES/product_images/<?php echo $productDatas['imagem']; ?>" alt="" class="hardware-image">
            <div class="product-description">
                <p class="product-especification"><span>Descrição:</span><?php echo $productDatas['descricao_produto']; ?></p>
                <p class="product-especification"><span>Marca: </span><?php echo $productCategory['nome_categoria']; ?></p>
                <p class="product-especification"><span>Modelo: </span><?php echo $productSubCategory['nome_subcategoria']; ?></p>
                <p id="available">Produto disponível</p>
                <p class="product-value">R$ <?php echo $productDatas['preco_atual_produto'] ?> reais</p>
                <button id="btn-product-add">Adicionar ao carrinho</button>
            </div>
        </div>
    </main>
<?php
// Footer
include_once 'includes/footer.php';
?>
</body>
</html>