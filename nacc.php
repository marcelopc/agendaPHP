<?php
  require_once 'config.php';
  require_once 'connection.php';
  require_once 'database.php';
  session_start();

  $user = array(
    'nome' => $_POST['nome'],
    'endereco' => $_POST['end'],
    'telefone' => $_POST['tel'],
    'email' => $_POST['email']

  );
  DBUpDate('usuario', $user,"id = {$_SESSION['id']}");
  $_SESSION['STATUS'] = "Dados modificados";
  header("Location:acc.php");
 ?>
