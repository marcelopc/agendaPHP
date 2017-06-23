<?php
require_once 'config.php';
require_once 'connection.php';
require_once 'database.php';
  session_start();
  if(!$_SESSION['user']){
    header('location:agenda.php');
  }else{
    $user = $_SESSION['user'];
    $user = DBRead('usuario',"WHERE email LIKE'$user'");
    foreach ($user as $usuario){}
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link href="css/estilo.css" rel="stylesheet" type="text/css" >
     <link href="css/painel.css" rel="stylesheet" type="text/css" >

     <title>Painel administrativo</title>
   </head>
   <body>
 <!--Barra de navegação-->
 <nav class="navbar navbar-inverse navbar-fixed-top">
   <div class="container-fluid">

     <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1 " aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
     </div>


     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav navbar-right">
         <li><a href="adm.php"><?php echo $_SESSION['nome']?></a></li>
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i><span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="acc.php">Minha conta</a></li>
             <li><a href="pw.php">Trocar senha</a></li>
             <li role="separator" class="divider"></li>
             <li><a href="logoff.php">Logoff</a></li>
           </ul>
         </li>
       </ul>
     </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
 </nav>

 <div class="row contato">
   <div class="col-xs-12">
     <form class="flat" name="formUser" method="post" action="nacc.php">
       <div class="row">
         <div class="col-md-6 pad">
           <div class="form-group">
             <label for="nome">Nome</label>
             <input name="nome" id="nome" type="text" class="form-control"  value=<?php echo "'{$usuario['nome']}'"; ?>/>
           </div>
           <div class="form-group">
             <label for="email">Email</label>
             <input name="email" id="email" type="text" class="form-control " value=<?php echo "'{$usuario['email']}'"; ?>/>
           </div>
           <div class="form-group">
             <label for="tel">Telefone</label>
             <input name="tel" id="tel" type="text" class="form-control " value=<?php echo "'{$usuario['telefone']}'"; ?>/>
           </div>
           <div class="form-group">
             <label for="end">Endereço</label>
             <input name="end" id="end" type="text" class="form-control " value=<?php echo "'{$usuario['endereco']}'"; ?>/>
           </div>
         </div>
       </div>
       <div class="row">
           <div class="col-sm-6 padSub">
           <button type="submit" class="btn btn-primary">Enviar</button>
           <a type="button" class="btn btn-primary"href="adm.php">Voltar</a>
         </div>
       </div>
     </form>
     <!--Alerta de modificação de senha-->
                 <?php
                 if(isset($_SESSION['STATUS'])){
                   echo "<div class='alert alert-success alert-dismissible alertpw'>
                     <button type='button' class='close' data-dismiss='alert'>
                       <span aria-hidden='true'>&times</span>
                     </button>".$_SESSION['STATUS']."</div>";
                   unset($_SESSION['STATUS']);
                 }

                 ?>
     <!--Alerta de modificação de senha-->


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/main.js"></script>
   </body>
 </html>
