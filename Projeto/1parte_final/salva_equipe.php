<?php
    include_once("conexao.php");
    
    $nome = $_POST['nome_equipe'];
    $data = $_POST['dt'];
    $local = $_POST['local'];  

    $result_msg_contato = "INSERT Into equipe(nome_equipe, data, local) VALUES ('$nome','$data', '$local')";
    $resultado_msg_contato= mysqli_query($conx, $result_msg_contato);
    mysqli_close($conx);
    
    


    
?>
