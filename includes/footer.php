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
    <script src="JS/jquery.mask.js"></script>
    <script src="JS/mascara.js"></script>
    <script src="JS/light-mode-and-dark-mode.js"></script>
    <script src="JS/index.js"></script>
    <script src="JS/shopping-cart.js"></script>
    <script src="JS/building-computer.js"></script>
    <script src="JS/admin.js"></script>
    <script>
        function typeWriter() {
            const title = document.querySelector(".paragraph-team");

            let counter = 95;
            const textoArray = title.innerHTML.split('');
            title.innerHTML = "";
            textoArray.forEach((letra, i) => {
                counter += 75;
                setTimeout(function() {
                    title.innerHTML += letra; 
                }, counter);
            })   
        }

        setTimeout(typeWriter, 2000)


    </script>
    <script>
        const containerLoggedUser = $("#containerLoggedUser");
        const modelLoggedUser = $(".modelLoggedUser");

        containerLoggedUser.mouseover(() => {
            modelLoggedUser.addClass("active");

            console.log("adicionou");
        })

        containerLoggedUser.mouseout(() => {
            modelLoggedUser.removeClass("active");
            console.log("removeu");
        })
    </script>
    <script src="JS/userPage.js"></script>
</body>
</html>