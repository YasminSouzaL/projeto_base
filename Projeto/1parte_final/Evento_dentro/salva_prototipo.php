<?php
	include_once("conx_prototipo.php");
	
	$nome_prototipo = $_POST['nome_prototipo'];
	$massa = $_POST['massa'];
	$volume = $_POST['volume'];
	$tipo = $_POST['tipo'];
	$equipe = $_POST['equipe'];
	//$dados_lan = $_POST['dados_lan']; 
	//echo "$nome_usuario - $email_usuario";
	
	$result_usuario = "INSERT INTO prototipo(nome_prototipo, massa, volume, tipo_garrafa, id_equipe) VALUES ( '$nome_prototipo','$massa','$volume','$tipo', '$equipe')";
	
	$resultado_usuario = mysqli_query($conx, $result_usuario);

	echo "<script>alert('Protótipo Cadastrado');</script>";
	mysqli_close($conx);
    
?>
