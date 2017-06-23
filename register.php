<?php
    session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agenda</title>
		<meta charset="utf-8">
        <!--Define a viewport-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--adicionar css bootstrap-->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <!--estilo personalizado-->
        <link href="css/estilo.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="row contato">
      <div class="col-xs-12">
        <form name="frmContato" method="post" action="vregister.php">
          <div class="row">
            <div class="col-md-6 pad">
              <div class="form-group">
                <input name="nome" type="text" class="form-control " placeholder="Nome*" required/>
              </div>
              <div class="form-group">
                <input name="email" type="email" class="form-control " placeholder="Email*" required/>
              </div>
              <div class="form-group">
                <input name="telefone" type="tel" class="form-control " placeholder="Telefone"/>
              </div>
              <div class="form-group">
                <input name="endereco" type="text" class="form-control " placeholder="Endereco"/>
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control " placeholder="Senha*" required/>
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-sm-6 padSub">
              <button type="submit" class="btn btn-primary">Enviar</button>
              <a type="button" class="btn btn-primary"href="agenda.php">Voltar</a>
            </div>
          </div>
        </form>
        <!--Alerta de erro! aparece quando usuario tenta acessar valida.php sem usuario e senha-->
                    <?php
                    if(isset($_SESSION['loginError'])){
                      echo "<div class='alert alert-danger alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert'>
                          <span aria-hidden='true'>&times</span>
                        </button>".$_SESSION['loginError']."</div>";
                      unset($_SESSION['loginError']);
                    }
                    ?>
        <!--Alerta de erro! aparece quando usuario tenta acessar valida.php sem usuario e senha-->
      </div>
    </div>
  </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
