<?php  
include("detalhe.php");

?>


<html>
  
  <head>
   <title>Buscar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="css/paginainicial.css"/>
      
  </head>
  
  <body>
	
   <?php include("topo.php");?>

<!--Inĩcio da Tela-->

	<div align="middle">
	 <img src="img/lupa.png" width="200px"></a>
	</div>

	  <br>

	 <div align="middle">
	  
	     <form method="POST" action="listar2.php">

	 <table border="0" CELLSPACING="10">
	 
	 	<tr height=35>
		<td><font color="#2E8B57"><b>Cidade:</b></font></td>
		<td><input type="text" name="cidade" id="cidade"></a></td>
		</tr>
		<tr height=35>
		<td><font color="#2E8B57"><b>Bairro:</b></font></td>
		<td><input type="text" name="bairro" id="bairro"></a></td>
		</tr>
	
		<tr height=35>
		<td><font color="#2E8B57"><b>Objeto:</b></font></td>
		<td><input type="text" name="objeto" id="objeto"></td></td>
		</tr>

	
     </table>

	<br>
		<p align="middle"><input type="Submit" value="Buscar" id="envia"></p>
		<br>
		<p align="middle"><a href="publicacao.php" id = "en"><font color="#404040" ><b>Encontrou algo? Informe aqui</b></font></a></p>
		
	    </form>

</div>
  </body>

</html>

