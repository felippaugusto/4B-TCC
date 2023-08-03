<?php
// Connection with database
require_once 'db_connect.php';
$pdo = connect();

// btn form submit
if(isset($_POST['btnDeleteUsers'])) {
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
else if(isset($_POST['btnDeleteProducts'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_produtos WHERE cod_produto = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()) {
        header('Location: ../admin/admin.php?Deletado');
    }
    else {
        header('Location: ../admin/admin.php?Falha');
    }
}
else if(isset($_POST['btnDeleteCategories'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_categorias WHERE cod_categoria = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()) {
        header('Location: ../admin/admin.php?Deletado');
    }
    else {
        header('Location: ../admin/admin.php?Falha');
    }
}
else if(isset($_POST['btnDeleteSubCategories'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_subcategorias WHERE cod_subcategoria = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if($stmt->execute()) {
        header('Location: ../admin/admin.php?Deletado');
    }
    else {
        header('Location: ../admin/admin.php?Falha');
    }
}
else {
    header('Location: ../admin/admin.php');
}
?>