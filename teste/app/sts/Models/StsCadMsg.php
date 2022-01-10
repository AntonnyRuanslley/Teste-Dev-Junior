<?php

namespace App\sts\Models;

use PDO;

class StsCadMsg extends Conn
{
    private object $conn;
    private $dados;
    
    public function cadMsg($dados) {
        $this->dados = $dados;
        $this->conn = $this->connect();
        $query_msg = "INSERT INTO usuario
            (nome, email, cpf, rg, cep, rua, numero, bairro, complemento, cidade, uf, descricao, /*imcpf, imrg,*/ criado) VALUES
            (:nome, :email, :cpf, :rg, :cep, :rua, :numero, :bairro, :complemento, :cidade, :uf, :descricao, /*:imcpf, :imrg,*/ NOW())";
        $creat_msg = $this->conn->prepare($query_msg);
        $creat_msg->bindParam(':nome', $this->dados['nome'], PDO::PARAM_STR);
        $creat_msg->bindParam(':email', $this->dados['email'], PDO::PARAM_STR);
        $creat_msg->bindParam(':cpf', $this->dados['cpf'], PDO::PARAM_STR);
        $creat_msg->bindParam(':rg', $this->dados['rg'], PDO::PARAM_STR);
        $creat_msg->bindParam(':cep', $this->dados['cep'], PDO::PARAM_STR);
        $creat_msg->bindParam(':rua', $this->dados['rua'], PDO::PARAM_STR);
        $creat_msg->bindParam(':numero', $this->dados['numero'], PDO::PARAM_STR);
        $creat_msg->bindParam(':bairro', $this->dados['bairro'], PDO::PARAM_STR);
        $creat_msg->bindParam(':complemento', $this->dados['complemento'], PDO::PARAM_STR);
        $creat_msg->bindParam(':cidade', $this->dados['cidade'], PDO::PARAM_STR);
        $creat_msg->bindParam(':uf', $this->dados['uf'], PDO::PARAM_STR);
        $creat_msg->bindParam(':descricao', $this->dados['descricao'], PDO::PARAM_STR);
        /*$creat_msg->bindParam(':imcpf', $this->dados['imcpf'], PDO::PARAM_STR);
        $creat_msg->bindParam(':imrg', $this->dados['imrg'], PDO::PARAM_STR);*/
        
        $creat_msg->execute();
        if($creat_msg->rowCount()){
            return true;
        }else{
            return false;
        }
    }
}
