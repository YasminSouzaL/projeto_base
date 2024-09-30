<!doctype html>
<html lang = "pt-br">
<head>
        <title> MENU</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilo_rank.css"/>
</head>	
<body>
<center>
	<header>
     RANKING
    </header>
        <section id = "box3">
        <?php
			include_once("con_menu.php");	
        ?>  
        <form  method="POST" action="salva_menu.php">
                <legend> <h2> Qual evento?</h2></legend>
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
                <input type="submit" value="enviar">
        </form>        
    </body>
</html>
