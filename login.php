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
            <h1>Faça login em sua conta</h1>
        </div>

        <div class="container-form login displayFlex">
            <form action="php_actions/read.php" class="displayFlex" method="POST">

                <div class="container-email displayFlex">
                    <label for="email"><img src="IMAGES/form-login/email.png" alt="" id="img-email"></label>
                    <input type="email" name="email" id="email" autocomplete="off" placeholder="Email" required minlength="11" title="Seu email por favor">
                </div>

                <div class="container-password displayFlex">
                    <label for="password"><img src="IMAGES/form-login/padlock.png" alt="" id="img-password"></label>
                    <input type="password" name="password" id="password" autocomplete="off" placeholder="Senha" required minlength="8" title="Sua senha por favor">
                </div>
                <button type="submit" name="btn_submit">Entrar</button>
            </form>
            <a href="register.php" id="register">Não tem uma conta? <span>Registre-se</span></a>
        </div>
    </div>

<?php
// Footer
include_once 'includes/footer.php';
?>