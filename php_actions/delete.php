<?php
// Connection with database
require_once 'db_connect.php';

if(isset($_POST['delete-btn'])) {
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM tb_users WHERE id_users = '$id'";

    if(mysqli_query($connect, $sql)) {
        header('Location: ../admin.php?Deletado');
    }
    else {
        header('Location: ../admin.php?Falha');
    }
}
?>