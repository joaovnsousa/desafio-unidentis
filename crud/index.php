<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Modelo de CRUD para Essentia Pharma</title>
    <link rel="stylesheet" type="text/css" href="styles.css" async>
    <script src="scripts.js"></script>
</head>

<body>
<div id="conteudo">
    <h2>C.R.U.D.</h2>
    <div id="msg-php" class="no-display"></div>

    <form method="POST" enctype="multipart/form-data" onSubmit="salvarForm(); return false;" id="frmCrud">
    <fieldset>
        <legend>Nome:</legend>
        <input id="nome" type=text class=input-text required placeholder="Digite seu nome aqui" size=20 name=nome onFocus="inputOn(this)" onBlur="inputOff(this)"/>
        <legend>Email:</legend>
        <input id="email" type=email class=input-text required placeholder="Informe seu email" size=30 name=email onFocus="inputOn(this)" onBlur="inputOff(this)"/>
        <legend>Telefone:</legend>
        <input id="telefone" type=text class=input-text required pattern="\d*" placeholder="Seu telefone? (apenas números)" size=10 name=telefone onFocus="inputOn(this)" onBlur="inputOff(this)"/>
    </fieldset>
    <input id="id" type=hidden value="-1" />
    <input type=reset class=button id="btnLimpar" value="Limpar" />
    <input type=submit class=button id="btnSalvar" value="Salvar" />
    </form>
</div>

<div id="lista">
    <script type="text/javascript">carregarLista();</script>
</div>
</body>
</html>