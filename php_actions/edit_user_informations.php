<?php
// start sessions
session_start();
// Connection with database
require_once 'db_connect.php';
$pdo = connect();

// btn form submit
if(isset($_POST['btn_submit_edit_user-informations'])) {
    // get inputs
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $cpf = $_POST['cpf'];
    $date = $_POST['date'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];

    // user id
    $id = $_POST['id'];

    // formatted date
    $date = date("Y-d-m", strtotime($date));
    $date = str_replace("/", "-", $date);

    // formatted cpf
    $arrayCpf = array(".", "-");
    $cpf = str_replace($arrayCpf, "", $cpf);

    // formatted telephone
    $arrayTelephone = array("(", ")", "-", " ");
    $telephone = str_replace($arrayTelephone, "", $telephone);

    // updated user informations 
    $sql = "UPDATE tb_usuarios SET nome_cliente = :firstName, sobrenome = :lastName, cpf = :cpf, data_nasc = :date, telefone_cliente = :telephone, email_cliente = :email WHERE cod_cliente = '$id'";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':firstName', $firstName);
    $stmt->bindParam('lastName', $lastName);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);

    if($stmt->execute()) {
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