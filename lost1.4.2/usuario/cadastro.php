<html>
<head>
<meta http-equiv="refresh" content="2;url=login.php">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/cadastro.css"/>
</head>
<body>
	<center>
	<h1 id = "cade">Cadastro</h1>
	</center>


<?php
include("conexao.php");
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$telefone = $_POST['telefone'];

$senhaCripto = password_hash($senha,PASSWORD_DEFAULT);

 try{
//select * from usuario where login=:login and senha=:senha
	
        $stmt = $conexao->prepare('INSERT INTO usuario(nome, usuario, senha, email, cidade, bairro, telefone) VALUES(:nome,:usuario, :senha, :email, :cidade, :bairro, :telefone)');
  $stmt->execute(array(
    ':nome' => $nome,
    ':usuario' => $usuario,
    ':senha' => $senhaCripto,
    ':email' => $email,
    ':cidade' => $cidade,
    ':bairro' => $bairro,
    ':telefone' => $telefone
  ));

  if ($stmt->rowCount()>0){
	echo "<center><h3>Cadastro efetuado com sucesso<h3></center>";
    }else{
        echo "</center><h3>Houve algum problema no cadastro de usuário<h3></center>";
   } 
  }catch(PDOException $e){

    echo "Conexão falhou. o motivo foi:";

    echo $e->getMessage();
}
?>


</body>
</html>
