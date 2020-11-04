<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

	<script src="<?php echo base_url();?>assets/js/responsive.min.js"></script>
</head>
<body>

<div class="col-lg-5 col-lg-offset-2">


<h1>Registro de Usuario</h1>
<p>Por favor llena los siguientes campos</p>
 <?php echo validation_errors('<div class="aler alert-danger">','</div>'); ?>
<form action="" method="POST">
	<div class="form-group">
		<label for="username">Nombre de Usuario: </label>
		<input class="form-control" name="username" id="username" type="text">
	</div>

	<div class="form-group">
		<label for="email">Email: </label>
		<input class="form-control" name="email" id="email" type="text">
	</div>

	<div class="form-group">
		<label for="password">Contraseña: </label>
		<input class="form-control" name="password" id="password" type="password">
	</div>

	<div class="form-group">
		<label for="password">Confirmar Contraseña: </label>
		<input class="form-control" name="password2" id="password" type="password">
	</div>

	<div class="form-group">
		<label for="gender">Género</label>
		<select class="form-control" id="gender" name="gender"> 
			<option value="Female">Mujer</option>
			<option value="Male">Hombre</option>
		</select>
	</div>
	<div class="form-group">
		<label for="phone">Teléfono:  </label>
		<input class="form-control" name="phone" id="phone" type="text">
	</div>

	<div class="text-center">
		<button class="btn btn-primary" name="register">Registrar</button>
	</div>
</form>
</div>




<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

 <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>