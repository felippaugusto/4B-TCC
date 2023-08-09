<?php
// database connection
require_once 'db_connect.php';
$pdo = connect();
// sessions start
session_start();

// btn form submit
if(isset($_POST['btn_submit_categories'])) {
    $categoryDescription = filter_input(INPUT_POST, 'descriptionCategory', FILTER_SANITIZE_SPECIAL_CHARS);
    $categoryDescription = strtoupper($categoryDescription);

    if(empty($categoryDescription)) {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Digite o nome da categoria!";
        header('Location: ../admin/registerCategoriesAndProducts.php');
    }
    else {
        $sql = "INSERT INTO tb_categorias (nome_categoria) VALUES (:categoryDescription)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':categoryDescription', $categoryDescription);

        if($stmt->execute()) {
            $_SESSION['messagesVerify'] = true;
            $_SESSION['messages'] = "Categoria cadastrada com sucesso!";
            header('Location: ../admin/registerCategoriesAndProducts.php');
        }
        else {
            $_SESSION['messagesVerify'] = true;
            $_SESSION['messages'] = "Não foi possível cadastrar a categoria!";
            header('Location: ../admin/registerCategoriesAndProducts.php');
        }
    }
}
?>