<?php

	include_once ("conx_prototipo.php");	
	/*mimi*/
	$evento = $_POST['evento'];
	$prototipo = $_POST['prototipo'];
	$angulo = $_POST['txt_angulo'];	
	$pressao = $_POST['txt_pressao'];
	$alcance_m = $_POST['alcance_m'];
	$alcance_t = $_POST['alcance_t'];
	$altura_m = $_POST['altura_m'];
	$altura_t = $_POST['altura_t'];
	$temp = $_POST['temp'];
	$umid = $_POST['umid'];
	$vento = $_POST['vento'];
	$hm=$_POST['hora_m'];
	$he=$_POST['hora_e'];
	
	if(!$prototipo){
		mysqli_error($conx);	
	}
	/*INSERT INTO dados_lan (id_equipe, id_evento, id_prototipo, angulo, pressao, alcance_m, alcance_t, altura_m, altura_t, temp, umid, vento) VALUES ('4', '2', '4', '25', '52', '123', '100', '25', '22', '23', '12', '53'); */	
	$rest_usuario="INSERT INTO dados_lan(id_evento, id_prototipo, angulo, pressao,  alcance_m, alcance_t, altura_m, altura_t, temp,umid,vento,hora_marcada,hora_executada) VALUES ('$evento','$prototipo', '$angulo',  '$pressao', '$alcance_m', '$alcance_t','$altura_m','$altura_t','$temp','$umid','$vento','$hm','$he')";
	echo $rest_usuario;
	$resultado_usuario = mysqli_query($conx, $rest_usuario);
	mysqli_close($conx);
	
	//echo"<script>alert('Dados de Lançamento Cadastrado');</script>";
	
?>
