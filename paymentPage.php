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

<form action="#" method="" class="displayFlex" id="mainPaymentPage">
    <div id="containerPaymentPage" class="displayflex">
        <div class="displayFlex" id="containerPaymentParagraph">
            <img src="IMAGES/paymentsPage/image-payment-method.png" alt="payment-image">
            <h1>Forma de pagamento</h1>
        </div>

        <div class="displayFlex" id="paymentMethodAndValues">

            <div class="containerPaymentsMethods">
                <div id="containerMoney">
                    <label for="inputMoney" class="displayFlex labelInputsPayment">
                        <img src="IMAGES/paymentsPage/money.png" alt="money">
                        <span>Dinheiro</span>
                    </label>
                    <input type="radio" name="money" id="inputMoney">
                </div>

                <div id="containerPix">
                    <label for="inputPix" class="displayFlex labelInputsPayment">
                        <img src="IMAGES/paymentsPage/pix.png" alt="pix">
                        <span>Pix</span>
                    </label>
                    <input type="radio" name="pix" id="inputPix">
                </div>
            </div>

            <div class="containerValues">
                <p id="ParagraphPaymentMethod">Dinheiro</p>
                <div class="containerAmount">
                    <p id="paragraphPurchaseValue">Total da sua compra</p>
                    <p id="purchaseValue">R$ 1555,00 reais</p>
                </div>
            </div>
        </div>
    </div>

    <div id="containerBtns">
        <a href="shopping-cart.php">Voltar</a>
        <button>Pagar com dinheiro</button>
    </div>
</form>

<?php
// Footer
include_once 'includes/footer.php';
?>