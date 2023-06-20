<?php
// Connection with database
require_once '../php_actions/db_connect.php';
$pdo = connect();
// Start sessions
session_start();

if(isset($_POST['btn_submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)) {
        echo "Está vazio algum dos campos";
    }
    else {
        if($email == "admin@admin.com" && $password == "administrator") {
            $_SESSION['adminLogged'] = true;
            header('Location: ../admin.php');
        }
        else {
            $sql = "SELECT email_cliente, senha FROM tb_usuarios WHERE email_cliente = '$email'";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
    
            if($stmt->rowCount() > 0) {
                $data = $stmt->fetch();
                $password_db = $data['senha'];

                if(password_verify($password, $password_db)) {
                    $sql = "SELECT * FROM tb_usuarios WHERE email_cliente = '$email' AND senha = '$password_db'";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
            
                    if($stmt->rowCount() == 1) {
                        $datas = $stmt->fetch();
                        $_SESSION['logged'] = true;
                        $_SESSION['id_user'] = $datas['cod_cliente'];
                        header('Location: ../index.php');
                    }
                    else {
                        $_SESSION['messagesVerify'] = true;
                        $_SESSION['messages'] = "Não foi possível fazer login!";
                        header('Location: ../login.php');
                    }
                }
                else {
                    $_SESSION['messagesVerify'] = true;
                    $_SESSION['messages'] = "Email/Senha incorreto!";
                    header('Location: ../login.php');
                }
            }
            else {
                $_SESSION['messagesVerify'] = true;
                $_SESSION['messages'] = "Email incorreto";
                header('Location: ../login.php');
            }
        }
    }
}
?>