<?php
if (!defined('R4F5CC')) {
    header("Location: /");
    die("Erro: Página não encontrada!");
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?php echo URLADM ?>home"><i class="fas fa-address-card"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLADM; ?>view">Aprovados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pendentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrado de Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLADM; ?>sair">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
