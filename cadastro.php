<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="leandro">
    <link rel="stylesheet" type="text/css" rel="nc.css" />
    <title>Cadastro | Sistema Administrativo NoiseCall</title>
</head>

<body>
    <form action="#" method="POST">
        <h1>Cadastro de Funcionários</h1>
        <h2>Dados Pessoais</h2>
        <fieldset>
            <label for="txtCodigo">Código de cadastro:</label>
            <input type="text" name="txtCodigo" disabled="true" value="001" />
            <label for="txtPnome">Nome completo:</label>
            <input type="text" name="txtNome" maxlength="80" />
            <label for="txtEndereco">Endereço:</label>
            <input type="email" name="txtEndereco" maxlength="120" />
            <label for="txtCep">CEP:</label>
            <input type="text" name="txtCep" />
            <label for="txtBairro">Bairro:</label>
            <input type="text" name="txtBairro" maxlenght="50" />
            <label for="txtCidade">Cidade:</label>
            <input type="text" name="txtCidade" maxlength="80" />
            <label for="selEstado">Estado:</label>
            <select name="selEstado">
                <option value="sp">SP</option>
                <option value="rj">RJ</option>
                <option value="mg">MG</option>
                <option value="es">ES</option>
            </select>
        <label for="optEcivil">Estado civil:</label>
        <select>
            <option value="solteiro">Solteiro</option>
            <option value="casado">Casado</option>
            <option value="desquitado">Desquitado</option>
            <option value="divorciado">Divorciado</option>
            <option value="viuvo">Viúvo</option>
        </select>
        </fieldset>
        <h2>Documentos</h2>
        <label for="txtRG">RG:</label>
        <input type="text" name="txtRG" />
        <label for="txtOemissor">Órgão emissor:</label>
        <input type="text" name="txtOemissor" />
        <label for="txtCPF">CPF:</label>
        <input type="text" name="txtCPF" />
        <h3>Contatos</h3>
        <p>
            <label for="txtTelefone">Telefone:</label>
            <input type="tel" name="txtTelefone" />
            <label for="txtCelular">Celular:</label>
            <input type="tel" name="txtCelular" />
            <label for="txtEmail">E-mail:</label>
            <input type="email" name="txtEmail" />
        </p>
        <h3>Dados Empresariais</h3>
        <p>
            <label for="txtRsocial">Razão social:</label>
            <input type="text" name="txtRsocial" />
            <label for="txtCnpj">CNPJ:</label>
            <input type="text" name="txtCnpj" />
            <label for="">Banco:</label>
            <input type="" name="" />
            <label for="">Agência:</label>
            <input type="" name="" />
            <label for="">Conta corrente:</label>
            <input type="" name="" />
            <label for="">Observações:</label>
            <textarea></textarea>
        </p>
        <h4>Para o RH</h4>
        <label for="">Data da contratação:</label>
        <input type="" name="" />
        <label for="">Data de demissão:</label>
        <input type="" name="" />
        <label for="">Cargo:</label>
        <input type="" name="" />
        <label for="">Setor:</label>
        <input type="" name="" />
    </form>
</body>
</html>