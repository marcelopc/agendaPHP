<?php
    require_once 'config.php';
    require_once 'connection.php';
    require_once 'database.php';
    session_start();

    $usuario = array(
    'nome' => $_POST["nome"],
    'email' => $_POST["email"],
    'telefone' => $_POST["telefone"],
    'endereco' => $_POST["endereco"],
    'senha' => md5($_POST["senha"])
  );
  $email = $_POST["email"];
  $verifica = DBRead('usuario',"WHERE email LIKE'$email'",'email');

  foreach ($verifica as $user){}

  if($user['email'] == $email){
    $_SESSION['loginError'] = "Usuário já existe";
    header("location:register.php");
  } else{
    DBCreate('usuario',$usuario);
    header("Location: agenda.php");
}
