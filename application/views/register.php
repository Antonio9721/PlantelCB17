<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/Logeo.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.css">  

    <title>Registro</title>
  </head>
  <body>
   
<div class="col-lg-5 col-lg-offset-2">
   <div class="login-box">

    <h1>Página de registro</h1>
    <h2>Llena los datos para registrarse</h2>

    <?php if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php
  } ?>

    <?php echo validation_errors('<div class="aler alert-danger">','</div>'); ?>
  
      <form action="" method="POST">
      <div class="textbox">
        <label for="username" class="label-default">Username:</label>
        <input class="form-control"  name="username" id="username" type="text">
      </div>

      <div class="textbox">
        <label for="email" class="label-default">Email:</label>
        <input class="form-control"  name="email" id="email" type="text">
      </div>

      <div class="textbox">
        <label for="password" class="label-default">Contraseña:</label>
        <input class="form-control"  name="password" id="password" type="password">
      </div>

      <div class="textbox">
        <label for="password" class="label-default">Confirmar contraseña:</label>
        <input class="form-control"  name="password" id="password2" type="password">
      </div>

     

      <div class="textbox">
        <label for="phone" class="label-default">Teléfono:</label>
        <input class="form-control"  name="phone" id="phone" type="text">
      </div>

       <div class="textbox">
      <button class="btn btn-primary" name="register">Registrar</button>
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