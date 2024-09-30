<?php
    include_once("conx.php");
	
	$eventos = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
// and protitipo.id = id.dados_lan
//Pesquisar no banco de dados nome do evento 
// "SELECT * FROM evento WHERE nome LIKE '%$usuarios%' LIMIT 20";
/*$sql ="SELECT * from evento, ranking, equipe, prototipo where evento.id = ranking.id_evento and ranking.id_equipe = equipe.id and  
equipe.id = prototipo.id_equipe  and  nome like  '%Bragantec%' ORDER by nome_equipe";*/
$sql = "SELECT * FROM evento, classificacao, equipe, prototipo where evento.id = classificacao.id_evento and classificacao.id_equipe = equipe.id and equipe.id = prototipo.id_equipe and nome like '%$eventos%' ORDER by nome_equipe";

$resultado = mysqli_query($conx, $sql);


if($resultado->num_rows > 0 ){
	while($equipe = mysqli_fetch_assoc($resultado)){
			echo '<li>'.$equipe['nome_equipe'].'</li>';
			echo "<br>";
			echo '<table border=2px>
			<tr>
		  		<th> Id do Prototipo </th>
				<th>Nome Prototipo</th>
				<th>Massa Inicial</th>
				<th>Volume</th>
				<th>Tipo de Garrafa</th>
			</tr>';	
		  	echo '<tr>
			 <td>'.	$equipe['id_prototipo'].'</td>
			  <td>'.$equipe['nome_prototipo'].'</td>
			  <td>'.$equipe['massa'].'</td>
			  <td>'.$equipe['volume'].'</td> 
			  <td>'.$equipe['tipo_garrafa'].'</td>  
			  </tr> ';
			  echo "</tbody></table>";
			  echo "<br>";
			  echo '</center>';	
			  	
  }
}else{
	echo "Nenhum resultado encontrado ...";
}
echo mysqli_error($conx);
