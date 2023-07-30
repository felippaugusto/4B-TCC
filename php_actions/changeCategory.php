<?php
// start sessions
session_start();
// Connection with database
require_once 'db_connect.php';
$pdo = connect();

if(isset($_POST['btn_submit_categories'])) {
    // inputs
    $categoryCode = filter_input(INPUT_POST, 'categoryCode', FILTER_SANITIZE_NUMBER_INT);
    $categoryName = filter_input(INPUT_POST, 'categoryDescription', FILTER_SANITIZE_SPECIAL_CHARS);

    // sql commands
    $sql = "UPDATE tb_categorias SET nome_categoria = :categoryDescription WHERE cod_categoria = :categoryCode";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':categoryDescription', $categoryName);
    $stmt->bindParam(':categoryCode', $categoryCode);
    
    if($stmt->execute()) {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Atualizado com sucesso!";
        $_SESSION['adminLogged'] = true;
        header("Location: ../admin/changingProductsAndCategories.php?whatForm=categoryChange&codeProductOrCategory=$categoryCode");
    }
    else {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Erro ao atualizar!";
        $_SESSION['adminLogged'] = true;
        header("Location: ../admin/changingProductsAndCategories.php?whatForm=categoryChange&codeProductOrCategory=$categoryCode");
    }
}