<?php
// Header
include_once 'includes/header.php';
?>
    <!-- header -->
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

    <!-- container main -->
    <main>
        <!-- change the team according to the choice of brand -->
        <div class="blueOrRedTeam displayFlex">
            <p class="paragraph-team">Você escolheu o time vermelho da força</p>
        </div>

        <!-- assemble at home -->
        <div class="container-total-values displayFlex">
            <div class="building-at-home displayFlex">
                <img src="IMAGES/main/money.png" alt="" class="img-money">
                <p id="paragraph-building-pc">Montando em casa: <span id="amount-pay-home">R$ 500,00</span></p>
            </div>

            <!-- ready assembly  -->
            <div class="building-ready displayFlex">
                <img src="IMAGES/main/money.png" alt="" class="img-money">
                <p id="paragraph-building-pc">Montagem pronta: <span id="amount-pay-assembly-ready">R$ 1500,00</span></p>
            </div>
        </div>

        <!-- choice of product kits  -->
        <div class="container-choose-hardwares">
            <div class="container-hardwares">
                <p class="paragraph-hardwares">Processador</p>

                <div class="choose-hardwares displayFlex">
                    <div class="container-img">
                        <img src="IMAGES/pageBuildingComputer/processor.png" alt="" class="img-demonstration">
                    </div>
                    <p class="hardwares-description">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                    <div class="hardwares-value-choose displayFlex">
                        <p class="hardwares-value">R$ 1500,00</p>
                        <button type="button" class="btn-choose-hardwares">Escolha</button>
                    </div>
                </div>
            </div>    
        </div>

            <div class="container-choose-hardwares">
                <div class="container-hardwares">
                    <p class="paragraph-hardwares">Sistema de arrefecimento</p>
    
                    <div class="choose-hardwares displayFlex">
                        <div class="container-img">
                            <img src="IMAGES/pageBuildingComputer/air-cooler.png" alt="" class="img-demonstration">
                        </div>
                        <p class="hardwares-description">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                        <div class="hardwares-value-choose displayFlex">
                            <p class="hardwares-value">R$ 1500,00</p>
                            <button type="button" class="btn-choose-hardwares">Escolha</button>
                        </div>
                    </div>
                </div>    
            </div>

            <div class="container-choose-hardwares">
                <div class="container-hardwares">
                    <p class="paragraph-hardwares">Placa mãe</p>
    
                    <div class="choose-hardwares displayFlex">
                        <div class="container-img">
                            <img src="IMAGES/pageBuildingComputer/motherboard.png" alt="" class="img-demonstration">
                        </div>
                        <p class="hardwares-description">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                        <div class="hardwares-value-choose displayFlex">
                            <p class="hardwares-value">R$ 1500,00</p>
                            <button type="button" class="btn-choose-hardwares">Escolha</button>
                        </div>
                    </div>
                </div>    
            </div>

            <div class="container-choose-hardwares">
                <div class="container-hardwares">
                    <p class="paragraph-hardwares">Placa de vídeo</p>
    
                    <div class="choose-hardwares displayFlex">
                        <div class="container-img">
                            <img src="IMAGES/pageBuildingComputer/video-card.png" alt="" class="img-demonstration">
                        </div>
                        <p class="hardwares-description">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                        <div class="hardwares-value-choose displayFlex">
                            <p class="hardwares-value">R$ 1500,00</p>
                            <button type="button" class="btn-choose-hardwares">Escolha</button>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </main>

    <!-- box model for choose hardwares -->
    <div class="box-model-choose-hardwares displayFlex">
        <div class="exit">
            <p class="xOne"></p>
            <p class="xTwo"></p>
        </div>

        <div class="container-choose-hardwares">
            <div class="container-hardwares">
                <p class="paragraph-hardwares">Processador</p>

                <div class="choose-hardwares displayFlex">
                    <img src="IMAGES/pageBuildingComputer/processor.png" alt="" class="img-demonstration">
                    <p class="hardwares-description">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                    <div class="hardwares-value-choose displayFlex">
                        <p class="hardwares-value">R$ 1500,00</p>
                        <button type="button" class="btn-choose-hardwares">Escolha</button>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    <!-- button to navegate to header -->
    <a href="#header" class="goToHeader"><img src="IMAGES/down-arrow-navegation-website.png" alt=""></a>
    
<?php
// Footer
include_once 'includes/footer.php';
?>