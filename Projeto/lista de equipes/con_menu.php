<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bdname= "proj_text";

    //criar a conexão
    $conx = mysqli_connect($servidor, $usuario, $senha, $bdname);

    //texta 
    if(!$conx){
		die("Falha na conexao: " . mysqli_connect_error());
	  }else{
		//echo "Conexao realizada com sucesso";
	}	
?>