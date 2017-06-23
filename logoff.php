<?php
  session_start();
  session_destroy(); //destroi todas as váriaveis globais do site

  unset(
    $_SESSION['user'],
    $_SESSION['nome'],
    $_SESSION['id']
  );
  //redireciona para a pagina de login
  header("Location:agenda.php");
 ?>
