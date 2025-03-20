<?php
require_once('../../configuration/connect.php');

class ProdutosModel extends Connect{
    private $table = 'produto';

    public function criarProduto($nome, $descricao, $preco, $categoria, $informacoes_nutricionais){
        $sql = $this->connection->prepare(
            "INSERT INTO $this->table (nome, descricao, preco, categoria, informacoes_nutricionais)
            VALUES (?, ?, ?, ?, ?)"
        );
        return $sql->execute([$nome, $descricao, $preco, $categoria, $informacoes_nutricionais]);
    }

    public function alterarProduto($nome, $descricao, $preco, $categoria, $informacoes_nutricionais, $id){
        $sql = $this->connection->prepare(
            "UPDATE $this->table SET nome = ?, descricao = ?, preco = ?, categoria = ?, informacoes_nutricionais = ?
            WHERE id = ?"
        );
        $sql->execute([$nome, $descricao, $preco, $categoria, $informacoes_nutricionais, $id]);
    }

    public function pegarProduto($id){
        $sql = $this->connection->preapre(
            "SELECT * FROM $this->table WHERE id = ?"
        );
        $sql->execute([$id]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function pegarTodosProdutos(){
        $sql = $this->connection->prepare(
            "SELECT * FROM $this->table"
        );
        $sql->execute([]);
        return $produtos = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function pegarProdutosCategoria($categoria){
        $sql = $this->connection->preapre(
            "SELECT * FROM $this->table WHERE categoria = ?"
        );
        $sql->execute([$categoria]);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletarProduto($id){
        $sql = $this->connection->prepare("DELETE FROM $this->table WHERE id = ?");
        return $sql->execute([$id]);
    }
}