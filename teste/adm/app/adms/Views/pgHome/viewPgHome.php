<?php
if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
?>
<div class="container">
<div class="d-flex">
        <div class="mr-auto p-2">
            <h1><br>Lista de cadastrados</h1>
        </div>        
    </div>
    <hr>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <div class="d-flex">
        <div class="mr-auto p-2">
            <h2>Detalhes do Topo</h2>
        </div>
        <div class="p-2">
            <a href="#" class="btn btn-danger btn-sm">Excluir</a>
        </div>          
    </div>

    <?php

    if(!empty($this->dados['home']['usuario'])){
        extract($this->dados['home']['usuario']);
        ?>
        <tbody class="row">
            <dt class="col-sm-3">Nome</dt>
            <dd class = "col-sm-9"><?php echo $nome;?></dd>
            <dt class="col-sm-3">E-mail</dt>
            <dd class = "col-sm-9"><?php echo $email;?></dd>
            <dt class="col-sm-3">CPF</dt>
            <dd class = "col-sm-9"><?php echo $cpf;?></dd>
            <dt class="col-sm-3">RG</dt>
            <dd class = "col-sm-9"><?php echo $rg;?></dd>
            <dt class="col-sm-3">CEP</dt>
            <dd class = "col-sm-9"><?php echo $cep;?></dd>
            <dt class="col-sm-3">Rua</dt>
            <dd class = "col-sm-9"><?php echo $nome;?></dd>
            <dt class="col-sm-3">Número</dt>
            <dd class = "col-sm-9"><?php echo $email;?></dd>
            <dt class="col-sm-3">Bairro</dt>
            <dd class = "col-sm-9"><?php echo $bairro;?></dd>
            <dt class="col-sm-3">Complemento</dt>
            <dd class = "col-sm-9"><?php echo $complemento;?></dd>
            <dt class="col-sm-3">Cidade</dt>
            <dd class = "col-sm-9"><?php echo $cidade;?></dd>
            <dt class="col-sm-3">UF</dt>
            <dd class = "col-sm-9"><?php echo $uf;?></dd>
            <dt class="col-sm-3">Descrição</dt>
            <dd class = "col-sm-9"><?php echo $descricao;?></dd>
            <dt class="col-sm-3">Verificação do CPF</dt>
            <dd class = "col-sm-9"><?php echo $imcpf;?></dd>
            <dt class="col-sm-3">Verificação do RG</dt>
            <dd class = "col-sm-9"><?php echo $imrg;?></dd>
        </tbody>

        <?php


    }else{
        echo '<div class="alert alert-danger" role="alert">Erro: O formulário não possui nenhum registro!</div>';
    }
    ?>
</div>