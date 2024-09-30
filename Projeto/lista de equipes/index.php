<!doctype html>
<html lang = "pt-br">
<head>
        <title> Lista de Equipe</title>
		<meta charset="utf-8">
</head>
<style>
header{
    /*layout*/
	margin:  20px 10px 20px 10px;
	padding: 15px;
    /*bordas*/
	border-width: 10px;
	border-style: groove;
    /*fonte*/
	font-family: arial;
	font-size: 25px;
	text-align: center;
    /*cores*/
	background-color:  #020808;
    color:rgb(243, 228, 14);  
    }
#box1{
	border:2px;
	border-style: groove;
	border-width : 8px;
	width: 300px;
	font-size: 14px;
    text-align: center;
	margin-left :  100px;
	color: rgb(2, 2, 2);
	background-color: #d3d3d3
    }
    legend {
	border:medium solid black;
    background-color: white;
    font-weight: bold;
    height: 40px;
	}
	body{
		background-image: url("../imagens/fotofoguete.jpg");
	}
</style>	
<center>
	<header>
     Lista de Equipe
    </header>
        <section id="box1">
        <?php
			include_once("con_menu.php");	
        ?>  
        <form  method="POST" action="evento.php">
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