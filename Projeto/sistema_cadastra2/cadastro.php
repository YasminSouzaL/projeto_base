<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bdname= "conx";

//criar a conexão
$conx = mysqli_connect($servidor, $usuario, $senha, $bdname);

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
$nivel = $_POST['nivel'];

$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$select = mysqli_query($conx,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }else{
      if($logarray == $login){

        echo"<script language='javascript' type='text/javascript'>
        alert('Esse login já existe');window.location.href='
        cadastro.html';</script>";
        die();

      }else{
        $query = "INSERT INTO usuarios (login,senha,nivel) VALUES ('$login','$senha','$nivel')";
        $insert = mysqli_query($conx,$query);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
      }
    }
?>
