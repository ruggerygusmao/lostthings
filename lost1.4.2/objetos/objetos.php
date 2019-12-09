<?php include("topo.php");?>
 
<?php
include("detalhe.php");
include("conexao.php");
$objeto = $_POST['objeto'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$telefone = $_POST['telefone'];
//$imagem = $_POST['imagem'];
$descricao = $_POST['descricao'];


	$uploaddir = 'imagens/';
	 $uploadfile = $uploaddir . basename($_FILES['imagem']['name']);
	 $arquivo_tmp = $_FILES['imagem']['tmp_name'];
	$uploadfile;
	//echo '<pre>';
	if (move_uploaded_file($arquivo_tmp, $uploadfile)) {
    //echo "Arquivo válido e enviado com sucesso.\n";
	} else {
    echo "";
}

 try{
	
        $stmt = $conexao->prepare("INSERT INTO objeto(id_usuario,objeto, cidade, bairro, telefone, imagem,descricao) VALUES (?,?,?,?,?,?,?)");
	$stmt -> bindParam(1,$_SESSION['id']);
	$stmt -> bindParam(2,$objeto);
	$stmt -> bindParam(3,$cidade);
	$stmt -> bindParam(4,$bairro);
	$stmt -> bindParam(5,$telefone);
	$stmt -> bindParam(6,$uploadfile);
	$stmt -> bindParam(7,$descricao);	
	
   $stmt->execute();

 ?>
<html>
<head>
<meta http-equiv="refresh" content="2;url=publicacao.php">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="css/paginainicial.css"/>
</head>
<body>

<?php  
  if ($stmt->rowCount()>0){
	echo "<center><h2>Publicação efetuada com sucesso</h2></center>";
    }else{
        echo "<center><h1>Houve algum problema na publicação</center></h1>";
   } 
  }catch(PDOException $e){

    echo "Conexão falhou. o motivo foi:";

    echo $e->getMessage();
}
?>


</body>
</html>
