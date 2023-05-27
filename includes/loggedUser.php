<?php
    if(!isset($_SESSION['logged'])) {
        ?>
        <div id="loginOrSignUp" class="displayFlex">
            <img src="IMAGES/header/user.png" alt="" id="user-header">
            <a href="login.php" class="loginOrSignUpText">Entrar/Cadastrar</a>
        </div>
        <?php
        }
        else {
        // datas
        $id = $_SESSION['id_user'];
        $sql = "SELECT * FROM tb_users WHERE id_users = '$id'";
        $result = mysqli_query($connect, $sql);
        $datas = mysqli_fetch_array($result);
        ?>
            <div id="containerLoggedUser" class="displayFlex">
                <img src="IMAGES/header/user.png" alt="user-header" id="user-header">
                <p id="userName"><?php echo $datas['first_name']; ?></p>

                <div class="modelLoggedUser">
                    <a href="user-page.php?id=<?php echo $datas['id_users']; ?>" id="userPage">Meu perfil</a>
                    <a href="php_actions/logout.php" id="exitUser">Sair</a>
                </div>
            </div>
        <?php
    }
    ?>