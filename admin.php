<?php
// Connection with database
require_once 'php_actions/db_connect.php';
// Useful functions
include_once 'includes/utils.php';
// start sessions
session_start();
$pdo = connect();

if (!isset($_SESSION['adminLogged']) == true) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assembly Tech | E-commerce de periféricos e hardware</title>
    <link rel="stylesheet" href="CSS/globals.css">
    <link rel="stylesheet" href="CSS/admin.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="shortcut icon" href="IMAGES/includes/header/favicon/computer-96.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Tela do administrador</h1>
    </header>

    <nav id="linksAdmin" class="displayFlex">
        <!-- button for registration of product and categoties -->
        <a href="registerCategoriesAndProducts.php" id="registerCategoriesAndProducts" class="links">Registro de produtos e categorias</a>

        <!-- product change button -->
        <a href="#" class="links linkChangingProductsCategories product">
            <p>Alterar produtos</p>

        </a>

        <div class="displayFlex modalChangingProductsCategories" id="formProduct">
            <form action="changingProductsAndCategories.php" method="GET">
                <input type="hidden" name="whatForm" value="productChange">
                <div class="exit exitAdmin">
                    <p class="xOne"></p>
                    <p class="xTwo"></p>
                </div>
                <label for="productCode">Código do produto:</label>
                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" name="codeProductOrCategory" id="productCode" placeholder="Digite o código do produto" autocomplete="off">
                <button type="submit" name="submitChangingProductsOrCategories">Enviar</button>
            </form>
        </div>

        <!-- category change button -->
        <a href="#" class="links linkChangingProductsCategories category">
            <p>Alterar Categorias</p>
        </a>

        <div class="displayFlex modalChangingProductsCategories" id="formCategory">
            <form action="changingProductsAndCategories.php" method="GET">
                <input type="hidden" name="whatForm" value="categoryChange">
                <div class="exit exitAdmin">
                    <p class="xOne"></p>
                    <p class="xTwo"></p>
                </div>
                <label for="productCode">Código da categoria:</label>
                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" name="codeProductOrCategory" id="productCode" placeholder="Digite o código da categoria" autocomplete="off">
                <button type="submit" name="submitChangingProductsOrCategories">Enviar</button>
            </form>
        </div>

        <!-- subcategory change button -->
        <a href="#" class="links linkChangingProductsCategories subCategory">
            <p>Alterar Sub-categorias</p>
        </a>

        <div class="displayFlex modalChangingProductsCategories" id="formSubCategory">
            <form action="changingProductsAndCategories.php" method="GET">
                <input type="hidden" name="whatForm" value="subCategoryChange">
                <div class="exit exitAdmin">
                    <p class="xOne"></p>
                    <p class="xTwo"></p>
                </div>
                <label for="productCode">Código da sub-categoria:</label>
                <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" name="codeProductOrCategory" id="productCode" placeholder="Digite o código da sub-categoria" autocomplete="off">
                <button type="submit" name="submitChangingProductsOrCategories">Enviar</button>
            </form>
        </div>

        <!-- button back to the page -->
        <a href="php_actions/logout.php" id="backToMainPage" class="links">Voltar</a>
    </nav>

    <!-- users registered -->
    <main class="displayFlex" id="bodyAdmin">

        <!-- register users -->
        <h1>Clientes cadastrados</h1>
        <table class="tableAdmin">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Email:</th>
                    <th>CPF:</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                // sql getting the data from the tb_usuarios
                $datas = selectAllFromTable("tb_usuarios");
                foreach ($datas as $data) {
                    if ($data['email_cliente'] == "admin@admin.com" && $data['tipo_cadastro'] == 'A') {
                        // administrador
                    } else {
                ?>
                        <tr>
                            <!-- foreach user information -->
                            <td><?php echo $data['nome_cliente']; ?></td>
                            <td><?php echo $data['sobrenome']; ?></td>
                            <td><?php echo $data['email_cliente']; ?></td>
                            <td><?php echo $data['cpf']; ?></td>
                            <td><a href="#modal<?php echo $data['cod_cliente']; ?>" class="btnRemove displayFlex" id="users"><img src="IMAGES/admin/trash-image/remove1.png" alt="image-remove" class="imageRemove"></a></td>
                        </tr>
                <?php };
                }; ?>
            </tbody>
        </table>

        <!-- register products -->
        <h1>Produtos Cadastrados</h1>
        <table class="tableAdmin">
            <thead>
                <tr>
                    <th>Código:</th>
                    <th>Nome:</th>
                    <th>Descrição:</th>
                    <th>Preço:</th>
                    <th>Ativo</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php
                // sql getting the data from the tb_usuarios
                $productsDatas = selectAllFromTable("tb_produtos");
                foreach ($productsDatas as $data) {
                ?>
                    <tr>
                        <!-- foreach user information -->
                        <td><?php echo $data['cod_produto']; ?></td>
                        <td><?php echo $data['nome_produto']; ?></td>
                        <td><?php echo $data['descricao_produto']; ?></td>
                        <td>R$ <?php echo $data['preco_atual_produto']; ?> reais</td>
                        <td>Sim</td>
                        <td><a href="#modal<?php echo $data['cod_produto']; ?>" class="btnRemove displayFlex" id="products"><img src="IMAGES/admin/trash-image/remove1.png" alt="image-remove" class="imageRemove"></a></td>
                    </tr>

                <?php }; ?>
            </tbody>
        </table>

        <!-- register categories and sub-categories -->
        <h1>Categorias e sub-categorias cadastradas</h1>
        <div id="containerCategoriesSubCategories" class="displayFlex">
            <table class="tableAdmin">
                <thead>
                    <tr>
                        <th>Código:</th>
                        <th>Nome:</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    // sql getting the data from the tb_usuarios
                    $categoriesDatas = selectAllFromTable("tb_categorias");
                    foreach ($categoriesDatas as $data) {
                    ?>
                        <tr>
                            <!-- foreach user information -->
                            <td><?php echo $data['cod_categoria']; ?></td>
                            <td><?php echo $data['nome_categoria']; ?></td>
                            <td><a href="#modal<?php echo $data['cod_categoria']; ?>" class="btnRemove displayFlex" id="categories"><img src="IMAGES/admin/trash-image/remove1.png" alt="image-remove" class="imageRemove"></a></td>
                        </tr>

                    <?php }; ?>
                </tbody>
            </table>

            <table class="tableAdmin">
                <thead>
                    <tr>
                        <th>Código:</th>
                        <th>Nome:</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    // sql getting the data from the tb_usuarios
                    $subCategoriesDatas = selectAllFromTable("tb_subcategorias");
                    foreach ($subCategoriesDatas as $data) {
                    ?>
                        <tr>
                            <!-- foreach user information -->
                            <td><?php echo $data['cod_subcategoria']; ?></td>
                            <td><?php echo $data['nome_subcategoria']; ?></td>
                            <td><a href="#modal<?php echo $data['cod_subcategoria']; ?>" class="btnRemove displayFlex" id="subCategories"><img src="IMAGES/admin/trash-image/remove1.png" alt="image-remove" class="imageRemove"></a></td>
                        </tr>

                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </main>
    <div id="" class="box-model displayFlex">
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>

</html>