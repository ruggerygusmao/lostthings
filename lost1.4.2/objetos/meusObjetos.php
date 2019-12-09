<?php  
include("detalhe.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Meus Objetos</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/meusObjetos.css"/>
</head>

<body>

 <?php include("topo.php");?>

 <?php include("conexao.php");?>


<?php
	  $stmt = $conexao->prepare("select  * from objeto where id_usuario='$id'");
	

  $stmt->execute();
  $resAlunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <center>	
	<div>
           <form name="formAluno" action="deleteObjeto.php" method="POST">

             <table border=0  id="table">
<?php
  foreach($resAlunos as $linha){

  	echo " 
		       <td><input type=hidden name='id' value=".$linha["id_objetos"]."></td>
			

	
              		<tr><th >Objeto:</th>
		       <td>".$linha["objeto"]."</td>
			</tr>

			<tr><th>Cidade:</th>
		     <td>".$linha["cidade"]."</td>
			</tr>
			<tr><th>Bairro:</th>
                    <td>".$linha["bairro"]."</td>
			</tr>
			<tr><th>Telefone:</th>
                    <td>".$linha["telefone"]."</td>
			</tr>
			<tr>
                    <td colspan=2><img src='".$linha['imagem']."' width='350px'></td>
			</tr>
			<tr><th width=20px valign=top>Descrição: </th>
		    
		<td width=50px>".$linha["descricao"]."</td>
			</tr>
				
			<tr>
                    <td><a id='alt' href='alterarObjetos.php?idobjetos=".$linha['id_objetos']."'>Alterar</a></td>

			<td><input type=submit value=Excluir></td>
			</tr>
			<tr bgcolor=#ffffff> 
			<td colspan=2><font color=#ffffff>.</font></td>
			</tr>
                         
                        
			";

			  }


 ?>
 	     </table>
           </form>
       </div>
   </center>


</body>
</html>


