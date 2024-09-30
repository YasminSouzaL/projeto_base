<?php
?>
<!doctype html>
<html lang="pt-br">
<head>
<title> Inscrições 2 Parte </title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="text.css"/>
</head>
<body background="camuflado.JPG" bgproperties="fixed">
        <header id="topo">
           Segunda Parte das inscrições
        </header>
	    <main id="conteudo">
            <section id="box1">
                    <?php
	                    include_once("conx_prototipo.php");
                    ?>
                     <form method="POST" action="salva_prototipo.php">   
                            <legend> <h2 id="descricoes">  Dados  do protótipo</h2>  </legend>
                            <br><br> 
                            Nome Para o Protótipo:<input type="text" name="nome_prototipo"> <br> <br>
                            Massa Inicial:<input type="number" name="massa" placeholder="" step="0.010" ><br><br>
                            Volume:<input type="number" name="volume" placeholder="" step="0.010" ><br><br>
                            Tipo da Garrafa: <input type="text" name="tipo" placeholder="ex:coca-cola2L"><br><br>
                            Equipe:
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
                            <input type="submit" value="Cadastrar">
                            <input type="submit" value="Limpar">
                    </form>     
            </section>
            <br><br>
            <section id="box2">
            <?php
	            include_once("conx_prototipo.php");
            ?>
            <form method="POST" action="salva_lancamento.php">
                    <legend> <h2>  Dados do Lançamento </h2>  </legend>
                    <br>
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
                        Protótipo:
			<select name="prototipo">
			        <option>Selecione</option>
					<?php
						$result = "SELECT * FROM prototipo";
						$resultado = mysqli_query($conx, $result);
						while($row_n = mysqli_fetch_assoc($resultado)){ ?>
						<option value="<?php echo $row_n['id_prototipo']; ?>"><?php echo $row_n['nome_prototipo']; ?></option> <?php
						}
					?>                            
                        </select><br><br>
                        Ângulo (°)?<input type="number" name="txt_angulo" placeholder=""  ><br><br>
                        Pressão (kPa)?<input type="number" name="txt_pressao" placeholder=""  step="0.100" ><br><br>
                        Alcance Medido (m):<input type="number" name="alcance_m" placeholder="" ><br><br>
                        Alcance Teórico (t):<input type="number" name="alcance_t" placeholder=""  ><br><br>
                        Altura Máxima medida (m):<input type="number" name="altura_m" placeholder=""  ><br><br>
                        Altura Máxima teórica (t):<input type="number" name="altura_t" placeholder="" ><br><br>
                        Temperatura: <input type="number" name="temp" placeholder="Qual é a temperatura" step="0.010" ><br><br>
                        Vento: <input type="number" name="vento" placeholder="Qual é o vento?" step="0.010" ><br><br>
			Umidade: <input type="number" name="umid" placeholder="Qual  a umidade?" step="0.010" ><br><br>
                        Hora marcada:<input type="time" name="hora_m" placeholder="2003-10-16 16:30:45"><br><br>
                        Hora executada:<input type="time" name="hora_e" placeholder="2003-10-16 16:30:45">
            		<br><br>
                        <center>
                        <input type="submit" value="Cadastrar">
                        <input type="submit" value="Limpar">
                        <center>   
                            
                        <br><br>  
                </form>
        </section>
            <center> 
            <section id = "quemsomos">
				<strong>
					<a href = "http://localhost/Projeto/sistema_cadastra2/menu_2.php"> ➜ Menu Princípal ❗❗</a>
	                        </strong>	
             </section>
             </center> 
            <br>  
        </main>       
	</body>
</html>