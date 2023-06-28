<?php
// Connection with database
require_once 'php_actions/db_connect.php';
$pdo = connect();
// Start sessions 
session_start();
// Messages
include_once 'includes/messages.php';

if(!isset($_SESSION['adminLogged']) == true) {
    header('Location: login.php');
}
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
    <link rel="shortcut icon" href="IMAGES/header/favicon/computer-96.png" type="image/x-icon">
</head>
<body>

    <!-- header structure -->
    <!-- header left -->
    <header class="displayFlex header" id="header">
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

    <div id="containerUserPage" class="displayFlex">
        <!-- add products -->
        <div class="divChilds" id="productRegister">
            <p>Registro de Produtos</p>
        </div>

        <!-- form model products register -->
        <div class="modelEdit displayFlex" id="containerProductRegister">
            <form action="php_actions/createProducts.php" class="displayFlex modelForm" id="formProductRegister" method="POST" enctype="multipart/form-data">
                <div class="displayFlex" id="containerinput">
                    <input type="text" name="productName" autocomplete="off" placeholder="Nome do produto" required>
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="valueProduct" autocomplete="off" placeholder="Valor do produto">
                </div>

                <div class="displayFlex">
                    <div id="containerCategoriesSubCategories" class="displayFlex">

                        <div id="container-categories" class="select">
                            <select name="selectCategory" class="selectCategory">
                                <option selected disabled>Escolha uma categoria</option>
                                <option value="INTEL">INTEL</option>
                                <option value="AMD">AMD</option>
                                <option value="NVIDIA">NVIDIA</option>
                                <option value="RADEON">RADEON</option>
                            </select>
                        </div>

                        <div id="container-SubCategories" class="select">
                            <select name="selectSubCategory" class="selectCategory">
                                <option selected disabled>Escolha uma sub categoria</option>
                                <option value="INTEL">LGA 1155</option>
                                <option value="AMD">AM4</option>
                                <option value="NVIDIA">DDR4</option>
                                <option value="RADEON">NVME</option>   
                            </select>
                        </div>
                    </div>
                </div>
                <label for="file" class="inputFile">Adicionar a imagem do produto</label>
                <input type="file" name="productImage" id="file">

                <label for="productDescription" id="labelTextarea">Adicione a descrição do produto</label>
                <textarea name="productDescription" id="productDescription"></textarea>
                <div id="container-btns-edit" class="displayFlex btnsAdmin">
                    <button type="submit" name="btn_submit_products">Adicionar Produto</button>
                    <p class="close-models">Cancelar</p>
                </div>
            </form>
        </div>

        <!-- add categories -->
        <div class="divChilds" id="categoryRegister">
            <p>Registro de categorias</p>
        </div>

        <!-- form model categories register -->
        <div class="modelEdit displayFlex" id="containerCategoriesRegister">
            <form action="php_actions/createCategories.php" class="displayFlex modelForm" id="formCategoriesProduct" method="POST">
                <label for="descriptionCategory">Nome da categoria:</label>
                <input type="text" name="descriptionCategory" id="descriptionCategory" placeholder="Informe o nome da categoria">

                <div id="container-btns-edit" class="displayFlex btnsAdmin">
                    <button type="submit" name="btn_submit_categories">Adicionar categoria</button>
                    <p class="close-models">Cancelar</p>
                </div>
            </form>
        </div>

        <!-- add sub categories -->
        <div class="divChilds" id="subCategoryRegister">
            <p>Registro de sub-categorias</p>
        </div>

        <!-- form model categories register -->
        <div class="modelEdit displayFlex" id="containerSubCategoriesRegister">
            <form action="php_actions/createSubcategories.php" class="displayFlex modelForm" id="formCategoriesProduct" method="POST">
                <label for="descriptionSubCategory">Nome da sub-categoria:</label>
                <input type="text" name="descriptionSubCategory" id="descriptionSubCategory" placeholder="Informe o nome da sub-categoria">

                <div id="container-btns-edit" class="displayFlex btnsAdmin">
                    <button type="submit" name="btn_submit_subcategories">Adicionar sub-categoria</button>
                    <p class="close-models">Cancelar</p>
                </div>
            </form>
        </div>
    </div>

    <!-- back To Page Admin -->
    <a href="admin.php" class="backToThePreviousPage">Voltar</a>

    <!-- button to navegate to header -->
    <a href="#header" class="goToHeader"><img src="IMAGES/down-arrow-navegation-website.png" alt=""></a>
<?php
// Footer
include_once 'includes/footer.php';
?>