<?php
// start sessions
session_start();
// Connection with database
require_once 'db_connect.php';
// function to clear data
include_once '../includes/cleaningData.php';

if(isset($_POST['btn_submit_edit_password'])) {
    $currentPassword = cleaningData($_POST['currentPassword']);;
    $newPassword = cleaningData($_POST['newPassword']);
    $id = cleaningData($_POST['id']);;

    $sql = "SELECT senha FROM tb_usuarios WHERE senha = '$currentPassword' AND cod_cliente = '$id'";
    $result = mysqli_query($connect, $sql);
    
    if(mysqli_num_rows($result) == 1) {
        $sql = "UPDATE tb_usuarios SET senha = '$newPassword' WHERE cod_cliente = '$id'";

        if(mysqli_query($connect, $sql)) {
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
        $_SESSION['messages'] = "Senha atual incorreta!";
        header("Location: ../user-page.php?id=$id");
    }
}
?>