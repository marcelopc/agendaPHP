<?php
    require_once 'config.php';
    require_once 'connection.php';
    require_once 'database.php';
    session_start();

  $senhaAtual = md5($_POST['senhaAtual']);
  $email = $_SESSION['user'];
  $verifica = DBRead('usuario',"WHERE email LIKE'$email'",'email,senha');

  foreach ($verifica as $user){}

  if($user['senha'] == $senhaAtual){
    $senha = array(
      'senha'=>md5($_POST['senha'])
    );
    DBUpDate('usuario', $senha,"email = '$email'");
    $_SESSION['STATUS'] = "Senha modificada";
    header("Location:pw.php");
  } else{
    $_SESSION['STATUSERROR'] = "Senha incorreta";
      header("Location:pw.php");
}
