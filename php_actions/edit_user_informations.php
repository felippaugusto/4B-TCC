<?php
// start sessions
session_start();
// Connection with database
require_once 'db_connect.php';

if(isset($_POST['btn_submit_edit_user-informations'])) {
    $firstName = mysqli_escape_string($connect, $_POST['firstName']);
    $lastName = mysqli_escape_string($connect, $_POST['lastName']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $date = mysqli_escape_string($connect, $_POST['date']);
    $telephone = mysqli_escape_string($connect, $_POST['telephone']);
    $email = mysqli_escape_string($connect, $_POST['email']);

    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE tb_users SET first_name = '$firstName', last_name = '$lastName', cpf = '$cpf', data_birthday = '$date', telephone = '$telephone', email = '$email' WHERE id_users = '$id'";

    if(mysqli_query($connect, $sql)) {
        header("Location: ../user-page.php?id=$id");
    }
    else {
        header("Location: ../user-page.php?id='$id'");
    }
}
?>