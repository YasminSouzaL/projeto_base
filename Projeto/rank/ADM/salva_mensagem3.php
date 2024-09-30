<?php
    include_once("conexao_professor.php");

    $nome = $_POST['nome'];
    $escola = $_POST['escola'];
    $curso = $_POST['curso'];
    $ano = $_POST['ano'];
    $equipe = $_POST['equipe'];

    $result_msg_contato = "insert into professor (nome, escola,  curso, ano, id_equipe ) VALUES ('$nome', '$escola', '$curso', '$ano', '$equipe')";

    $resultado_msg_contato= mysqli_query($conx, $result_msg_contato);
    
    mysqli_close($conx);


    
?>
