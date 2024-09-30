<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bdname= "conx";

//criar a conexão
$conx = mysqli_connect($servidor, $usuario, $senha, $bdname);

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);

  if (isset($entrar)) {

    $verifica = mysqli_query($conx,"SELECT * FROM usuarios WHERE login ='$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        echo"<script>alert('Email ');window.location.href='login.html';</script>";
        header("Location: index.php");
      }
  }
?>