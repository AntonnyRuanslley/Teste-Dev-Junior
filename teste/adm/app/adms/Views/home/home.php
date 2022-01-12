<?php

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}
?>

<div class="container">
    <div class="row">
        <div class="col-lg-5"></div>
        <div class="col-lg-7">   
            <br><img class="mb-4" src="<?php echo URLADM; ?>app/adms/assets/imagens/login/logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Bem vindo(a),</br><?php echo $_SESSION['usuario_nome']
            ?>
            </h1>
        </div>
    </div>
</div>
              