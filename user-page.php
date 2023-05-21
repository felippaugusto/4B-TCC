<?php
// Header
include_once 'includes/header.php';

if(!isset($_SESSION['logged'])) {
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
            <!-- registered or logged user -->
            <?php include_once 'includes/loggedUser.php'; ?>

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

    <div id="containerUserPage" class="displayFlex">
        <!-- add users information and edit button -->
        <div id="userRegistration" class="divChilds">
            <p>Informações pessoais</p>

            <!-- make a form to edit -->
            <!-- <div id="containerUserInformation">
                
                <p id="fistName">Felipp</p>
                <p id="lastName">Piran</p>
                <p id="date">21/03/1990</p>
                <p id="cpf">192.121.342.42</p>
                <p id="email">felipp@gmail.com</p>
                <p id="telephone">(45)934265823</p>
            </div> -->
        </div>

        <!-- form model changing user personal informations -->
        <div class="modelChangingUserInformations modelEdit displayFlex">
            <form action="php_actions/edit_user_informations.php" method="POST" class="modelForm personalInformations displayFlex">
                <div class="displayFlex inputs">
                    <input type="text" name="firstName" id="firstName" autocomplete="off" placeholder="Primeiro nome" required title="Seu nome">
                    <input type="text" name="lastName" id="lastName" autocomplete="off" placeholder="Sobrenome" required title="Seu nome">
                </div>

                <div class="displayFlex inputs">
                    <input type="text" name="cpf" id="cpf" class="cpf" autocomplete="off" placeholder="CPF" required title="Seu CPF" minlength="11" maxlength="11">
                    <input type="text" name="date" id="date" class="date" placeholder="Data de nascimento" required title="Sua data de nascimento">
                </div>

                <div class="displayFlex inputs">
                    <input type="tel" name="telephone" id="telephone" class="phone_with_ddd" placeholder="Telefone" required title="Seu telefone">
                    <input type="email" name="email" id="email" autocomplete="off" placeholder="Email" required minlength="11"title="Seu email por favor">
                </div>  

                <div id="container-btns-edit" class="displayFlex">
                    <button type="submit" name="btn_submit_edit_user-informations">Alterar a senha</button>
                    <p id="close-model-edit-user-informations">Cancelar</p>
                </div>
            </form>
        </div>

        <!-- Change user password -->
        <div id="changingUserPassword" class="divChilds"><p>Mudar Senha</p></div>

        <!-- form model changing user Password -->
        <div class="modelChangingPassword modelEdit displayFlex ">
            <form action="php_actions/edit_password.php" method="POST" class="modelForm displayFlex">
                <label for="current-password">Senha Atual</label>
                <input type="text" name="currentPassword" required placeholder="Senha atual" id="current-password">

                <label for="new-password">Senha Nova</label>
                <input type="text" name="currentPassword" required placeholder="Senha atual" id="new-password">

                <div id="container-btns-edit" class="displayFlex">
                    <button type="submit" name="btn_submit_edit_password">Alterar a senha</button>
                    <p id="close-model-edit-password">Cancelar</p>
                </div>
            </form>
        </div>

        <!-- Sign out of user account -->
        <a href="php_actions/logout.php" id="signOut" class="divChilds"><p>Sair</p></a>
    </div>
<?php
// Footer
include_once 'includes/footer.php';
?>