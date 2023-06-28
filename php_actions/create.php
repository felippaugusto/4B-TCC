<?php 
// database connection
require_once 'db_connect.php';
$pdo = connect();
// sessions start
session_start();

// btn form submit
if(isset($_POST['btn_submit'])) {
    $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_SPECIAL_CHARS);
    $cpf = $_POST['cpf'];
    $date = $_POST['date'];
    $telephone = $_POST['telephone'];
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $active = 'S';
    $registrationType = 'C';

    if($password == $confirmPassword) {
        // formatted date
        $date = date("Y-d-m", strtotime($date));
        $date = str_replace("/", "-", $date);

        // formatted cpf
        $arrayCpf = array(".", "-");
        $cpf = str_replace($arrayCpf, "", $cpf);

        // formatted telephone
        $arrayTelephone = array("(", ")", "-", " ");
        $telephone = str_replace($arrayTelephone, "", $telephone);

        // encripted password
        $encriptedPassword = password_hash($password, PASSWORD_DEFAULT);

        if(empty($firstName) || empty($lastName) || empty($cpf) || empty($date) || empty($telephone) || empty($email)) {
            $_SESSION['messagesVerify'] = true;
            $_SESSION['messages'] = "Por favor, preencha todos os campos!";
            header('Location: ../register.php');
        }
        else {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['messagesVerify'] = true;
                $_SESSION['messages'] = "Email inválido!";
                header('Location: ../register.php');
            }
            else {
                $sql = "INSERT INTO tb_usuarios (nome_cliente, sobrenome, cpf, data_nasc, telefone_cliente, email_cliente, senha, ativo, tipo_cadastro) VALUES (:firstName, :lastName, :cpf, :date, :telephone, :email, :password, :active, :registrationType)";

                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':firstName', $firstName);
                $stmt->bindParam(':lastName', $lastName);
                $stmt->bindParam(':cpf', $cpf);
                $stmt->bindParam(':date', $date);
                $stmt->bindParam(':telephone', $telephone);
                $stmt->bindParam(':password', $encriptedPassword);
                $stmt->bindParam(':active', $active);
                $stmt->bindParam(':registrationType', $registrationType);
    
                if($stmt->execute()) {
                    $_SESSION['messagesVerify'] = true;
                    $_SESSION['messages'] = "Cadastrado com sucesso!";
                    header('Location: ../login.php');
                }
                else if(!$stmt) {
                    $_SESSION['messagesVerify'] = true;
                    $_SESSION['messages'] = "Erro ao cadastrar!";
                    header('Location: ../register.php');
                }
            }
        }
    }
    else {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "As senhas não são iguais!";
        header('Location: ../register.php');
    }
}
else {
    header('Location: ../index.php');
}
?>