<?php 
// database connection
require_once 'db_connect.php';
// function to clear data
include_once '../includes/cleaningData.php';
// sessions start
session_start();

if(isset($_POST['btn_submit'])) {
    $firstName = cleaningData($_POST['firstName']);
    $lastName = cleaningData($_POST['lastName']);
    $cpf = cleaningData($_POST['cpf']);
    $date = cleaningData($_POST['date']);
    $telephone = cleaningData($_POST['telephone']);
    $email = cleaningData($_POST['email']);
    $password = cleaningData($_POST['password']);
    $confirmPassword = cleaningData($_POST['confirm_password']);

    $sql = "INSERT INTO tb_usuarios (primeiro_nome, sobrenome, cpf, data_nasc, telefone_cliente, email_cliente, senha) VALUES ('$firstName', '$lastName', '$cpf', '$date', '$telephone', '$email', '$password')";

    if(mysqli_query($connect, $sql)) {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Cadastrado com sucesso!";
        header('Location: ../login.php');
    }
    else {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Erro ao cadastrar!";
        header('Location: ../register.php');
    }
}
else {
    header('Location: ../index.php');
}
?>