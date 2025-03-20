<?php
require_once('../../configuration/connect.php');

class ClientesModel extends Connect{
    private $table = 'cliente';

    public function criarCliente($nome, $email, $telefone, $numero_matricula, $senha){
        $sql = $this->connection->prepare(
            "INSERT INTO $this->table (nome, email, telefone, numero_matricula, senha)
            VALUES (?, ?, ?, ?, ?)"
        );
        return $sql->execute([$nome, $email, $telefone, $numero_matricula, $senha]);
    }

    public function alterarCliente($nome, $email, $telefone, $numero_matricula, $senha, $id){
        $sql = $this->connection->prepare(
            "UPDATE $this->table SET nome = ?, email = ?, telefone = ?, numero_matricula = ?, senha = ?
            WHERE id = ?"
        );
        $sql->execute([$nome, $email, $telefone, $numero_matricula, $senha, $id]);
    }

    public function pegarCliente($id){
        $sql = $this->connection->preapre(
            "SELECT * FROM $this->table WHERE id = ?"
        );
        $sql->execute([$id]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function pegarTodosClientes(){
        $sql = $this->connection->prepare(
            "SELECT * FROM $this->table"
        );
        $sql->execute([]);
        return $Clientes = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletarCliente($id){
        $sql = $this->connection->prepare("DELETE FROM $this->table WHERE id = ?");
        return $sql->execute([$id]);
    }
}