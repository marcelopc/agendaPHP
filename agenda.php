<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
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

    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="form-login">
            <form class="register" method="post" action="valida.php">
              <label class="sr-only" for="inputEmail">E-mail</label>
              <input name="email" type="email" class="form-control" id="inputEmail" placeholder="E-mail" name="inputEmail" required/>
              <label class="sr-only" for="inputSenha">Senha</label>
              <input name="senha" type="password" class="form-control " id="inputSenha" placeholder="Senha" name="inputSenha" required/>
              <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span> Logar</button>
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
					  <h5 class="h5pad">Não tem conta? <a href="register.php">Crie uma!</a></h5>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
	</body>
</html>
