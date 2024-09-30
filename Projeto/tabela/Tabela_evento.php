<?php
?>
<!doctype html>
<html lang="pt-br">
<head>
<title> TABELA DOS EVENTOS </title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="tabel.css"/>
</head>
	<body>
        <header id="topo">
        TABELA DOS EVENTOS
        </header> 
        <main>
            <section>
                <article>
                    <center>
                    <table border="1" id="tabela">
                     <tr>
                    <th>Nome</th>
                    <th>Local</th>
                    <th>Data</th>
                </tr>
            <?php 
            $hostname = "localhost";

            $user = "root";
    
            $password = "";
    
            $database = "projeto";

            $conexao = mysqli_connect($hostname, $user, $password) ;
            $conx = mysqli_select_db($conexao,$database);
            $sql=mysqli_query( $conexao,'SELECT*FROM evento');
      
            $lista = 0;

                while($dados = mysqli_fetch_array ($sql))
                {
                    $lista++; ?>

                <tr>
                    <td WIDTH=150><?php echo $dados['nome']; ?></td>
                    <td WIDTH=150 ><?php echo $dados['local']; ?></td>
                    <td WIDTH=150 ><?php echo $dados['data']; ?></td>
                    <br>
                </tr>
                <?php } ?> 
            </table>
            </center>     
            <br>
            <br>         