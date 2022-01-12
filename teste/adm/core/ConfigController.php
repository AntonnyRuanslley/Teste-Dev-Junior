<?php

namespace Core;

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class ConfigController
{
    private string $url;

    public function __construct() {
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
        } else {
            $this->url = "login";
        }
    }

    public function carregar() {
        $this->config();
        $valPermissao= new \Core\Permissao();
        $valPermissao->index($this->url);
        $urlController = ucwords($this->url);
        $classe = "\\App\\adms\\Controllers\\" . $urlController;
        $classeCarregar = new $classe;
        $classeCarregar->index();
    }

    private function config() {
        define('URLADM', 'http://localhost/teste/adm/');
    }

}