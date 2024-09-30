<?php

   
    
?>
<!doctype html>
<html lang = "pt-br">
<head>
        <title> RANK(INSCRIÇÂO)  </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>	
<center>
<style>
	.container {
    width: 500px;
    padding-right: 5px;
    padding-left: 5px;
    margin-right: auto;
    margin-left: auto;
}

</style>	
 <br>
<body  background ="../../imagens/adm.jpg">
<div class="container">       
<div class="alert alert-success" role="alert">
        <?php
			include_once("conexao_professor.php");
			
		?>
	<table  class ='table table-dark table-bordered'>	  
        <form  method="POST"  action="salva_dados.php">
                <legend> <h2> Inscrições para o rank </h2></legend>
                <br>
                Equipes:
				<select name="equipe">
					<option>Selecione</option>
						<?php
							$result = "SELECT * FROM equipe";
							$resultado = mysqli_query($conx, $result);
							while($row_n = mysqli_fetch_assoc($resultado)){ ?>
							<option value="<?php echo $row_n['id']; ?>"><?php echo $row_n['nome_equipe']; ?></option> <?php
							}
						?>                            
				</select><br><br>	
                PONTOS: <input type="number" name="pts"><br><br>
                Evento:
				<select name="evento">
				    <option>Selecione</option>
					<?php
				    $result = "SELECT * FROM evento";
					$resultado = mysqli_query($conx, $result);
					while($row_n = mysqli_fetch_assoc($resultado)){ ?>
					<option value="<?php echo $row_n['id']; ?>"><?php echo $row_n['nome']; ?></option> <?php
					}
					?>                            
				</select><br><br>	
                <input type="submit" value="enviar">
                <br><br> 
			</form>
	</table>		
</div>
</div>

<br>		
<br>
<br>
<div class="container"> 
	<div class="alert alert-secondary" role="alert">
                    <form method="POST" action="salva_mensagem3.php">
                            <legend> <h2 id=""> Inscrições dos Professores </h2></legend>
								<br>
								Nome:
								<br>
									<input type="text" name="nome" >
								<br>
								<br>
								Escola:
								<br>	
									<input type="text" name="escola" placeholder="">
								<br>
								<br>
								Curso:
								<br>
									<input type="text" name="curso">
								<br>
								<br>
                                Ano:
								<br>
									<input type="date" name="ano">
								<br>
								<br>
                                Equipes:
				                <select name="equipe">
					                <option>Selecione</option>
									<?php
										$result = "SELECT * FROM equipe";
										$resultado = mysqli_query($conx, $result);
										while($row_n = mysqli_fetch_assoc($resultado)){ ?>
										<option value="<?php echo $row_n['id']; ?>"><?php echo $row_n['nome_equipe']; ?></option> <?php
										}
									?>                            
				                </select><br><br>	
								<input type="submit" value="Enviar">
								<input type="submit" value="Limpar">       
                    </form>
</div>
</center>    
</body>
</html> 



