<?php
// database connection
require_once 'db_connect.php';
$pdo = connect();
// sessions start
session_start();

// btn form submit
if(isset($_POST['btn_submit_products'])) {
    $productName = filter_input(INPUT_POST, 'productName', FILTER_SANITIZE_SPECIAL_CHARS);
    $valueProduct = $_POST['valueProduct'];
    $productCategory = $_POST['selectCategory'];
    $productSubcategory = $_POST['selectSubCategory'];
    $productDescription = $_POST['productDescription'];
    $imageName = $_POST['imageName'];
    $active = 'S';

   // verify file extension
    $allowedFormats = array("png", "jpeg", "jpg", "gif", "svg");
    $fileExtension = pathinfo($_FILES['productImage']['name'], PATHINFO_EXTENSION);

    if(empty($productName) || empty($valueProduct) || empty($productCategory) || empty($productSubcategory) || empty($productDescription)) {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Preencha todos os campos";
        header('Location: ../registerCategoriesAndProducts.php');
    }
    else if(!in_array($fileExtension, $allowedFormats)) {
        $_SESSION['messagesVerify'] = true;
        $_SESSION['messages'] = "Formato de extensão para o produto inválido!";
        header('Location: ../registerCategoriesAndProducts.php');
    }
    else {
        // get path the folder
        $folder = "../IMAGES/product_images/";
        $temporary = $_FILES['productImage']['tmp_name'];
        // verify image name
        $sql = "SELECT imagem FROM tb_produtos WHERE imagem = '$imageName".'.'."$fileExtension'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $_SESSION['messagesVerify'] = true;
            $_SESSION['messages'] = "O nome da imagem já existe!";
            header('Location: ../registerCategoriesAndProducts.php');
        }
        else {
            // file upload
            $newFileName = $imageName.".$fileExtension";
            move_uploaded_file($temporary, $folder.$newFileName);

            $sql = "INSERT INTO tb_produtos (nome_produto, descricao_produto, ativo, preco_atual_produto, id_categorias, id_subcategorias, imagem) VALUES (:productName, :productDescription, :active, :valueProduct, :productCategory, :productSubcategory, :productImage)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(':productName', $productName);
            $stmt->bindParam(':active', $active);
            $stmt->bindParam(':valueProduct', $valueProduct);
            $stmt->bindParam(':productCategory', $productCategory);
            $stmt->bindParam(':productSubcategory', $productSubcategory);
            $stmt->bindParam(':productImage', $newFileName);
            $stmt->bindParam('productDescription', $productDescription);

            if($stmt->execute()) {
                $_SESSION['messagesVerify'] = true;
                $_SESSION['messages'] = "Produto cadastrado com sucesso!";
                header('Location: ../admin/registerCategoriesAndProducts.php');
            }
            else {
                $_SESSION['messagesVerify'] = true;
                $_SESSION['messages'] = "Não foi possível cadastrar o produto!";
                header('Location: ../admin/registerCategoriesAndProducts.php');
            }
        }
    }
}
?>