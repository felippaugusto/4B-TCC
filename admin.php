<?php
// Connection with database
require_once 'php_actions/db_connect.php';
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
            $sql = "SELECT * FROM tb_users";
            $result = mysqli_query($connect, $sql);
            while($data = mysqli_fetch_array($result)):
            ?>
            <tr>
                <td><?php echo $data['first_name']; ?></td>
                <td><?php echo $data['last_name']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['cpf']; ?></td>
                <td><a href="#modal<?php echo $data['id_users']; ?>" class="btnRemove displayFlex"><img src="IMAGES/main/admin/remove1.png" alt="image-remove" class="imageRemove"></a></td>

                <div id="modal<?php echo $data['id_users']; ?>" class="box-model displayFlex">
                    <div class="model-description displayFlex">
                        <p>Você tem certeza que deseja deletar esse cliente?</p>
                        <form action="php_actions/delete.php" method="POST">
                            <div class="container-form displayFlex">
                                <input type="hidden" name="id" value="<?php echo $data['id_users']; ?>">

                                <button type="submit" name="delete-btn" class="btn-remove-form">Deletar usuário</button>
                                <p id="close-model">Cancelar</p>
                            </div>
                        </form>
                    </div>
                </div>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <a href="index.php" id="backToMainPage">Voltar</a>

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