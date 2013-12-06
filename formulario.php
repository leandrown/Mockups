<!--
Formulário de validação com Ajax. Este forulário será enviado ao servidor
e processado pelo PHP.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PHP com Ajax usando jQuery</title>
        <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
        <script>
            // Adicionando evento que será chamado quando a página estiver pronta.
            $(document).ready(function() {
                // Adicionando o evento de clique no botão Validar.
                $('#botao_validar').on('click', function() {
                    // Variável com o botão clicado selecionado utilizando o jQuery.
                    var $this = $(this);
                    // Desabilitando todas as tags input que estão dentro da tag form.
                    $('form input').attr('disabled', 'disabled');
                    // Alterando o texto do botão.
                    $this.val('Validando....');
                    // Chamando a solicitação Ajax.
                    $.ajax({
                        url:'validacao.php', // URL que será chamado para validar o forulário
                        data:$.param({ // Parâmetros que serão enviados
                            endereco_email:$('[name="endereco_email"]').val(),
                            senha:$('[name="senha"]').val(),
                            idade:$('[name="idade"]').val()
                        }),
                        type:'POST', // Definindo o tipo de método de envio (POST).
                        success:function(resposta) { // Evento success, chamado quando o ajax for concluído.
                            // Habilitando todas as tags input que estão dentro da tag form.
                            $('form input').removeAttr('disabled');
                            // Alterando o texto do botão
                            $this.val('Validar');
                            // Exibindo em um alerta o texto impresso pelo arquivo PHP
                            alert(resposta);
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form action="#">
            <input type="email" name="endereco_email" placeHolder="Endereço de e-mail..." /><br />
            <input type="password" name="senha" placeHolder="Senha..." /><br />
            <input type="range" name="idade" min="0" max="100" /><br />
            <input type="button" value="Validar" id="botao_validar" />
        </form>
    </body>
</html>
