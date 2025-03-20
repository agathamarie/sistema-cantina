<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = $_POST;

    require_once('../../controllers/produtosController.php');
    $produtosController = new ProdutosController();

    $nome = $dados['nome'];
    $descricao = $dados['descricao'];
    $preco = $dados['preco'];
    $categoria = $dados['categoria'];
    $informacoes_nutricionais = $dados['informacoes_nutricionais'];

    $produtosController->salvarProduto($nome, $descricao, $preco, $categoria, $informacoes_nutricionais);

    header('Location: ../../views/admin/dashboardProdutos.php');
    exit;
}
?>