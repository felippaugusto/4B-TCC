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
            <div id="loginOrSignUp" class="displayFlex">
                <img src="IMAGES/header/user.png" alt="" id="user-header">
                <a href="login.php" class="loginOrSignUpText">Entrar/Cadastrar</a>
            </div>

            <div id="theme-white-or-dark" class="displayFlex">
                <div id="ball" class="displayFlex">
                    <img src="IMAGES/header/theme-white-and-dark/moon-black.png" alt="" id="moon-and-sun">
                </div>
            </div>

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
    
    <!-- structure main -->
    <main>
        <!-- choose intel or amd -->
        <div class="containerIntelAndAmd displayFlex">
            <a href="building-computer.php" class="containerIntel displayFlex blue" onmouseover="toggleBtnIntelAmd.intelActive()" onmouseout="toggleBtnIntelAmd.intelDesactive()">
                <p class="intel">INTEL</p>
            </a>
    
            <a href="building-computer.php" class="containerAmd displayFlex red" onmouseover="toggleBtnIntelAmd.amdActive()" onmouseout="toggleBtnIntelAmd.amdDesactive()">
                <img src="IMAGES/main/logo-amd/ryzen-amd-logo.png" alt="image-logo-ryzen" class="imgLogoRyzen">
            </a>
        </div>

        <div class="selectAmdOrIntel displayFlex">
            <a href="building-computer.php" class="btnSelectIntel">Selecionar</a>
            <a href="building-computer.php" class="btnSelectAmd">Selecionar</a>
        </div>


        <!-- product showcase -->
        <table class="hardware-showcase">
            <tr class="row-products displayFlex">

                <td class="container-product">
                    <div class="column-products displayFlex">
                        <img src="IMAGES/main/hardware-demonstration/ryzen-5600x-1.png" alt="" class="hardware-image">
                        <p class="product-especification">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                        <p class="product-value">R$ 1200,00 reais</p>
                    </div>
                    <button id="product-1" class="add-cart">Adicionar ao carrinho</button>
                </td>

                <td class="container-product">
                    <div class="column-products displayFlex">
                        <img src="IMAGES/main/hardware-demonstration/ryzen-5600x-1.png" alt="" class="hardware-image">
                        <p class="product-especification">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                        <p class="product-value">R$ 1200,00 reais</p>
                    </div>
                    <button id="product-2" class="add-cart">Adicionar ao carrinho</button>
                </td>
                
                <td class="container-product">
                    <div class="column-products displayFlex">
                        <img src="IMAGES/main/hardware-demonstration/ryzen-5600x-1.png" alt="" class="hardware-image">
                        <p class="product-especification">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                        <p class="product-value">R$ 1200,00 reais</p>
                    </div>
                    <button id="product-3" class="add-cart">Adicionar ao carrinho</button>
                </td>
                
                <td class="container-product">
                    <div class="column-products displayFlex">
                        <img src="IMAGES/main/hardware-demonstration/ryzen-5600x-1.png" alt="" class="hardware-image">
                        <p class="product-especification">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                        <p class="product-value">R$ 1200,00 reais</p>
                    </div>
                    <button class="add-cart">Adicionar ao carrinho</button>
                </td>

                <td class="container-product">
                    <div class="column-products displayFlex">
                        <img src="IMAGES/main/hardware-demonstration/ryzen-5600x-1.png" alt="" class="hardware-image">
                        <p class="product-especification">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                        <p class="product-value">R$ 1200,00 reais</p>
                    </div>
                    <button id="product-1" class="add-cart">Adicionar ao carrinho</button>
                </td>

                <td class="container-product">
                    <div class="column-products displayFlex">
                        <img src="IMAGES/main/hardware-demonstration/ryzen-5600x-1.png" alt="" class="hardware-image">
                        <p class="product-especification">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                        <p class="product-value">R$ 1200,00 reais</p>
                    </div>
                    <button id="product-2" class="add-cart">Adicionar ao carrinho</button>
                </td>
                
                <td class="container-product">
                    <div class="column-products displayFlex">
                        <img src="IMAGES/main/hardware-demonstration/ryzen-5600x-1.png" alt="" class="hardware-image">
                        <p class="product-especification">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                        <p class="product-value">R$ 1200,00 reais</p>
                    </div>
                    <button id="product-3" class="add-cart">Adicionar ao carrinho</button>
                </td>
                
                <td class="container-product">
                    <div class="column-products displayFlex">
                        <img src="IMAGES/main/hardware-demonstration/ryzen-5600x-1.png" alt="" class="hardware-image">
                        <p class="product-especification">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                        <p class="product-value">R$ 1200,00 reais</p>
                    </div>
                    <button class="add-cart">Adicionar ao carrinho</button>
                </td>

            </tr>
        </table>
    </main>

    <!-- button to navegate to header -->
    <a href="#header" class="goToHeader"><img src="IMAGES/down-arrow-navegation-website.png" alt=""></a>

<?php
// Footer
include_once 'includes/footer.php';
?>