<?php

/*
 * Validação do formulário com o PHP
 * O objetivo é efetuar um cadastro e validá-lo no servidor sem que o usuário
 * saia da tela em que está, utilizando o Ajax.
 */

if ($_POST['endereco_email'] == '') {
    exit("Preencha o campo E-mail!");
}
if (strlen($_POST['senha']) <= 6) {
    exit("Sua senha deve possuir mais de 6 caracteres!");
}
if ($_POST['idade'] < 18) {
    exit("Menor de idade. Você tem ".$_POST['idade']." anos!");
} else {
    exit("Maior de idade. Você tem ".$_POST['idade']." anos.");
}
?>
