<?php
    require_once 'config.php';
    require_once 'connection.php';
    require_once 'database.php';
    session_start();

  $drop = DBDelete('contatos',"id={$_POST['tCont']}");
  $_SESSION['STATUS'] = "Contato deletado";
    header("Location:excluir.php");
  ?>
