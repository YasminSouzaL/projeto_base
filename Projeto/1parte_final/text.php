<?php
?>

<!doctype html>
<html lang = "pt-br">
    <head>
        <title> Inscrições 1 Parte</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilo.css"/>   

    </head>	
    <body background="camuflado.JPG" bgproperties="fixed">
        <header id="topo">
          Primeira parte das inscrições
        </header>
        <main> <!--conteudo principal-->
        <section id="box1" > 
                    <?php
                        include_once("conexao.php");
                    ?>
                    <form method="POST" action="salva_evento.php">
                            <legend> <h2> Inscrições de Eventos </h2></legend>
								<br>
								Nome do Evento:
								<br>
									<input type="text" name="nome" >
								<br>
								<br>
								Data:
								<br>
									<input type="date" name="dt">
            					<br><br>
								Local:
								<br>
									<input type="text" name="local" >
								<br>
								<br>	
								<input type="submit" value="Enviar">
								<input type="submit" value="Limpar">          
                    </form>
            </section>
            <br>
            <br>
        	<section id="box2"> 
                    <?php
                        include_once("conexao.php");
                    ?>
                    <form method="POST" action="salva_equipe.php">
                            <legend> <h2> Inscrições de Equipes </h2></legend>
								<br>
								Nome das Equipes:
								<br>
									<input type="text" name="nome_equipe" >
								<br>
								<br>
								Origem:
								<br>
									<input type="text" name="local" >
								<br>
								<br>
								Data:
								<br>
									<input type="date" name="dt">
            					<br><br>	
								<input type="submit" value="Enviar">
								<input type="submit" value="Limpar">             
                    </form>
            </section>
            <br>
            <br>
            <section id="box3"> 
                    <?php
                        include_once("conexao.php");
                    ?>
                    <form method="POST" action="salva_aluno.php">
                            <legend> <h2> Inscrições dos Alunos </h2></legend>
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
										$result = "SELECT * FROM equipe WHERE qtd_alunos<4";
										$resultado = mysqli_query($conx, $result);
										while($row_n = mysqli_fetch_assoc($resultado)){ ?>
										<option value="<?php echo $row_n['id']; ?>"><?php echo $row_n['nome_equipe']; ?></option> <?php
										}
									?>                            
				                </select><br><br>		
								<input type="submit" value="Enviar">
								<input type="submit" value="Limpar">             
                    </form>
            </section>
			<br>
			<center>
			<section id = "quemsomos">
				<strong>
					<a href = "Evento_dentro/evento_inside.php"> ➜ Mais Informações!! 💻</a>
				</strong>	
			</section>
			</center>  
		</main>
    </body>
</html>