<?php include("detalhe.php")?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Publicação</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/publicacao.css"/>
	<link rel="stylesheet" type="text/css" href="css/botaofile.css"/>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/validaPublicacao.js"></script>
</head>


	<body>

<?php include("topo.php");?>

<center>
<div id="cad">

<form enctype="multipart/form-data" id="cadastro" method="post" action="objetos.php">
<table CELLSPACING="10" border=0>
    <ul>
        
	
	<tr height=40><li>
            <td><label for="nome">Objeto/Documento:*</label></td>
            <td><input class="required" type="text" id="objeto" name="objeto"  placeholder="O que você encontrou?" /></td>
        </li></tr>

	<tr height=40><li>
            <td><label for="nome">Cidade:*</label></td>
            <td><input class="required" type="text" id="cidade" name="cidade"  placeholder="Em que cidade?" /></td>
        </li></tr>


        <tr height=40><li>
            <td><label for="email">Bairro:*</label></td>
            <td><input class="required" type="text" id="bairro" name="bairro" placeholder="Em que bairro?"/></td>
        </li></tr>
            
        <tr height=40><li>
            <td><label for="endereco">Telefone:*</label></td>
            <td><input class="required" type="text" id="telefone" name="telefone" maxlength=11 placeholder="(DD) 9 9999-9999"/></td>
        </li></tr>
 
       <tr height=50><li>
            <td><label for="numero">Imagem:</label>
            <td>
		<span class="btn btn-success fileinput-button">
		<input type="file" name="imagem">
    		
		Selecione a imagem</span></td>
        </li></tr>

        
	<tr height=40><li>
            <td><label for="cidade">Descriçaõ:*</label></td>
            <td><textarea cols ="22" rows ="5" id = "descricao"  name = "descricao" maxlength = "250" placeholder = "Digite aqui a descrição."></textarea></td>
        </tr></li>
        
        <tr height=70><li>
            <td colspan=2><center><input type="submit" id="enviar" value="Enviar" /></center></td>
        </li></tr>
	                   
    </ul></table> 
</form>
</div>
</center>
	<body>
	</html>
