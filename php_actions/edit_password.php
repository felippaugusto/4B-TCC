<?php
// start sessions
session_start();
// Connection with database
require_once 'db_connect.php';
$pdo = connect();

// btn form submit
if(isset($_POST['btn_submit_edit_password'])) {
    // inputs and user id
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $id = $_POST['id'];

    // getting bank password
    $sql = "SELECT senha FROM tb_usuarios WHERE cod_cliente = '$id'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount() > 0) {
        $data = $stmt->fetch();
        $password_db = $data['senha'];

        // verify current password
        if(password_verify($currentPassword, $password_db)) {
            // new encrypted password
            $newEncryptedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            // password update 
            $sql = "UPDATE tb_usuarios SET senha = :newPassword WHERE cod_usuario = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':newPassword', $newEncryptedPassword);
            $stmt->bindParam(':id', $id);
            $stmt->execute();

            if($stmt->rowCount() == 1) {
                $_SESSION['messagesVerify'] = true;
                $_SESSION['messages'] = "Atualizado com sucesso!";
                header("Location: ../user-page.php?id=$id");
            }
            else {
                $_SESSION['messagesVerify'] = true;
                $_SESSION['messages'] = "Erro ao atualizar!";
                header("Location: ../user-page.php?id=$id");
            }
        }
        else {
            $_SESSION['messagesVerify'] = true;
            $_SESSION['messages'] = "Senha não condiz com a atual!";
            header("Location: ../user-page.php?id=$id");
        }
    }
}
?>