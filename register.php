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
            <h1>Cadastre sua conta</h1>
        </div>

        <div class="container-form displayFlex">
            <form action="php_actions/create.php" class="displayFlex" method="POST">
                <div class="displayFlex">
                    <input type="text" name="firstName" id="firstName" autocomplete="off" placeholder="Primeiro nome" required title="Seu nome">
                    <input type="text" name="lastName" id="lastName" autocomplete="off" placeholder="Sobrenome" required title="Seu nome">
                </div>

                <div class="displayFlex">
                    <input type="text" name="cpf" id="cpf" class="cpf" autocomplete="off" placeholder="CPF" required title="Seu CPF" minlength="11" maxlength="11">
                    <input type="text" name="date" id="date" class="date" placeholder="Data de nascimento" required title="Sua data de nascimento">
                </div>

                <div class="displayFlex">
                    <input type="tel" name="telephone" id="telephone" class="phone_with_ddd" placeholder="Telefone" required title="Seu telefone">
                    <input type="email" name="email" id="email" autocomplete="off" placeholder="Email" required minlength="11"title="Seu email por favor">
                </div>
                
                <div class="displayFlex">
                    <input type="password" name="password" id="password" autocomplete="off" placeholder="Digite sua senha" required minlength="8" title="Sua senha por favor">
                    <input type="password" name="confirm_password" id="password" autocomplete="off" placeholder="Confirme sua senha" required minlength="8" title="Sua senha por favor">
                </div>
                <button type="submit" name="btn_submit">Cadastrar-se</button>
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