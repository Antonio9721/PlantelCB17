<!DOCTYPE html>
<html>
<head>
	<title>Subir imagen</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		<form action="<?php echo base_url();?>cupload/subirImagen" method="POST" enctype="multipart/form-data"> 
			<div class="container">
				<div class="row">
					<div class="col-6">
						<strong>Sube una imagen con descripción</strong>
						<input class="form-control" type="text" placeholder="Título">
						<input type="file" class="form-control-file" id="exampleFormControlFile1">
						<input class="form-control" type="text" placeholder="Descripción del producto">
						<input type="submit" value="Guardar">
					</div>
				</div>
			</div>
		</form>
<?php echo $error;?>
</body>
</html>


