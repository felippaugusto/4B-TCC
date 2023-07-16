<?php
// Header
include_once 'includes/header.php';

// get product code
$productId = filter_input(INPUT_GET, 'productId', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM tb_produtos WHERE cod_produto = '$productId'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$productDatas = $stmt->fetch();

// get product category
$sql = "SELECT nome_categoria FROM tb_categorias WHERE cod_categoria = :idCategory_foreignKey";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':idCategory_foreignKey', $productDatas['id_categorias']);
$stmt->execute();
$productCategory = $stmt->fetch();

// get product sub category
$sql = "SELECT nome_subcategoria FROM tb_subcategorias WHERE cod_subcategoria = :idSubCategory_foreignKey";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':idSubCategory_foreignKey', $productDatas['id_subcategorias']);
$stmt->execute();
$productSubCategory = $stmt->fetch();
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
                <p class="product-especification">Descrição: <?php echo $productDatas['descricao_produto']; ?></p>
                <p class="product-especification">Marca: <?php echo $productCategory['nome_categoria']; ?></p>
                <p class="product-especification">Modelo: <?php echo $productSubCategory['nome_subcategoria']; ?></p>
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