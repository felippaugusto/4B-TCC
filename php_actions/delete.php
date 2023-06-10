<?php
// Connection with database
require_once 'db_connect.php';

if(isset($_POST['delete-btn'])) {
    $id = cleaningData($_POST['id']);

    $sql = "DELETE FROM tb_usuarios WHERE cod_cliente = '$id'";

    if(mysqli_query($connect, $sql)) {
        header('Location: ../admin.php?Deletado');
    }
    else {
        header('Location: ../admin.php?Falha');
    }
}
?>