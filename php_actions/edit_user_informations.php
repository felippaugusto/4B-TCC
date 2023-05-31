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
    $cpf = cleaningData($_POST['cpf']);
    $date = cleaningData($_POST['date']);
    $telephone = cleaningData($_POST['telephone']);
    $email = cleaningData($_POST['email']);

    $id = cleaningData($_POST['id']);

    $sql = "UPDATE tb_users SET first_name = '$firstName', last_name = '$lastName', cpf = '$cpf', data_birthday = '$date', telephone = '$telephone', email = '$email' WHERE id_users = '$id'";

    if(mysqli_query($connect, $sql)) {
        header("Location: ../user-page.php?id=$id");
    }
    else {
        header("Location: ../user-page.php?id='$id'");
    }
}
?>