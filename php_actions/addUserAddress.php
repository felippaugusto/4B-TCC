<?php
// start sessions
session_start();
// Connection with database
require_once 'db_connect.php';
// function to clear data
include_once '../includes/cleaningData.php';

if(isset($_POST['btn_submit_user-address'])) {
    $cep = cleaningData($_POST['cep']);
    $street = cleaningData($_POST['street']);
    $neighborhood = cleaningData($_POST['neighborhood']);
    $complement = cleaningData($_POST['complement']);
    $selectState = cleaningData($_POST['selectState']);
    $houseNumber = cleaningData($_POST['houseNumber']);
    $id = cleaningData($_POST['id']);

    $sql = "UPDATE tb_usuarios SET cep = '$cep', rua = '$street', complemento = '$complement', bairro = '$neighborhood', numero_casa = '$houseNumber' WHERE cod_cliente = '$id'";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Atualizado com sucesso!";
        header("Location: ../user-page.php?id=$id");
    }
    else {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Erro ao atualizar!";
        header("Location: ../user-page.php?id='$id'");
    }
}
?>