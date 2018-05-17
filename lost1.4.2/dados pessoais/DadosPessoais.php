<?php include("detalhe.php");?>

<html>
  
  <head> <title>Dados Pessoais</title>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/validaDados.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/alteraDados.css"/>
    
      
  </head>
  
  <body>
	<?php include("topo.php");?>      
              

	<?php include("conexao.php");?>

 <center>
	<div id="login">
<?php
  

	$stmt = $conexao->prepare("select nome, usuario, senha, email, cidade, bairro, telefone from usuario where id =".$_SESSION['id']);
	
   
  	$stmt->execute();
  	$resAlunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <form id="cadastro"  action='updateDados.php' method=POST>

         <table id ="dadosP" border=0 >
<?php
  foreach($resAlunos as $linha){

  	echo "           
                         <h3>Alterar Dados</h3><br>
			 <ul>
	
			<tr height=40><li>
                         <th>Alterar nome:*</th>
		         <td ><input name='nome' class='master' type='text' value='".$linha["nome"]."'> </td>
                        </tr></li>

			<tr height=40><li>
			   <th>Alterar Email:*</th>
		           <td><input name='email' class='master' type='text' value='".$linha["email"]."'></td>
                        </tr></li>

			<tr height=40><li>
	                   <th>Alterar Cidade:*</th>
		           <td><input name='cidade' class='master' type='text' value='".$linha["cidade"]."'></td>
                        </tr height=40></li>

			<tr height=40><li>
                           <th>Alterar Bairro:*</th>
		           <td><input name='bairro' class='master' type='text' value='".$linha["bairro"]."'></td>
                        </tr></li>
                        
                        <tr height=40><li>
			   <th>Alterar Telefone:*</th>
		           <td><input name='telefone' class='master' maxlength=11 type='text' value='".$linha["telefone"]."'></td>
			</tr></li>

			<tr height=40><li>
                           <td align='center'><input type=submit value=Alterar></td>
                           <td align='center'><a id='cancelar' href='paginainicial.php'>Cancelar</a></td>
                        </tr></li> 
				</ul>";
			  }

   
 ?> 
	  
 </table>
 </form>
 
</body>
</html>
