<?php 
// database connection
require_once 'db_connect.php';
// function to clear data
include_once '../includes/cleaningData.php';

if(isset($_POST['btn_submit'])) {
    $firstName = cleaningData($_POST['firstName']);
    $lastName = cleaningData($_POST['lastName']);
    $cpf = cleaningData($_POST['cpf']);
    $date = cleaningData($_POST['date']);
    $telephone = cleaningData($_POST['telephone']);
    $email = cleaningData($_POST['email']);
    $password = cleaningData($_POST['password']);
    $confirmPassword = cleaningData($_POST['confirm_password']);

    $sql = "INSERT INTO tb_users (first_name, last_name, cpf, data_birthday, telephone, email, password) VALUES ('$firstName', '$lastName', '$cpf', '$date', '$telephone', '$email', '$password')";

    if(mysqli_query($connect, $sql)) {
        header('Location: ../login.php?sucess');
    }
    else {
        header('Location: ../register.php?failed');
    }
}
else {
    header('Location: ../index.php');
}
?>