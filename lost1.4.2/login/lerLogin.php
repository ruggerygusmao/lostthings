<?php
session_start();
if(isset($_SESSION["usuario"]) and isset($_SESSION["senha"])) {
echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=paginainicial.php'>";
exit;
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

</body>
</html>
<?php
include("conexao.php");

$usuario = $_POST["usuario"];
$senhaForm = $_POST["senha"];
$stmt = $conexao->prepare("SELECT * FROM usuario WHERE usuario ='$usuario'");
$stmt->execute();
$contar = $stmt->fetchAll();
foreach ($contar as $hash) {
}
$id = $hash["id"];
$senha = $hash["senha"];
if (password_verify($senhaForm , $senha)){
$_SESSION['usuario'] = $usuario;
$_SESSION['id'] = $id;

header('location:paginainicial.php');

} else {
header('Location: login.php?msg=error');
}
} 
?>
