<?php
// Connection with database
require_once 'db_connect.php';
$pdo = connect();

// btn form submit
if(isset($_POST['delete-btn'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_usuarios WHERE cod_cliente = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()) {
        header('Location: ../admin.php?Deletado');
    }
    else {
        header('Location: ../admin.php?Falha');
    }
}
?>