<?php  
include("detalhe.php");
?>
<html>
<head>
<meta http-equiv="refresh" content="5;url=paginainicial.php">

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"rel="stylesheet" type="text/css">


	
    <style type="text/css">
	#cidade{
	padding: 0.2em;
    border: 1px solid #CCC;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    display: block
		   }
	#documento{
	padding: 0.2em;
    border: 1px solid #CCC;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    display: block
			}
	font {
	font-family: sans-serif;
    font-size: 1em;
	     }

	#envia{
	font-size: 1.5em;
    background: #2E8B57;
    border: 0;
    margin-bottom: 1em;
    color: #FFF;
    padding: 0.2em 0.6em;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    text-shadow: 1px 1px 1px rgba(0,0,0,0.5)
         }
      
     #en{
     text-decoration: none;
}
       #linmenu{
        
        background-color: #000000;
}

#table{
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
input[type="submit"] {
  	font-weight: bold;
  	padding: 4px 8px;
  	border:1px solid #ffffff;
 	background: #bfbfbf;
  	color:#0d0d0d;
	}
	body {
         background-image: url("http://corretoraportalsalvador.com.br/wp-content/uploads/2016/06/background-degrade.jpg");
         background-repeat: no-repeat;
         background-position: center center;
         background-position: 70% 100%;
         
}
    </style>
</head>

<body>
 <?php include("topo.php");?>

<?php
		include 'conexao.php'; 
		
		
 
		try{
		$stmt = $conexao->prepare("delete from objeto where id_objetos=?");
				$cod= $_POST["id"]; 
 					$stmt -> bindParam(1,$cod);    
					$stmt->execute(); 

						if($stmt->rowCount() >0){
			 		echo "<center><h1>Publicação excluída com sucesso!</h1></center>";
				}else{
			 		echo "<center><h1>Erro ao excluir publicão</h1></center>";
					}	
					}catch(PDOException $e){
						echo 'ERROR: ' . $e->getMessage();
					}
	?>

</body>
</html>
