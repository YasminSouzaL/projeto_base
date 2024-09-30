<!doctype html>
<html lang = "pt-br">
<head>
        <title>RANKING</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilo_rank.css"/>
</head>
<header>
      RANKING DAS EQUIPES
</header>
<body>	
<?php
	include_once("con_menu.php");
	
	$N_evento = $_POST['evento'];
	
$result_msg_contato = "SELECT * FROM classificacao  WHERE classificacao.id_evento=$N_evento ORDER BY pts desc";

//"SELECT ranking.pts, equipe.nome_equipe FROM ranking INNER JOIN equipe ON ranking.id_evento=$N_evento  ";

$resultado_msg_contato= mysqli_query($conx, $result_msg_contato);
echo mysqli_error($conx);
echo "<br>";
echo "<br>";
$id=1;
if(($result_msg_contato) AND ($resultado_msg_contato)){
	while($row_user = mysqli_fetch_assoc($resultado_msg_contato)){
	$n=$row_user['id_equipe'];	
	$teste= "SELECT nome_equipe FROM equipe WHERE id=$n";
	$result=mysqli_query($conx, $teste);
	$row = $result->fetch_assoc();
	if($id==1){
		echo "<strong> <center> <p id=box2> A EQUIPE CAMPEÃ É A: ".$row['nome_equipe']."</strong>🥇🥇 </p> </center>"."</td>";
	}

	echo "\n"."\n";
		echo "<center>
		<table  border=2px id=box3> 
		<tr>
		<th>Posição</th>
		<th>Nome </th>
		<th>Pontos</th>
		</tr> 
		<tr>
		<td>".$id++.'º'."</td>
		<td>".$row['nome_equipe']."</td>
		<td>".$row_user['pts']."</td> 
		</tr> </table>
		</center>";
	}
} 
		
?>
			<section id = "quemsomos">
				<strong>
					<a href = "http://localhost/Projeto/sistema_cadastra2/menu_1.php"> ➜ Menu Princípal ❗❗</a>
	                        </strong>	
            </section>