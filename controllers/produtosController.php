<?php
require_once('../../models/produtosModel.php');

class ProdutosController {
    private $produtoModel;

    public function __construct(){
        $this->produtoModel = new ProdutosModel();
    }

    public function salvarProduto($nome, $descricao, $preco, $categoria, $informacoes_nutricionais){
        $this->produtoModel->criarProduto($nome, $descricao, $preco, $categoria, $informacoes_nutricionais);
    }

    public function alterarProduto($nome, $descricao, $preco, $categoria, $informacoes_nutricionais, $id){
        return $this->produtoModel->alterarProduto($nome, $descricao, $preco, $categoria, $informacoes_nutricionais);
    }

    public function pegarProduto($id){
        return $produto = $this->produtoModel->pegarProduto($id);
    }

    public function pegarTodosProdutos(){
        return $produtos = $this->produtoModel->pegarTodosProdutos();
    }

    public function pegarProdutosCategoria($categoria){
        return $produtos = $this->produtoModel->pegarProdutosCategoria($categoria);
    }

    public function deletarProduto($id){
        return $this->produtoModel->deletarProduto($id);
    }
}