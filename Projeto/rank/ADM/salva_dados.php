<?php
			include_once("conexao_professor.php");
			
			$equipe = $_POST['equipe'];
			$pts = $_POST['pts'];
			$evento = $_POST['evento'];
		 
		
			$result_msg_contato = "insert into classificacao (id_equipe, pts, id_evento) VALUES ('$equipe', '$pts', '$evento')";
		
			$resultado_msg_contato= mysqli_query($conx, $result_msg_contato);
			
			mysqli_close($conx);
		
		
?> 