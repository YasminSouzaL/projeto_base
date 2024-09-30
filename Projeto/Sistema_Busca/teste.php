<?php
    include_once("conx.php");
?>

<!doctype html>
<html lang = "pt-br">
    <head>
        <title> SISTEMA DE BUSCA </title>
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
    legend {
	border:medium solid gray;
    background-color: #d3d3d3;
    font-weight: bold;
    }
    .box1{
	border:2px;
	border-style: groove;
	border-width : 8px;
	width: 400px;
	font-size: 14px;
    text-align: center;
	margin-left :  500px;
	color: rgb(2, 2, 2);
	background-color: #d3d3d3
    }
    body{
        background-image: url("../imagens/fotolua.jpg");
    }
    
    #quemsomos{
	    border-style: groove;
        border-width : 2px;
        width:300px;
	    font-family: arial;
	    font-size: 17px;
        text-align: center;
	    margin-left :  1000px;
	    color: black;
	    background-color:  #d3d3d3;
    } 
    </style>	
    <body>
    <header>
     Tabela das Equipes apartir de algum Evento.   
    </header>
	    <section class="box1">
                    <form method="POST" id="form-pesquisa"  action="">
                        <br>
			            <label>Pesquisar: </label>
                        <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite o nome do evento">
                    </fieldset>    
		            </form>
		            <ul class="resultado">
	                
		            </ul>
                    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		            <script type="text/javascript" src="teste.js"></script>
        </section>
        <br>
        <br>
            <section id = "quemsomos">
				<strong>
					<a href = "http://localhost/Projeto/sistema_cadastra2/menu_1.php"> ➜ Menu Princípal ❗❗</a>
	                        </strong>	
            </section>
    </body>
</html> 