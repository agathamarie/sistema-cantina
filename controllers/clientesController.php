<?php
require_once('../../models/clientesModel.php');

class ClientesController {
    private $clientesModel;

    public function __construct(){
        $this->clientesModel = new ClientesModel();
    }

    public function salvarCliente($nome, $email, $telefone, $numero_matricula, $senha){
        $this->clientesModel->criarCliente($nome, $email, $telefone, $numero_matricula, $senha);
    }

    public function alterarCliente($nome, $email, $telefone, $numero_matricula, $senha, $id){
        return $this->clientesModel->alterarCliente($nome, $email, $telefone, $numero_matricula, $senha, $id);
    }

    public function pegarCliente($id){
        return $Cliente = $this->clientesModel->pegarCliente($id);
    }

    public function pegarTodosClientes(){
        return $Clientes = $this->clientesModel->pegarTodosClientes();
    }

    public function deletarCliente($id){
        return $this->clientesModel->deletarCliente($id);
    }
}