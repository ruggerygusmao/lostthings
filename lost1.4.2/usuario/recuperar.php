<?php
include("conexao.php");



if(isset($_POST[enviar])){

	$email = $mysqli->escape_string($_POST['email']);

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$erro[] = "E-mail inválido.";
	}
	
	if(count($erro) == 0){
	$novasenha = substr(md5(time()),0,6);
	$nscriptografada = md5(md5($novasenha));

	
	


	if(mail($email, "Sua nova senha", "Sua nova senha: ".$novasenha)){
	$sql_code = "UPDATE usuario SET senha='$nscriptografada' WHERE email='$email'";
	$sql_query = $PDO->query($sql_code) or die($mysqli->error);
		}
	}
}

?>
