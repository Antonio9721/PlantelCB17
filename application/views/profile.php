<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.min.css">

    <title>Login</title>
  </head>
  <body>
    

    <div class="col-lg-5 col-lg-offset-2">

    <h1>Bienvenido</h1>
    

    <?php if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php
  } ?>


        

       HELLO, <?php echo $_SESSION['username']; ?> 

       <br><br>

       <a href="<?php echo base_url(); ?>index.php/auth/logout">Cerrar sesión</a>
    </div>

   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>