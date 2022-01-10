<?php

namespace App\adms\Controllers;

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Home
{    
    public function index() { 
        echo "Página Home<br>";
    }
}
