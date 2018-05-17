<?php  
include("detalhe.php");
?>

<!DOCTYPE html>
 <html>
  
  <head>
  	<meta charset="UTF-8">
    <title>Alterar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/publicacao.css"/>
  	<link rel="stylesheet" type="text/css" href="css/alterarObjeto.css"/>	
  </head>

<body>

	<?php include("conexao.php");?>
	<?php include("topo.php");?>

	<?php
          $cod = $_GET['idobjetos'];
	  $stmt = $conexao->prepare("select  * from objeto where id_objetos='$cod'");
		

  $stmt->execute();
  $resAlunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
 	?>

  <center>	
	<div>
           <form name="formAluno" method="POST" action="updateObjeto.php">

             <table border=0   id="table">
<?php
  foreach($resAlunos as $linha){

  	echo " <td><input type=hidden name='id' value='".$linha["id_objetos"]."'></td>
			

	
              		<tr><th >Objeto:</th>
		       <td><input type='text' name='objeto' value='".$linha["objeto"]."'></td>
			</tr>

			<tr><th>Cidade:</th>
		     <td><input type='text' name='cidade' value='".$linha["cidade"]."'></td>
			</tr>
			<tr><th>Bairro:</th>
                    <td><input type='text' name='bairro' value='".$linha["bairro"]."'></td>
			</tr>
			<tr><th>Telefone:</th>
                    <td><input type='text' name='telefone' value='".$linha["telefone"]."'></td>
			</tr>
			<tr>
                    <td colspan=2><img src='".$linha['imagem']."' width='320px'></td>
			</tr>
		
			";

			  }


 ?>      	<tr><th>Descrição: </th>
	<td><textarea  cols ='30' rows ='5' id='descricao' name ='descricao' maxlength = '250'> <?php echo $linha["descricao"] ?></textarea></td>
			</tr>
				
			<tr>
                    <td><input type='submit' value='Alterar'></td>
              		</tr>

 	     </table>
           </form>
       </div>
   </center>
</body>
</html>


