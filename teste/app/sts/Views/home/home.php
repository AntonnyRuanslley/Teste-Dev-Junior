<?php

if(!defined('R4F5CC')){
    header("Location: /");
    die("Erro: Página não encontrada!");
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top menu">
    <div class="container">
                <a class="navbar-brand topo" href="#"><i class="fas fa-address-card"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#inicio">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicos">Administração</a>
                        </li>
                    </ul>
                </div>
            </div>
</nav>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<div class="jumbotron cadastro">
    <div class="container">
        <h2 class="display-4 mb-4 text-center">Cadastro</h2>
            <div class="row">
                <div class="col-lg-4">
                    <span class="msg"></span>
                    <form method="POST" id="insert_form">
                        <input type="hidden" name="url" id="url" value="<?php echo URL; ?>contato">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo" >
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" id="email" >
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" name="cpf" class="form-control" id="cpf" onkeypress="$(this).mask('000.000.000-00');" placeholder="___.___.___-__" >
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label for="rg">RG</label>
                                    <input type="text" name="rg" class="form-control" id="rg" onkeypress="$(this).mask('00.000.000-0');" placeholder="__.___.___-_" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="cep">CEP</label>
                                    <input type="text" name="cep" class="form-control" id="cep" onkeypress="$(this).mask('00000-000')" onblur="pesquisacep(this.value);" placeholder="_____-___" >
                                </div>    
                                <div class="form-group">
                                    <label for="numero">Número</label>
                                    <input type="number" name="numero" class="form-control" id="numero" >
                                </div>    
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="rua">Rua</label>
                                    <input type="text" name="rua" class="form-control" id="rua" >
                                </div>     
                                <div class="form-group">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" name="bairro" class="form-control" id="bairro" >
                                </div>  
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="complemento">Complemento</label>
                            <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Ex: Casa, Apto., ..." >
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" name="cidade" class="form-control" id="cidade" >
                                </div>       
                            </div>
                            <div class="col-lg-4">     
                                <div class="form-group">
                                    <label for="uf">UF</label>
                                    <select name="uf" class="form-control" id="uf" >
                                        <option selected disabled value="">----</option>
                                        <option>AC</option><option>AL</option>
                                        <option>AP</option><option>AM</option>
                                        <option>BA</option><option>CE</option>
                                        <option>DF</option><option>ES</option>
                                        <option>GO</option><option>MA</option>
                                        <option>MT</option><option>MS</option>
                                        <option>MG</option><option>PA</option>
                                        <option>PB</option><option>PR</option>
                                        <option>PE</option><option>PI</option>
                                        <option>RJ</option><option>RN</option>
                                        <option>RS</option><option>RO</option>
                                        <option>RR</option><option>SC</option>
                                        <option>SP</option><option>SE</option>
                                        <option>TO</option>
                                    </select>
                                </div>  
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea name="descricao" class="form-control" rows="3" id="descricao" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imcpf">Imagem do CPF</label>
                            <input type="file" name='imcpf' id="imcpf" >
                        </div>
                        <div class="form-group">
                            <label for="imrg">Imagem do RG</label>
                            <input type="file" name='imrg' id="imrg" >
                        </div>
                        <input type="submit" name="botao" id="botao" value="Cadastrar" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>  
        
    <div class="jumbotron rodape">
        <div class="container">
        </div>
    </div>  
</div>
              