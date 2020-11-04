<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/Logeo.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.css">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


  
    <title>Login</title>
  </head>
  <body>
    
  <div class="col-lg-5 col-lg-offset-2">
      <div class="login-box">

    <h1>Login</h1>
    <h2>Llena los datos para logearse</h2>

    <?php if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php
  } ?>

    <?php echo validation_errors('<div class="aler alert-danger">','</div>'); ?>
  
      <form action="" method="POST">
      <div class="textbox">
        <i class="fas fa-user" aria-hidden="true"></i>
        <label for="username" class="label-default"></label>
        <input class="form-control" placeholder="Usuario" name="username" id="username" type="text">
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <label for="password" class="label-default"></label>
        <input class="form-control" placeholder="Contraseña" name="password" id="password" type="password">
      </div>



       <div class="text-center">
      <button class="btn btn-primary" name="login">Inicia Sesión</button>
    </div>
    </form>
    </div>

  </div>

  
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>