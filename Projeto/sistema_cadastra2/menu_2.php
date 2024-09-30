<?php
$paginas=['Quem Somos'=>'
<h1> Olá seja bem vindo !! 🤗😁</h1>
<br>
<p> Somos do projeto:<strong> Automação de uma base lançadora de foguetes com propulsão hidrostática para participação em olimpíadas </strong>
<br> 
Integrantes: Guilherme Daiki Yukimitsu, Yasmin Souza Lima,Clewton Luís Ferreira da Fonseca, Edson Anício Duarte e Ricardo Barz Sovat do Instituto Federal de São Paulo - Campus Campinas,Campinas – SP.
</p>'];
$paginas['Links']='<nav><ul>
<li><a href="../1parte_final/text.php"> Inscrições </a></li>
<br>
<li><a href="../Sistema_Busca/teste.php"> Busca </a></li>
<br>                         
<li><a href="../rank/menu.php"> Ranking </a></li>
</ul>
</nav>';
?>
<html>
<head>
    <title>HOME (Menu dos Alunos) </title>
    <meta charset="utf-8">
    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    header{
        font-weight: bold;
        padding: 8px 10px;
        text-align:center;
        background-color: #d3d3d3;
    }
    a{
        display:inline-block;
        margin: 0 15px;
        color: black;
        font-size:17px;   
    }
    #box3{
        max-width:600px;
        margin:12px auto;
        padding: 0 2%;
        margin-left:800px;
        background-color: #d3d3d3;
    }
    h2{
        background-color: black;
        color: yellow;
        padding: 10px 8px;     
    }
    p{
        
        color:black;
        margin-top:11px;
        font-size:16px;
        font-family:Helvetica;
    }
    </style>
</head>
<body background="../imagens/fototerra.jpg">
    <header>
        <?php
            foreach($paginas as $key => $value){
                echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
            }
        ?>
    </header>
    <br><br>
    <section id="box3">
        <h2> 
        <?php
         $pagina = (isset($_GET['page']) ? $_GET['page'] : 'Quem Somos');
         
         if(!array_key_exists($pagina,$paginas)){
             $pagina = 'Quem Somos';

         }
         
         echo ucfirst($pagina);   
        ?>
        </h2>
        <p>
            <?php
             echo $paginas[$pagina];
            ?>
        </p>
        <br><br>
    </section>
</body>
</html>