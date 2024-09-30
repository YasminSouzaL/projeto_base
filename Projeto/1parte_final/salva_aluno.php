<?php
    include_once("conexao.php");

    $nome = $_POST['nome'];
    $escola = $_POST['escola'];
    $curso = $_POST['curso'];
    $ano = $_POST['ano'];
    $equipe = $_POST['equipe'];

    $result_qtd = "SELECT qtd_alunos from equipe where id = $equipe";
    $result = mysqli_query($conx, $result_qtd);  
    
    if ($linha = mysqli_fetch_assoc($result)){
    $qtd = $linha['qtd_alunos'];
    $qtd++;
    }
    $result_msg_contato = "Insert into aluno(nome, escola, curso, ano, id_equipe) VALUES ('$nome', '$escola', '$curso', '$ano', '$equipe')";
    $resultado_msg_contato= mysqli_query($conx, $result_msg_contato);
    $result_msg_contato = "Update equipe set qtd_alunos =$qtd where id=$equipe";

    $resultado_msg_contato= mysqli_query($conx, $result_msg_contato);
    
    echo"<script>alert('Aluno Cadastrado');</script>";

    mysqli_close($conx);


    
?>
