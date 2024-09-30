<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bdname= "proj_text";

    //criar a conexão
    $conx = mysqli_connect($servidor, $usuario, $senha, $bdname);

    //texta 
    if(!$conx){
        echo "Falha na conexão";
    }
?>