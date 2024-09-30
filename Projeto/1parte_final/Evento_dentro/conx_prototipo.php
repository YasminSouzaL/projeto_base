<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "proj_text";
	
	//Criar a conexao
	$conx = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conx){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>