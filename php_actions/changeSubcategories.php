<?php
// start sessions
session_start();
// Connection with database
require_once 'db_connect.php';
$pdo = connect();

if(isset($_POST['btn_submit_subcategories'])) {
    // inputs
    $subCategoryCode = filter_input(INPUT_POST, 'subCategoryCode', FILTER_SANITIZE_NUMBER_INT);
    $subCategoryName = filter_input(INPUT_POST, 'descriptionSubCategory', FILTER_SANITIZE_SPECIAL_CHARS);

    // sql commands
    $sql = "UPDATE tb_subcategorias SET nome_subcategoria = :subCategoryDescription WHERE cod_subcategoria = :subCategoryCode";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':subCategoryCode', $subCategoryCode);
    $stmt->bindParam(':subCategoryDescription', $subCategoryName);
    
    if($stmt->execute()) {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Atualizado com sucesso!";
        $_SESSION['adminLogged'] = true;
        header("Location: ../changingProductsAndCategories.php?whatForm=subCategoryChange&codeProductOrCategory=$subCategoryCode");
    }
    else {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Erro ao atualizar!";
        $_SESSION['adminLogged'] = true;
        header("Location: ../changingProductsAndCategories.php?whatForm=subCategoryChange&codeProductOrCategory=$subCategoryCode");
    }
}
?>