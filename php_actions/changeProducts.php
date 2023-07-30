<?php
// start sessions
session_start();
// Connection with database
require_once 'db_connect.php';
$pdo = connect();

if(isset($_POST['btn_submit_changing_products'])) {
    // inputs
    $productCode = filter_input(INPUT_POST, 'productCode', FILTER_SANITIZE_NUMBER_INT);
    $productName = filter_input(INPUT_POST, 'productName', FILTER_SANITIZE_SPECIAL_CHARS);
    $productValue = $_POST['productValue'];
    $productCategory = filter_input(INPUT_POST, 'selectCategory', FILTER_SANITIZE_SPECIAL_CHARS);
    $productSubCategory = filter_input(INPUT_POST, 'selectSubCategory', FILTER_SANITIZE_SPECIAL_CHARS);
    $productImage = $_POST['imageName'];
    $productOldImage = $_POST['oldImageName'];
    $productDescription = $_POST['productDescription'];

    // deleting image in directory and add new image in directory
    $folder = "../IMAGES/product_images/";
    $temporary = $_FILES['productImage']['tmp_name'];
    
    if(!$productName == $productOldImage) {
        move_uploaded_file($temporary, $folder.$productImage);
        unlink($folder.$productOldImage);
    }

    
    // update product informations
    $sql = "UPDATE tb_produtos SET nome_produto = :productName, ativo = 'S', preco_atual_produto = :productValue, id_categorias = :productCategory, id_subcategorias = :productSubCategory, imagem = :productImage, descricao_produto = :productDescription WHERE cod_produto = '$productCode'";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':productName', $productName);
    $stmt->bindParam(':productValue', $productValue);
    $stmt->bindParam(':productCategory', $productCategory);
    $stmt->bindParam(':productSubCategory', $productSubCategory);
    $stmt->bindParam(':productImage', $productImage);
    $stmt->bindParam(':productDescription', $productDescription);

    if($stmt->execute()) {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Atualizado com sucesso!";
        $_SESSION['adminLogged'] = true;
        header("Location: ../admin/changingProductsAndCategories.php?whatForm=productChange&codeProductOrCategory=$productCode");
    }
    else {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Erro ao atualizar!";
        $_SESSION['adminLogged'] = true;
        header("Location: ../admin/changingProductsAndCategories.php?whatForm=productChange&codeProductOrCategory=$productCode");
    }
}

?>
