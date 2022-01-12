<?php

namespace App\adms\Models;

if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class AdmsViewHome extends Conn
{
    private object $conn;
    private $dados;
    
    public function viewHome() {
        $this->conn = $this->connect();
        $this->viewForm();
        return $this->dados;
    }
    
    private function viewForm() {
        $query_home_form = "SELECT nome, email, cpf, rg, cep, rua, numero, bairro, complemento, cidade, uf, descricao, /*imcpf, imrg,*/ criado FROM usuario";
        $result_home_form = $this->conn->prepare($query_home_form);
        $result_home_form->execute();
        $this->dados['usuario'] = $result_home_form->fetch();
        

    }
}
