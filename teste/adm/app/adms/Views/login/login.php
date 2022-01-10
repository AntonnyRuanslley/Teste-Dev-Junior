<?php

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
var_dump($this->dados);
if(isset($this->dados['form'])){
    $valorForm = $this->dados['form'];  
}
?>

<h1>Áreia restrita</h1>
<form method="POST" action="">
    <label for="usuario">Usuário</label>
    <input name="usuario" type="text" id="usuario" placeholder="Digite o usuário"><br><br>

    <label for="senha">Senha</label>
    <input name="senha" type="password" id="senha" placeholder="Digite a senha"><br><br>

    <input name="acessar" type="submit" value="Acessar">
</form>
