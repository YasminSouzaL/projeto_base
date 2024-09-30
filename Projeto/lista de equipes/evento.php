<!doctype html>
<html lang = "pt-br">
    <head>
        <title> Lista de Equipes </title>
        <meta charset="utf-8">   
	</head>
	<script>
           setTimeout(function() {
           window.location.reload(1);
		   alert('1 Minuto'); 
           }, 60000); //  1m =	60000

		   function relogio(){
              var data=new Date();
                var hor=data.getHours();
                var min=data.getMinutes();
                var seg=data.getSeconds();

                if(hor<10){
                    hor="0"+hor;
                }
                if(min<10){
                    min="0"+min;
                }
                if(seg<10){
                    seg="0"+seg;
                }

                var horas=hor+":"+min+":"+seg;
                document.getElementById("rel").value=horas;
            }

            var tempo=setInterval(relogio,1000);

    </script>
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
    #box1{
	border:2px;
	border-style: groove;
	border-width : 8px;
	width: 600px;
	font-size: 14px;
    text-align: center;
	margin-left :  70px;
	color: rgb(2, 2, 2);
	background-color: #d3d3d3
    }
    body{
        background-image: url("../imagens/fotofoguete.jpg");
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
	#box{
                border:2px;
	            border-style: groove;
	            width: 400px;
                height: 150px;
	            font-size: 14px;
                text-align: center;
	            color: rgb(2, 2, 2);
	            background-color: #d3d3d3;
            }
            #rel{
                   text-align: center;
                   color: #0f0;
                   font-weight: bold;
                   font-size:30px;
                   width:130px;
                   background-color: #000;
            } 
    </style>	
    <body>
    <header>
     Lista de Lançamento
	</header> 
<?php
	include_once("con_menu.php");
	
	$N_evento = $_POST['evento'];
$sql="SELECT * FROM evento, classificacao, equipe, prototipo,dados_lan where evento.id = classificacao.id_evento 
and classificacao.id_equipe = equipe.id 
and equipe.id = prototipo.id_equipe 
and prototipo.id_prototipo = dados_lan.id_prototipo
and classificacao.id_evento=$N_evento ORDER by hora_marcada";	

$resultado = mysqli_query($conx, $sql);
$num_results = mysqli_num_rows($resultado);
$id=1;
//Tipo, Se o campo tal de datas da linha i, for menor que a data atual (bota a função php), não exiba, caso contrário exiba
$hora_atual = date('H:i:s');
for ($i=0; $i <$num_results; $i++){
	$equipe = mysqli_fetch_assoc($resultado);
	if( $equipe['hora_marcada'] > $hora_atual ){
    echo "<center>
		<table border=1 id='box1'>
     			<thead>
     				<tr>
        				<th>Posição </th>
        				<th>Nome da Equipe </th>
        				<th>Nome do prototipo</th>
						<th>Hora Marcada</th>
     				</tr>
     			</thead>
      			<tbody>
        			<tr>
		    			<td>".$id++.'º'."</td>
		    			<td>".$equipe['nome_equipe']."</td>
            			<td>".$equipe['nome_prototipo']."</td>
						<td>".$equipe['hora_marcada']."</td>
					</tr>
	  			</tbody>
		</table>
		</center>";
	}
} 		
?>
<br><br>
<center>
    <div id="box">
        <h2>Relogio Digital</h2> 
        <input type="text" id="rel"/>
    </div>    
    </center>  
