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
        $sql = "SELECT * FROM tb_usuarios WHERE cod_cliente = '$id'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $datas =  $stmt->fetchAll();

        foreach($datas as $data) { ?>
        ?>
            <div id="containerLoggedUser" class="displayFlex">
                <img src="IMAGES/header/user.png" alt="user-header" id="user-header">
                <p id="userName"><?php echo $data['nome_cliente']; ?></p>

                <div class="modelLoggedUser">
                    <a href="user-page.php?id=<?php echo $data['cod_cliente']; ?>" id="userPage">Meu perfil</a>
                    <a href="php_actions/logout.php" id="exitUser">Sair</a>
                </div>
            </div>
        <?php }} ?>