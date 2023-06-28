<?php
// Header
include_once 'includes/header.php';
// Messages
include_once 'includes/messages.php';

if(!isset($_SESSION['logged'])) {
    header('Location: index.php');
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tb_usuarios WHERE cod_cliente = '$id'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $datas = $stmt->fetchALL();;

    foreach($datas as $data) {
    $dataNasc = date("d/m/Y", strtotime($data['data_nasc']));
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
        </div>

        <!-- form model changing user personal informations -->
        <div class="modelChangingUserInformations modelEdit displayFlex">
            <form action="php_actions/edit_user_informations.php" method="POST" class="modelForm personalInformations displayFlex">
                <input type="hidden" name="id" value="<?php echo $data['cod_cliente']; ?>">

                <div class="displayFlex inputs">
                    <input type="text" name="firstName" id="firstName" autocomplete="off" placeholder="Primeiro nome" required title="Seu nome" value="<?php echo $data['nome_cliente']; ?>">
                    <input type="text" name="lastName" id="lastName" autocomplete="off" placeholder="Sobrenome" required title="Seu nome" value="<?php echo $data['sobrenome']; ?>">
                </div>

                <div class="displayFlex inputs">
                    <input type="text" name="cpf" id="cpf" class="cpf" autocomplete="off" placeholder="CPF" required title="Seu CPF" minlength="11" maxlength="11" value="<?php echo $data['cpf']; ?>">
                    <input type="text" name="date" id="date" class="date" placeholder="Data de nascimento" required title="Sua data de nascimento" value="<?php echo $dataNasc; ?>">
                </div>

                <div class="displayFlex inputs">
                    <input type="tel" name="telephone" id="telephone" class="phone_with_ddd" placeholder="Telefone" required title="Seu telefone" value="<?php echo $data['telefone_cliente']; ?>">
                    <input type="email" name="email" id="email" autocomplete="off" placeholder="Email" required minlength="11"title="Seu email por favor" value="<?php echo $data['email_cliente']; ?>">
                </div>  

                <div id="container-btns-edit" class="displayFlex">
                    <button type="submit" name="btn_submit_edit_user-informations">Confirmar as alterações</button>
                    <p class="close-models">Cancelar</p>
                </div>
            </form>
        </div>

        <!-- add users address -->
        <div class="divChilds" id="userAddress">
            <p>Endereço</p>
        </div>

        <!-- form model add users address -->
        <div class="modelEdit modelUserAddress displayFlex">
            <form action="php_actions/addUserAddress.php" method="POST" class="modelForm displayFlex" id="formUserAddress">
                <input type="hidden" name="id" value="<?php echo $data['cod_cliente']; ?>">

                <div class="displayFlex">
                    <input type="text" name="cep" class="cep" required placeholder="Informe seu CEP" title="CEP atual" id="cep" value="<?php echo $data['cep']; ?>">
                    <input type="text" name="street" required placeholder="Informe a rua" id="street" minlength="3" title="Nome da rua" value="<?php echo $data['rua']; ?>">
                </div>

                <div class="displayFlex">
                    <input type="text" name="neighborhood" required placeholder="Informe o bairro" id="neighborhood" minlength="3" title="Nome do bairro" value="<?php echo $data['bairro']; ?>">
                    <input type="text" name="complement" id="complement" placeholder="Informe o complemento" required title="Complemento atual" value="<?php echo $data['complemento']; ?>"> 
                </div>

                <div class="displayFlex"> 
                    <input type="text" name="houseNumber" id="houseNumber" placeholder="Informe o número da residência" required title="Número da residência" value="<?php echo $data['numero_casa']; ?>">

                    <div class="select">
                        <select name="selectState" class="selectCategory">
                            <option selected disabled>Selecione o estado</option>
                            <option value="Paraná">Paraná</option>
                            <option value="Santa Catarina">Santa Catarina</option>
                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                        </select>
                    </div>
                </div>

                <div id="container-btns-edit" class="displayFlex">
                    <button type="submit" name="btn_submit_user-address">Adicionar endereço</button>
                    <p class="close-models">Cancelar</p>
                </div>
            </form>
        </div>

        <!-- Change user password -->
        <div id="changingUserPassword" class="divChilds"><p>Mudar Senha</p></div>

        <!-- form model changing user Password -->
        <div class="modelChangingPassword modelEdit displayFlex ">
            <form action="php_actions/edit_password.php" method="POST" class="modelForm displayFlex">
                <input type="hidden" name="id" value="<?php echo $data['cod_cliente']; ?>">

                <label for="current-password">Senha Atual</label>
                <input type="text" name="currentPassword" required placeholder="Senha atual" id="current-password" title="Senha Atual">

                <label for="new-password">Senha Nova</label>
                <input type="text" name="newPassword" required placeholder="Nova Senha" id="new-password" minlength="8" title="Nova senha">

                <div id="container-btns-edit" class="displayFlex">
                    <button type="submit" name="btn_submit_edit_password">Alterar a senha</button>
                    <p class="close-models">Cancelar</p>
                </div>
            </form>
        </div>

        <!-- Sign out of user account -->
        <a href="php_actions/logout.php" id="signOut" class="divChilds"><p>Sair</p></a>
    </div>
<?php
// Footer
include_once 'includes/footer.php';
} ?>