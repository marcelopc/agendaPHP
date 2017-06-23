<?php
    require_once 'config.php';
    require_once 'connection.php';
    require_once 'database.php';
    session_start();

    $contato = array(
    'nome' => $_POST["nome"],
    'email' => $_POST["email"],
    'telefone' => $_POST["tel"],
    'endereco' => $_POST["end"],
    'iduser' => $_SESSION['id']
  );
    DBCreate('contatos',$contato);
    $_SESSION['STATUS'] = "Contato Adicionado";
    header("Location:add.php");
  ?>
