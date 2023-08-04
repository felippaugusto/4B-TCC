<?php
    if(!isset($_SESSION['logged'])) {
        ?>
        <div id="loginOrSignUp" class="displayFlex">
            <img src="../IMAGES/includes/header/user.png" alt="" id="user-header">
            <a href="login.php" class="loginOrSignUpText">Entrar/Cadastrar</a>
        </div>
        <?php
        }
        else {
        // datas
        $id = $_SESSION['id_user'];
        $datas =  selectAllFromTableWhere("tb_usuarios", "cod_usuario", $id, "fetchAll", "código inválido");

        foreach($datas as $data) { 
        ?>
            <div id="containerLoggedUser" class="displayFlex">
                <img src="IMAGES/includes/header/user.png" alt="user-header" id="user-header">
                <p id="userName"><?php echo $data['nome_usuario']; ?></p>

                <div class="modelLoggedUser">
                    <a href="user-page.php?id=<?php echo $data['cod_usuario']; ?>" id="userPage">Meu perfil</a>
                    <a href="php_actions/logout.php" id="exitUser">Sair</a>
                </div>
            </div>
        <?php }} ?>