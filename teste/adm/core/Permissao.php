<?php

namespace Core;

if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}

class Permissao
{

    private string $urlController;
    private array $pgPublica;
    private array $pgRestrita;
    private string $resultado;

    function getResultado(): string {
        return $this->resultado;
    }

    public function index($urlController): void {
        $this->urlController = $urlController;

        $this->pgPublica = ["login"];

        if (in_array($this->urlController, $this->pgPublica)) {
            $this->resultado = $this->urlController;
        } else {
            $this->pgRestrita();
        }
    }

    private function pgRestrita(): void {
        $this->pgRestrita = ["home", "view"];

        if (in_array($this->urlController, $this->pgRestrita)) {
            $this->verificarLogin();
        } else {
            $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro: Página não encontrada!</div>';
            $urlDestino = URLADM . "login";
            header("Location: $urlDestino");
        }
    }
    
    private function verificarLogin():void {
        if(isset($_SESSION['usuario_id']) AND isset($_SESSION['usuario_nome']) AND isset($_SESSION['usuario_email'])){
            $this->resultado = $this->urlController;
        }else{
            $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro: Para acessar a página realize o login!</div>';
            $urlDestino = URLADM . "login";
            header("Location: $urlDestino");
        }
    }

}
