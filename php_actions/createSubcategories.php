<?php
// database connection
require_once 'db_connect.php';
$pdo = connect();
// sessions start
session_start();

// btn form submit
if(isset($_POST['btn_submit_subcategories'])) {
    $categoryDescription = filter_input(INPUT_POST, 'descriptionSubCategory', FILTER_SANITIZE_SPECIAL_CHARS);
    $categoryDescription = strtoupper($categoryDescription);

    if(empty($categoryDescription)) {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Digite o nome da sub-categoria!";
        header('Location: ../registerCategoriesAndProducts.php');
    }
    else {
        $sql = "INSERT INTO tb_subcategorias (nome_subcategoria) VALUES (:categoryDescription)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':categoryDescription', $categoryDescription);

        if($stmt->execute()) {
            $_SESSION['messagesVerify'] = true;
            $_SESSION['messages'] = "Sub-categoria cadastrada com sucesso!";
            header('Location: ../registerCategoriesAndProducts.php');
        }
        else {
            $_SESSION['messagesVerify'] = true;
            $_SESSION['messages'] = "Não foi possível cadastrar a sub-categoria!";
            header('Location: ../registerCategoriesAndProducts.php');
        }
    }
}
?>