
<html>
<head> 
<title>Login</title>

	 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="css/login.css"/>
	
</head>

<body>

<p></p>
<center>
<img src="img/entra.png" width="280px">
</center>




<center>
<div>


<form name="login" method="post" action="lerLogin.php">
	<table  border="0">

	
	<tr height=40>
	<td><b>Usuário:</b></td><td><input type=text name="usuario" id="usua" placeholder="Digite seu usuário"></td>
	</tr>

	<tr height=55>
	<td><b>Senha:</b></td><td><input type=password name="senha" id="pass" placeholder="Digite sua senha"></td>
	</tr>
    
    <tr>
    <td COLSPAN="2"> 
<div>

	
</div>
    </td>
    </tr>


	<tr height=35>
	<td colspan=2><a href="novocad.html"><font size="2" color="#2E8B57"><center>Cadastre-se</center></font></a></td>
	</tr>

	<tr height=45>
	<td colspan=2><center><input type="submit" value="Entrar"></center></td>
	</tr>


	</table>
</form>

<?php
    if($_GET["msg"]=="error"){

    echo "<h5><font color=#FF0000>Login ou Senha inválidos.</font></h5>";
	}
    ?> 

</div>
</center>

</body>

</html>
