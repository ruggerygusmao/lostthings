<?php  
include("detalhe.php");
?>

<html>
<head>
	<title>Todos Encontrados</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/todosEncontrados.css"/>
</head>

<body>
<?php include("topo.php");?>


<?php
  include("conexao.php");
?>

<?php

   $stmt = $conexao->prepare("select  objeto,cidade,bairro,telefone,imagem,descricao from objeto");
  

  $stmt->execute();
  $resAlunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
 ?>
  <center>	
	<div>
 	   <form>
              <table border=0 id="table">
<?php
  foreach($resAlunos as $linha){

  	echo " 
                       <tr align=20px><th>Objeto:</th>
		       <td>".$linha["objeto"]."</td>
			</tr>

			<tr><th>Cidade:</th>
		     <td>".$linha["cidade"]."</td>
			</tr>
			<tr><th>Bairro:</th>
                    <td> ".$linha["bairro"]."</td>
			</tr>
			<tr><th>Telefone:</th>
                    <td>".$linha["telefone"]."</td>
			</tr>
			<tr>
                    <td colspan=2><img src='".$linha['imagem']."' width='350px'/></td>
			</tr>
			<tr><th width=20px valign=top >Descrição: </th>
		    <td width=50px>".$linha["descricao"]."</td>
			</tr>                    

			<tr bgcolor=#ffffff> 
			<td colspan=2><font color=#ffffff>.</font></td>
			<tr>	";

			  }
 ?>

                 </table>
             </form>
         </div>
<br><br>
   </center>
 
</body>
</html>

