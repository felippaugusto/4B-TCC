<?php
// Connection with database
require_once 'php_actions/db_connect.php';
$pdo = connect();
// Start sessions 
session_start();
// Messages
include_once 'includes/messages.php';

if (isset($_GET['submitChangingProductsOrCategories']) || isset($_SESSION['adminLogged']) == true) {
    $whatForm = filter_input(INPUT_GET, 'whatForm', FILTER_SANITIZE_SPECIAL_CHARS);
    $codeProductOrCategory = filter_input(INPUT_GET, 'codeProductOrCategory', FILTER_SANITIZE_NUMBER_INT);
} else {
    header('Location: login.php');
}

// get the categories
$sql = "SELECT * FROM tb_categorias";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$datasCategories = $stmt->fetchAll();

// get the subcategories
$sql = "SELECT * FROM tb_subcategorias";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$datasSubcategories = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assembly Tech | E-commerce de periféricos e hardware</title>
    <link rel="stylesheet" href="CSS/globals.css">
    <link rel="stylesheet" href="CSS/admin.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/user-page.css">
    <link rel="stylesheet" href="CSS/register.css">
    <link rel="shortcut icon" href="IMAGES/includes/header/favicon/computer-96.png" type="image/x-icon">
</head>
<body>
    <!-- header structure -->
    <!-- header left -->
    <header class="displayFlex header headerAdmin" id="headerChangesPage">
        <a href="index.php" class="text-logo-header displayFlex">
            <p>Assembly</p>
            <p>Tech</p>
        </a>

        <!-- header right -->
        <div class="header-right displayFlex">

            <div id="theme-white-or-dark" class="displayFlex">
                <div id="ball" class="displayFlex">
                    <img src="IMAGES/header/theme-white-and-dark/moon-black.png" alt="" id="moon-and-sun">
                </div>
            </div>

        </div>
    </header>

    <!-- admin screen for registering products and categories -->
    <div id="containerUserPage" class="displayFlex">
        <?php if ($whatForm == "productChange") { 
            // get the product
            $sql = "SELECT * FROM tb_produtos WHERE cod_produto = :productCode";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam('productCode', $codeProductOrCategory);
            $stmt->execute();
            $productDatas = $stmt->fetchAll();
            foreach($productDatas as $productData) {
            ?>
            <div class="displayFlex" id="containerProductChanging">
                <form action="php_actions/changeProducts.php" class="displayFlex modelForm" id="formProductRegister" method="POST" enctype="multipart/form-data">
                    <!-- get product old datas  -->
                    <input type="hidden" name="productCode" value="<?php echo $productData['cod_produto']; ?>">
                    <input type="hidden" name="oldImageName" value="<?php echo $productData['imagem'] ?>">
                    <div class="displayFlex" id="containerinput">
                        <input type="text" name="productName" autocomplete="off" placeholder="Nome do produto" value="<?php echo $productData['nome_produto'] ?>">
                        <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="productValue" autocomplete="off" placeholder="Valor do produto" value="<?php echo $productData['preco_atual_produto'] ?>">
                    </div>


                    <div id="containerCategoriesSubCategories" class="displayFlex">
                        <div id="container-categories" class="select">
                            <select name="selectCategory" class="selectCategory">
                                <?php foreach ($datasCategories as $data) { 
                                    if($data['cod_categoria'] == $productData['id_categorias']) { ?>
                                    <option selected value="<?php echo $data['cod_categoria']; ?>"><?php echo $data['nome_categoria']; ?></option>
                                    <?php }
                                    else {
                                    ?>
                                    <option value="<?php echo $data['cod_categoria'] ?>"><?php echo $data['nome_categoria']; }; }; ?></option>
                            </select>
                        </div>

                        <div id="container-SubCategories" class="select">
                            <select name="selectSubCategory" class="selectCategory">
                                <?php foreach ($datasSubcategories as $data) { 
                                    if($data['cod_subcategoria'] == $productData['id_subcategorias']) { ?>
                                    <option selected value="<?php echo $data['cod_subcategoria']; ?>"><?php echo $data['nome_subcategoria']; ?></option>
                                    <?php }
                                    else {
                                    ?>
                                    <option value="<?php echo $data['cod_subcategoria']; ?>"><?php echo $data['nome_subcategoria']; }; }; ?></option>
                            </select>
                        </div>
                    </div>

                    <label for="file" class="inputFile" title="Selecione a imagem">Adicionar a imagem do produto</label>
                    <img src="IMAGES/admin/arrow-light.png" alt="arrow" id="arrow-light-open-modal" class="arrow-light active">
                    <input type="file" name="productImage" id="file">

                    <label for="productDescription" id="labelTextarea">Adicione a descrição do produto</label>
                    <textarea name="productDescription" id="productDescription"><?php echo $productData['descricao_produto']; ?></textarea>
                    <div id="container-btns-edit" class="displayFlex btnsAdmin">
                        <button type="submit" name="btn_submit_changing_products">Adicionar Produto</button>
                        <p class="close-models">Cancelar</p>
                    </div>

                    <div class="displayFlex active" id="modelImageName">
                        <img src="IMAGES/admin/arrow-light.png" alt="arrow" class="arrow-light">
                        <label for="imageName">Nome da imagem:</label>
                        <input type="text" name="imageName" id="imageName" value="<?php echo $productData['imagem']; ?>">
                    </div>
                </form>
            </div>
        <?php }; }; ?>

        <?php if ($whatForm == "categoryChange") {
            // get the category
            $sql = "SELECT * FROM tb_categorias WHERE cod_categoria = :categoryCode";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':categoryCode', $codeProductOrCategory);
            $stmt->execute();
            $categoryDatas = $stmt->fetchAll();
            foreach($categoryDatas as $categoryData) {
            ?>
            <div class="displayFlex" id="containerCategoriesRegister">
                <form action="php_actions/changeCategory.php" class="displayFlex modelForm" id="formCategoriesProduct" method="POST">
                    <label for="descriptionCategory">Nome da categoria:</label>
                    <input type="hidden" name="categoryCode" value="<?php echo $categoryData['cod_categoria']; ?>">
                    <input type="text" name="categoryDescription" id="descriptionCategory" placeholder="Informe o nome da categoria" value="<?php echo $categoryData['nome_categoria']; ?>">

                    <div id="container-btns-edit" class="displayFlex btnsAdmin">
                        <button type="submit" name="btn_submit_categories">Adicionar categoria</button>
                        <p class="close-models">Cancelar</p>
                    </div>
                </form>
            </div>
        <?php }; }; ?>

        <?php if ($whatForm == "subCategoryChange") { 
            // get the subcategory
            $sql = "SELECT * FROM tb_subcategorias WHERE cod_subcategoria = :subCategoryCode";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':subCategoryCode', $codeProductOrCategory);
            $stmt->execute();
            $subCategoryDatas = $stmt->fetchAll();
            foreach($subCategoryDatas as $subCategoryData) {
            ?>
            <div class="displayFlex" id="containerSubCategoriesRegister">
                <form action="php_actions/changeSubCategories.php" class="displayFlex modelForm" id="formCategoriesProduct" method="POST">
                    <label for="descriptionSubCategory">Nome da sub-categoria:</label>
                    <input type="hidden" name="subCategoryCode" value="<?php echo $subCategoryData['cod_subcategoria']; ?>">
                    <input type="text" name="descriptionSubCategory" id="descriptionSubCategory" placeholder="Informe o nome da sub-categoria" value="<?php echo $subCategoryData['nome_subcategoria']; ?>">

                    <div id="container-btns-edit" class="displayFlex btnsAdmin">
                        <button type="submit" name="btn_submit_subcategories">Adicionar sub-categoria</button>
                        <p class="close-models">Cancelar</p>
                    </div>
                </form>
            </div>
        <?php }; }; ?>
    </div>

    <!-- back To Page Admin -->
    <a href="admin.php" class="backToThePreviousPage">Voltar</a>

    <!-- button to navegate to header -->
    <a href="#header" class="goToHeader"><img src="IMAGES/down-arrow-navegation-website.png" alt=""></a>
    <?php
    // Footer
    include_once 'includes/footer.php';
    ?>