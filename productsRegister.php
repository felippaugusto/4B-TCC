<?php
// Header
include_once 'includes/header.php';

if(!isset($_SESSION['adminLogged']) == true) {
    header('Location: index.php');
}
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

            <div id="theme-white-or-dark" class="displayFlex">
                <div id="ball" class="displayFlex">
                    <img src="IMAGES/header/theme-white-and-dark/moon-black.png" alt="" id="moon-and-sun">
                </div>
            </div>

        </div>
    </header>

    <div class="container-login displayFlex">
        <div class="container-text">
            <p>Assembly Tech</p>
            <h1>Registro de produtos</h1>
        </div>

        <div class="container-form displayFlex" id="productForm">
            <form action="" class="displayFlex" method="POST">
                <div class="displayFlex">
                    <input type="text" name="productName" autocomplete="off" placeholder="Nome do produto" required>
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="valueProduct" autocomplete="off" placeholder="Valor do produto">
                </div>

                <div class="displayFlex">
                    <label for="file" class="inputFile">Adicionar a imagem do produto</label>
                    <input type="file" name="productImage" id="file">

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

                <label for="productDescription" id="labelTextarea">Adicione a descrição do produto</label>
                <textarea name="productDescription" id="productDescription"></textarea>
                <button type="submit" name="btn_submit">Cadastrar produto</button>
            </form>
        </div>
    </div>

    <a href="login.php" class="backToThePreviousPage">Voltar</a>

    <!-- button to navegate to header -->
    <a href="#header" class="goToHeader"><img src="IMAGES/down-arrow-navegation-website.png" alt=""></a>

<?php
// Footer
include_once 'includes/footer.php';
?>