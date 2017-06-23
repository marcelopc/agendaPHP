<?php
    header("Content-type: text/html; charset=utf-8");

    session_start();
    require_once 'config.php';
    require_once 'connection.php';
    require_once 'database.php';

//usuario e senha em brancos
  if(isset($_POST['email']) && isset($_POST['senha'])){

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = md5($senha);

    $user = DBRead('usuario',"WHERE email LIKE'$email'",'email, senha, nome,id');
    if(!$user){
      $_SESSION['loginError'] = "Usuário ou senha inválido";
      header("location:agenda.php");
    } else{
      foreach ($user as $usuario){}
        if ($usuario['senha'] == $senha){
          //verifica se a senha esta correta se estiver inicia uma sessão e redireciona para adm.php
          $_SESSION['user'] = $_POST['email'];
          $_SESSION['id'] = $usuario['id'];
          $_SESSION['nome'] = $usuario['nome'];
          header("location:adm.php");
        }else{
          $_SESSION['loginError'] = "Usuário ou senha inválido";
          header("location:agenda.php");
        }

        }

  }else{
    $_SESSION['loginError'] = "Usuário ou senha inválido";
    header("location:agenda.php");
  }
?>
