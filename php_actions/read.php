<?php
// Connection with database
require_once 'db_connect.php';
// Start sessions
session_start();

if(isset($_POST['btn_submit'])) {
    $email = mysqli_escape_string($connect, $_POST['email']);
    $password = mysqli_escape_string($connect, $_POST['password']);

    if(empty($email) || empty($password)) {
        echo "Está vazio algum dos campos";
    }
    else {
        if($email == "admin@admin.com" && $password == "administrator") {
            header('Location: ../admin.php');
        }
        else {
            $sql = "SELECT email FROM tb_users WHERE email = '$email'";
            $result = mysqli_query($connect, $sql);
    
            if(mysqli_num_rows($result) > 0) {
                $sql = "SELECT * FROM tb_users WHERE email = '$email' AND password = '$password'";
                $result = mysqli_query($connect, $sql);
    
                if(mysqli_num_rows($result) == 1) {
                    $datas = mysqli_fetch_array($result);
                    $_SESSION['logged'] = true;
                    $_SESSION['id_user'] = $datas['id_users'];
                    header('Location: ../index.php');
                }
                else {
                    echo "Email e senha inválidos";
                }
            }
            else {
                echo "Email inválido";
            }
        }
    }
}
?>