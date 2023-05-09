<?php 
// database connection
require_once 'db_connect.php';

if(isset($_POST['btn_submit'])) {
    $firstName = mysqli_escape_string($connect, $_POST['firstName']);
    $lastName = mysqli_escape_string($connect, $_POST['lastName']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $date = mysqli_escape_string($connect, $_POST['date']);
    $telephone = mysqli_escape_string($connect, $_POST['telephone']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $password = mysqli_escape_string($connect, $_POST['password']);
    $confirmPassword = mysqli_escape_string($connect, $_POST['confirm_password']);

    $sql = "INSERT INTO tb_users (first_name, last_name, cpf, data_birthday, telephone, email, password, repeat_password) VALUES ('$firstName', '$lastName', '$cpf', '$date', '$telephone', '$email', '$password', '$confirmPassword')";

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