<?php
// start sessions
session_start();
// Connection with database
require_once 'db_connect.php';
$pdo = connect();

// btn form submit
if(isset($_POST['btn_submit_user-address'])) {
    // get inputs
    $cep = $_POST['cep'];
    $street = $_POST['street'];
    $neighborhood = $_POST['neighborhood'];
    $complement = $_POST['complement'];
    $houseNumber = $_POST['houseNumber'];
    $id = $_POST['id'];

    $formatedCep = preg_replace('/[^0-9]/', '', $cep);

    // add user address informations
    $sql = "UPDATE tb_usuarios SET cep = :cep, rua = :street, complemento = :complement, bairro = :neighborhood, numero_casa = :houseNumber WHERE cod_usuario = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':cep', $formatedCep);
    $stmt->bindParam(':street', $street);
    $stmt->bindParam(':complement', $complement);
    $stmt->bindParam(':neighborhood', $neighborhood);
    $stmt->bindParam(':houseNumber', $houseNumber);
    $stmt->bindParam(':id', $id);

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