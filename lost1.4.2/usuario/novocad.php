<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Cadastro</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/cadastro.css"/>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.validate.js"></script>
	<script type="text/javascript" src="../js/validaCad.js"></script>
</head>


	<body>

	<center>
		<h1 id = "cade">Cadastro</h1>
	</center>
	

<center>
<div id="cad" >

<form id="cadastro" method="post" action="../usuario/insertUsuario.php">
<table CELLSPACING="10">
    <ul>
        <tr height=40><li>
            <td><label for="nome">Nome:*</label></td>
            <td><input class="required" type="text" id="nome" name="nome"  placeholder="Digite seu nome" /></td>
        </li></tr>
	
	<tr height=40><li>
            <td><label for="nome">Usuario:*</label></td>
            <td><input class="required" type="text" id="usuario" name="usuario"  placeholder="Digite seu nome de usuário"/></td>
        </li></tr>
	
	<tr height=40><li>
            <td><label for="nome">Senha:*</label></td>
            <td><input class="required" type="password" id="senha" name="senha"  placeholder="Criar uma senha" /></td>
        </li></tr>

	<tr height=40><li>
            <td><label for="nome">Confirmar senha:*</label></td>
            <td><input class="required" type="password" id="senha2" name="senha2"  placeholder="Criar uma senha" /></td>
        </li></tr>


        <tr height=40><li>
            <td><label for="email">Email:*</label></td>
            <td><input class="required email" type="text" id="email" name="email" placeholder="Digite um e-mail valido"/></td>
        </li></tr>
            
        <tr height=40><li>
            <td><label for="endereco">Cidade:*</label></td>
            <td><input class="required" type="text" id="cidade" name="cidade" placeholder="Digite o nome da sua cidade"/></td>
        </li></tr>
 
       <tr height=40><li>
            <td><label for="numero">Bairro:*</label></td>
            <td><input class="required" type="text" id="bairro" name="bairro" placeholder="Digite o nome do seu bairro"/></td>
        </li></tr>

        
	<tr height=40><li>
            <td><label for="cidade">Telefone:*</label></td>
            <td><input class="required" type="text" id="telefone" name="telefone" placeholder="(DD) 9 9999-9999" minlength="11" maxlength="11"/></td>
        </tr></li>
        
        <tr height=40><li>
            <td><center><input type="submit" id="enviar" value="Enviar" /></center></td>
	    <td><center><a href="../login/login.php"><input type="button" id="limpar" value="Voltar" /></a></center></td>
	    
        </li></tr>
	
	                   
    </ul></table> 
</form>
</div>
</center>
	<body>
	</html>

