<!DOCTYPE html>
<html>
<head>
	<title>Editar Registro</title>
</head>
<div class="col-12">
	<body>
	<?php foreach ($carrerasolito as $key): ?>
		<form action="http://localhost:8084/Plantel/index.php/carreras/updateCarreras/<?=$key->idCarrera?>"
         method="POST">

         <br> <br> <br>  
         <center>
         <h5>Capacitaciones Ofertadas</h5>
         <h6>Editar Registro</h6>
         </center>
		<div class="form-group row">
			<div class="col-2"></div>
			<div class="form-group col-md-3">
            <label>Nombre de la Capacitación</label>
				<select class="form-control" name="carrera" value="<?=$key->Carrera ?>">

					<option>Higiene y Salud Comunitaria</option>
					<option>Diseño Arquitectonico</option>
					<option>Informática</option>
					<option>Producción Agropecuaria</option>
					<option>Contabilidad</option>
					<option>Tecnología de los Alimentos</option>
				</select>
<br>
                <label>Clave de la Capacitación:</label>
				<input class="form-control" type="text" name="clave" onkeypress="return NumText(event)" 
                maxlength="13" minlength="1" value="<?=$key->Clave ?>">
<br>
				<label>Nombre del Docente:</label>
				<input class="form-control" type="text" name="nombred" onkeypress="return soloLetras(event)" 
                maxlength="25" minlength="1" value="<?=$key->NombreD ?>">
                </div>

            <div class="col-2"></div>
			<div class="form-group col-md-3">
			<label>Apellido Paterno:</label>
			<input class="form-control" type="text" name="apellidop" onkeypress="return soloLetras(event)" 
                maxlength="25" minlength="1" value="<?=$key->ApellidoP ?>">
<br>
            <label>Apellido Materno:</label>
			<input class="form-control" type="text" name="apellidom" onkeypress="return soloLetras(event)" 
                maxlength="25" minlength="1" value="<?=$key->ApellidoM ?>">

				
			</div>

			<div class="col-4"></div>
			<div class="form-group col-md-4">
			<input class="form-control btn btn-primary" type="submit" name="Enviar" onclick="return Confirmation()">
			</div>
		</div>
	</form>
	<?php endforeach ?>
</body>
</div>
<script type="text/javascript">
	function Confirmation() {
		if (confirm("Los Datos se han Corregido Correctamente")) {
			return true;
		} else{
			return false;
		}
	}
</script>
</html>