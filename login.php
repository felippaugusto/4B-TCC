<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assembly Tech | E-commerce de periféricos e hardware</title>
    <link rel="stylesheet" href="CSS/globals.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/footer.css">
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

    <div class="container-login displayFlex">
        <div class="container-text">
            <p>Assembly Tech</p>
            <h1>Faça login em sua conta</h1>
        </div>

        <div class="container-form displayFlex">
            <form action="" class="displayFlex">
                <div class="container-email displayFlex">
                    <label for="email"><img src="IMAGES/form-login/email.png" alt="" id="img-email"></label>
                    <input type="email" name="email" id="email" autocomplete="off" placeholder="Email" required minlength="11" title="Seu email por favor">
                </div>

                <div class="container-password displayFlex">
                    <label for="password"><img src="IMAGES/form-login/padlock.png" alt="" id="img-password"></label>
                    <input type="password" name="password" id="password" autocomplete="off" placeholder="Senha" required minlength="8" title="Sua senha por favor">
                </div>
                <button type="submit">Entrar</button>
            </form>
            <a href="register.php" id="register">Não tem uma conta? <span>Registre-se</span></a>
        </div>
    </div>

    <!-- social medias -->
    <div class="social-medias displayFlex">
        <a href="https://www.youtube.com" target="_blank"><img src="IMAGES/footer/youtube.png" alt="youtube" id="youtube"></a>
        
        <a href="https://www.instagram.com/" target="_blank"><img src="IMAGES/footer/instagram.png" alt="instagram" id="instagram"></a>

        <a href="www.facebook.com/" target="_blank"><img src="IMAGES/footer/facebook.png" alt="facebook" id="facebook"></a>

        <a href="twitter.com/" target="_blank"><img src="IMAGES/footer/twitter.png" alt="twitter" id="twitter"></a>

        <a href="https://www.whatsapp.com/" target="_blank"><img src="IMAGES/footer/whatsApp.png" alt="watsApp" id="watsApp"></a>
    </div>

    <!-- footer -->
    <footer class="displayFlex footer">
        <div class="container-logo-footer displayFlex">
            <img src="IMAGES/header/video-card-image/graphic-card-4.png" alt="" class="footerImg">
            <p class="logo-footer">Assembly Tech</p>
        </div>

        <div class="footer-text">
            <p>Assembly Tech e varejo de produtos voltados a informática</p>
            <p id="address-footer">Cascavel-PR</p>
        </div>

        <div class="footer-text">
            <p>Somos um E-commerce - não temos atendimento disponível presencialmente</p>
        </div>
    </footer>

    <script src="JS/jquery.js"></script>
    <script src="JS/light-mode-and-dark-mode.js"></script>
</body>
</html>