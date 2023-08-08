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

        </div>
    </header>

    <!-- cart form -->
    <form class="container-shopping-cart displayFlex">
        <div class="container-address-and-products">
            <div class="address-user">
                <p>Informe seu CEP</p>
                <input type="text" name="cep" id="cep" class="cep" title="Coloque seu CEP">
                <button class="btn-shopping-cart">Confirmar</button>
                <!-- take the button default action -->
            </div>

            <!-- container cart shopping -->
            <div class="container-products">
                <div class="container-text-products displayFlex">
                    <!-- put the image inside the p -->
                    <p>Produtos e Frete</p>
                    <div class="btn-remove">Remover todos os produtos</div>
                </div>
    
                <!-- all products in cart -->
                <table>
                    <tr>
                        <td class="displayFlex" id="cart-product">
                            <div class="container-left-td displayFlex">
                                <img src="IMAGES/pageBuildingComputer/processor.png" alt="">
                                <p class="product-description">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                                <span class="displayFlex">
                                    <p class="addMore">+</p>
                                    <p class="amount">1</p>
                                    <p class="subtration">-</p>
                                </span>
                            </div>

                            <div class="container-right-td displayFlex">
                                <p class="product-value">R$ 1550,00 reais</p>
                                <p class="remove-cart-product">Remover</p>
                            </div>
                        </td>
                        
                        <td class="displayFlex" id="cart-product">
                            <div class="container-left-td displayFlex">
                                <img src="IMAGES/pageBuildingComputer/processor.png" alt="">
                                <p class="product-description">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                                <span class="displayFlex">
                                    <p class="addMore">+</p>
                                    <p class="amount">2</p>
                                    <p class="subtration">-</p>
                                </span>
                            </div>

                            <div class="container-right-td displayFlex">
                                <p class="product-value">R$ 1520,00 reais</p>
                                <p class="remove-cart-product">Remover</p>
                            </div>
                        </td>     

                        <td class="displayFlex" id="cart-product">
                            <div class="container-left-td displayFlex">
                                <img src="IMAGES/pageBuildingComputer/processor.png" alt="">
                                <p class="product-description">Processador Ryzen 5 5600x 6 núcleos 12 threads frequência base 3.6Ghz turbo max. 4.6Ghz</p>
                                <span class="displayFlex">
                                    <p class="addMore">+</p>
                                    <p class="amount">3</p>
                                    <p class="subtration">-</p>
                                </span>
                            </div>

                            <div class="container-right-td displayFlex">
                                <p class="product-value">R$ 1650,00 reais</p>
                                <p class="remove-cart-product">Remover</p>
                            </div>
                        </td>     
                    </tr>
                </table>
    
                <!-- choose freight -->
                <div class="freight">
                    <p class="paragraph-freight">Frete</p>
                    <div class="container-choose-freight">
                        <div class="container-freight-one">
                            <input type="radio" name="freight" id="correio"><label for="correio">Correios PAC</label>
                            <span>R$ 50,00 reais</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- product cart summary  -->
        <div class="value-and-summary-of-products active">
            <p class="paragraph-summary">Resumo do pagamento</p>

            <container class="displayFlex" id="container-values">
                <p class="total-values-products">Valor total dos produtos: <span>R$ 5000.00</span></p>
                <p class="freight-value">Valor total do frete: <span>R$ 50,00</span></p>
                <p class="paragraph-total">Valor total à pagar: <span class="products-total">R$ 5000,00</span></p>

                <div class="container-buttons displayFlex">
                    <!-- if don't have a user, redirect through php -->
                    <a href="paymentPage.php" id="finaly-cart">Finalizar carrinho</a>
                    <a href="index.php" id="keep-shopping">Continuar comprando</a>
                </div>
            </container>
        </div>
    </form>
<?php
// Footer
include_once 'includes/footer.php';
?>
</body>
</html>