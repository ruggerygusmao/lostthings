<?php
include ("detalhe.php");
include ("conexao.php");

$objeto = $_POST["objeto"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$telefone = $_POST["telefone"];
$descricao = $_POST["descricao"];
$id = $_POST["id"];


try{
$stmt = $conexao->prepare("update objeto set objeto=? ,cidade=?, bairro=?, telefone=?, descricao=? where id_objetos=?");

$stmt -> bindParam(1,$objeto);
$stmt -> bindParam(2,$cidade);
$stmt -> bindParam(3,$bairro);
$stmt -> bindParam(4,$telefone);
$stmt -> bindParam(5,$descricao);
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
	echo "<center><h2>Publicação alterada com sucesso</h2></center>";
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

