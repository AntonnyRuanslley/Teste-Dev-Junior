$(document).ready(function () {
    $('#insert_form').on("submit", function (event) {
        event.preventDefault();
        if ($('#nome').val() === "" || $('#email').val() === "" || $('#cpf').val() === "" || 
            $('#rg').val() === "" || $('#cep').val() === "" || $('#rua').val() === "" || 
            $('#numero').val() === "" || $('#bairro').val() === "" || $('#cidade').val() === "" || 
            $('#uf').val() === "" /*|| $('#imcpf').val() === "" || $('#imrg').val() === ""*/) {
            $(".msg").html('<div class="alert alert-danger">Preencha corretamente os dados.</div>');
        } else {
            //Receber os dados do formulário
            var dados = $("#insert_form").serialize();  
            var url = $('#url').val();
            $.post(url, dados, function (retorno) {
                if (retorno) {
                    //Limpar os campos
                    $('#insert_form')[0].reset();
                    $(".msg").html('<div class="alert alert-success">Mensagem enviada com sucesso!</div>');
                } else {
                    $(".msg").html('<div class="alert alert-danger">Erro: Mensagem não enviada com sucesso!</div>');
                }
            });
        }
    });
});