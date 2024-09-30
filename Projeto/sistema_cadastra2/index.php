<html>
<head>
<title>  Portas  </title>
<meta charset="utf8">
<style>
  div#msg_sucesso{
    width: 700px;
    margin-bottom: 6000px;  
	  margin: 10px auto;
	  padding: 10px;
	  background-color: rgb(34, 139, 34);
    border: 3px  groove	rgb(34, 139, 34);
    color: white;
    font-size: 20pt;
}
div#msg_sucesso2{
    width: 700px;
    margin-bottom: 6000px;  
	  margin: 10px auto;
	  padding: 10px;
	  background-color: #add8e6;
    border: 3px  groove	white;
    color: black;
    font-size: 20pt;
}
</style>  
</head>
</html>
<?php
  @$login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){      
      $id=1;
      //echo "<script language='javascript' type='text/javascript'>alert('Bem-Vindo, $login_cookie Essas são  informações que poder ser acessadas por você');window.location.href='http://localhost/Projeto/sistema_cadastra2/menu_2.php';</script>";
    if($login_cookie == "souzasmimi@gmail.com"){
      $id=2;
      //header('Location: http://localhost/Nova%20pasta/sistema_cadastra2/menu_2.php');
      //echo "<script>alert('Olá Administrador!');window.location.href='http://localhost/Projeto/sistema_cadastra2/menu_3.php';</script>";
    }
    if($login_cookie == "coordenador@gmail.com"){
      $id=3;
    }
}else{
      header('Location: http://localhost/Projeto/sistema_cadastra2/menu_1.php');
    }

    switch($id){
      case 1:
          echo "<script>window.location.href='menu_2.php';</script>";
      break;
      case 2:
          echo "<script>window.location.href='menu_3.php';</script>";
      break;
      case 3:
        echo "<script>window.location.href='menu_4.php';</script>";
      break;       
    }
  
    

?>