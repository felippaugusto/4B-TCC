<?php
// Connection with database
require_once 'php_actions/db_connect.php';
// start sessions
session_start();
$pdo = connect();

if(!isset($_SESSION['adminLogged']) == true) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assembly Tech | E-commerce de periféricos e hardware</title>
    <link rel="stylesheet" href="CSS/admin.css">
    <link rel="shortcut icon" href="IMAGES/header/favicon/computer-96.png" type="image/x-icon">
</head>
<body class="displayFlex">
    <h1>Clientes</h1>

    <table id="tableAdmin">
        <thead>
            <tr>
                <th>Nome:</th>
                <th>Sobrenome:</th>
                <th>Email:</th>
                <th>CPF:</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM tb_usuarios";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $datas = $stmt->fetchAll();
            foreach($datas as $data) {
            ?>
            <tr>
                <td><?php echo $data['nome_cliente']; ?></td>
                <td><?php echo $data['sobrenome']; ?></td>
                <td><?php echo $data['email_cliente']; ?></td>
                <td><?php echo $data['cpf']; ?></td>
                <td><a href="#modal<?php echo $data['cod_cliente']; ?>" class="btnRemove displayFlex"><img src="IMAGES/main/admin/remove1.png" alt="image-remove" class="imageRemove"></a></td>

                <div id="modal<?php echo $data['cod_cliente']; ?>" class="box-model displayFlex">
                    <div class="model-description displayFlex">
                        <p>Você tem certeza que deseja deletar esse cliente?</p>
                        <form action="php_actions/delete.php" method="POST">
                            <div class="container-form displayFlex">
                                <input type="hidden" name="id" value="<?php echo $data['cod_cliente']; ?>">

                                <button type="submit" name="delete-btn" class="btn-remove-form">Deletar usuário</button>
                                <p id="close-model">Cancelar</p>
                            </div>
                        </form>
                    </div>
                </div>
            </tr>
            <?php }; ?>
        </tbody>
    </table>

    <a href="productsRegister.php" id="productRegister">Registro de produtos</a>
    <a href="php_actions/logout.php" id="backToMainPage">Voltar</a>

    <script>
        const btnRemove = document.querySelectorAll(".btnRemove");
        const btnClose = document.querySelector("#close-model");
        const boxModel = document.querySelector(".box-model");

        btnRemove.forEach(btn => {
            btn.addEventListener("click", () => {
                boxModel.classList.add("active");
            })
        })

        btnClose.addEventListener("click", () => {
            boxModel.classList.remove("active");
        })
    </script>
</body>
</html>