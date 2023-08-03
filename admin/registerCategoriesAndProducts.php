<?php
include_once '../includes/headerAdmin.php';
// get the categories
$datasCategories = selectAllFromTable("tb_categorias");
// get the subcategories
$datasSubcategories = selectAllFromTable("tb_subcategorias");
?>
    <!-- header structure -->
    <!-- header left -->
    <header class="displayFlex header headerAdmin" id="headerRegistrationAdminPage">
        <a href="../index.php" class="text-logo-header displayFlex">
            <p>Assembly</p>
            <p>Tech</p>
        </a>

        <!-- header right -->
        <div class="header-right displayFlex">

            <div id="theme-white-or-dark" class="displayFlex">
                <div id="ball" class="displayFlex">
                    <img src="../IMAGES/includes/header/theme-white-and-dark/moon-black.png" alt="" id="moon-and-sun">
                </div>
            </div>

        </div>
    </header>

    <!-- admin screen for registering products and categories -->
    <div id="containerUserPage" class="displayFlex">
        <!-- add products -->
        <div class="divChilds" id="productRegister">
            <p>Registro de Produtos</p>
        </div>

        <!-- form model products register -->
        <div class="modelEdit displayFlex" id="containerProductRegister">
            <form action="../php_actions/createProducts.php" class="displayFlex modelForm" id="formProductRegister" method="POST" enctype="multipart/form-data">
                <div class="displayFlex" id="containerinput">
                    <input type="text" name="productName" autocomplete="off" placeholder="Nome do produto">
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="valueProduct" autocomplete="off" placeholder="Valor do produto">
                </div>

        
                <div id="containerCategoriesSubCategories" class="displayFlex">
                    <div id="container-categories" class="select">
                        <select name="selectCategory" class="selectCategory">
                            <option selected disabled>Escolha uma categoria</option>
                            <?php foreach($datasCategories as $data) { ?>
                            <option value="<?php echo $data['cod_categoria'] ?>"><?php echo $data['nome_categoria']; }; ?></option>
                        </select>
                    </div>

                    <div id="container-SubCategories" class="select">
                        <select name="selectSubCategory" class="selectCategory">
                            <option selected disabled>Escolha uma sub categoria</option>
                            <?php foreach($datasSubcategories as $data) { ?>
                            <option value="<?php echo $data['cod_subcategoria']; ?>"><?php echo $data['nome_subcategoria']; }; ?></option>  
                        </select>
                    </div>
                </div>
                
                <label for="file" class="inputFile" id="inputFileProductRegister">Adicionar a imagem do produto</label>
                <img src="../IMAGES/admin/arrow-light.png" alt="arrow" id="arrow-light-open-modal" class="arrow-light">
                <input type="file" name="productImage" id="file">

                <label for="productDescription" id="labelTextarea">Adicione a descrição do produto</label>
                <textarea name="productDescription" id="productDescription"></textarea>
                <div id="container-btns-edit" class="displayFlex btnsAdmin">
                    <button type="submit" name="btn_submit_products">Adicionar Produto</button>
                    <p class="close-models">Cancelar</p>
                </div>

                <div class="displayFlex" id="modelImageName">
                    <img src="../IMAGES/admin/arrow-light.png" alt="arrow" class="arrow-light">
                    <label for="imageName">Nome da imagem:</label>
                    <input type="text" name="imageName" id="imageName">
                </div>
            </form>
        </div>

        <!-- add categories -->
        <div class="divChilds" id="categoryRegister">
            <p>Registro de categorias</p>
        </div>

        <!-- form model categories register -->
        <div class="modelEdit displayFlex" id="containerCategoriesRegister">
            <form action="../php_actions/createCategories.php" class="displayFlex modelForm" id="formCategoriesProduct" method="POST">
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
            <form action="../php_actions/createSubcategories.php" class="displayFlex modelForm" id="formCategoriesProduct" method="POST">
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
include_once '../includes/footerAdmin.php';
?>