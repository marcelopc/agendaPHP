<?php
  require_once 'config.php';
  require_once 'connection.php';
  require_once 'database.php';
  session_start();

  $user = array(
    'id'=>$_SESSION['idcont'],
    'nome' => $_POST['nome'],
    'endereco' => $_POST['end'],
    'telefone' => $_POST['tel'],
    'email' => $_POST['email']
  );
  DBUpDate('contatos', $user,"id = {$_SESSION['idcont']}");
  $_SESSION['STATUS'] = "Dados modificados";
header("Location:alterar.php");
 ?>
