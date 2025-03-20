<?php
require_once('../../controllers/produtosController.php');

if (isset($_POST['id'])) {
    $produtosController = new ProdutosController();
    $id = $_POST['id'];
    
    if ($produtosController->deletarProduto($id)) {
        header("Location: ../../views/admin/dashboardProdutos.php");
        exit;
    } else {
        echo "Erro ao excluir o produto.";
    }
} else {
    echo "ID do produto não encontrado.";
}
?>