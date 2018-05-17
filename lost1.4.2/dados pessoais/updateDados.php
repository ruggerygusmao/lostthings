<?php
include ("detalhe.php");
include ("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$telefone = $_POST["telefone"];
$id = $_SESSION["id"];


try{
$stmt = $conexao->prepare("update usuario set nome=? , email=?, cidade=?, bairro=?, telefone=? where id=?");

$stmt -> bindParam(1,$nome);
$stmt -> bindParam(2,$email);
$stmt -> bindParam(3,$cidade);
$stmt -> bindParam(4,$bairro);
$stmt -> bindParam(5,$telefone);
$stmt -> bindParam(6,$id);


$stmt->execute(); 
?>
<html>
<head>
	<meta http-equiv="refresh" content="2;url=paginainicial.php">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="css/paginainicial.css"/>
</head>

<body>
<?php include("topo.php");?>
 
<?php  
  if ($stmt->rowCount()>0){
	echo "<center><h2>Alteração efetuada com sucesso</h2></center>";
    }else{
        echo "<center><h1>Houve algum problema na alteração</center></h1>";
   } 
  }catch(PDOException $e){

    echo "Conexão falhou. o motivo foi:";

    echo $e->getMessage();
}
?>
</body>
</html>

