<?php
// start sessions
session_start();
// Connection with database
require_once 'db_connect.php';
// function to clear data
include_once '../includes/cleaningData.php';

if(isset($_POST['btn_submit_edit_user-informations'])) {
    $firstName = cleaningData($_POST['firstName']);
    $lastName = cleaningData($_POST['lastName']);
    $name = $firstName . " " . $lastName;
    $cpf = cleaningData($_POST['cpf']);
    $date = cleaningData($_POST['date']);
    $telephone = cleaningData($_POST['telephone']);
    $email = cleaningData($_POST['email']);

    $id = cleaningData($_POST['id']);

    // formatted date
    $date = date("Y-d-m", strtotime($date));
    $date = str_replace("/", "-", $date);

    // formatted cpf
    $arrayCpf = array(".", "-");
    $cpf = str_replace($arrayCpf, "", $cpf);

    // formatted telephone
    $arrayTelephone = array("(", ")", "-", " ");
    $telephone = str_replace($arrayTelephone, "", $telephone);

    $sql = "UPDATE tb_usuarios SET nome_cliente = '$firstName', sobrenome = '$lastName', cpf = '$cpf', data_nasc = '$date', telefone_cliente = '$telephone', email_cliente = '$email' WHERE cod_cliente = '$id'";

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