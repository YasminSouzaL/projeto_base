<?php
    include_once("conexao.php");

    $nome = $_POST['nome'];
    $data = $_POST['dt'];
    $local = $_POST['local'];

    $result_msg_contato = "insert into evento(nome,  data, local_t) VALUES ('$nome',  '$data', '$local')";

    $resultado_msg_contato= mysqli_query($conx, $result_msg_contato);
    
    mysqli_close($conx);
    
    echo "<script>alert('Evento Cadastrado');</script>";

?>
