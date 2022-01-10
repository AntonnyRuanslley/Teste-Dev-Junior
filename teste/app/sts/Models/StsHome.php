<?php

namespace App\sts\Models;

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class StsHome extends Conn{
    
    private object $conn;
    //private array $dados;

    public function index() {
        $this->conn = $this->connect();
        //$this->viewContato();
        //return $this->dados;
    }
    /*
    private function viewContato() {
        $query_home_contato = "SELECT titulo_contato, subtitulo_contato, end_contato, tel_contato, email_contato FROM homes_contatos LIMIT 1";
        $result_home_contato = $this->conn->prepare($query_home_contato);
        $result_home_contato->execute();
        $this->dados['contato'] = $result_home_contato->fetch();
    }*/
}
