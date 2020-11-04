<!DOCTYPE html>
<html>
<head>
	<title>Editar Registro</title>
</head>
<div class="col-12">
	<body>
	<?php foreach ($alimentosolito as $key): ?>
		<form action="http://localhost:8084/Plantel/index.php/alimentos/updateAlimentos/<?=$key->idAlim?>" 
		method="POST">
		<div align="center">
		<h4>Capacitación en Tecnología de los Alimentos</h4>
		<h5>Editar Registro del Alumno</h5>
	</div>
		<div class="form-group row">
			<div class="col-2"></div>
			<div class="form-group col-md-4">
				<label>Nombre</label>
				<input class="form-control" type="text" name="nombre" onkeypress="return numeros(event)" maxlength="50"
				 minlength="1" value="<?=$key->Nombre ?>">

<br>
				<label>Apellido Paterno</label>
				<input class="form-control" type="text" name="apellidop" onkeypress="return soloLetras(event)" maxlength="25"
				minlength="1" value="<?=$key->ApellidoP ?>">
<br>
				<label>Apellido Materno</label>
				<input class="form-control" type="text" name="apellidom" onkeypress="return soloLetras(event)" maxlength="25"
				minlength="1" value="<?=$key->ApellidoM ?>">
<br>
				<label>Matricula</label>
				<input class="form-control" type="text" name="matricula" onkeypress="return NumText(event)" maxlength="13"
				 minlength="1" value="<?=$key->Matricula ?>">
			</div>

			<div class="form-group col-md-4">
			<label>Semestre:</label>
			        <SELECT id="semestre" class="form-control"  name="semestre">
					<option>Tercero A</option>
					<option>Tercero B</option>
					<option>Tercero C</option>
					<option>Tercero D</option>
					<option>Tercero E</option>
					<option>Tercero F</option>

					<option>Cuarto A</option>
					<option>Cuarto B</option>
					<option>Cuarto C</option>
					<option>Cuarto D</option>
					<option>Cuarto E</option>
					<option>Cuarto F</option>

					<option>Quinto A</option>
					<option>Quinto B</option>
					<option>Quinto C</option>
					<option>Quinto D</option>
					<option>Quinto E</option>
					<option>Quinto F</option>

					<option>Sexto A</option>
					<option>Sexto B</option>
					<option>Sexto C</option>
					<option>Sexto D</option>
					<option>Sexto E</option>
					<option>Sexto F</option>
				</SELECT>
<br>
				
				<label>Materia de Apoyo 1:</label>
				<input class="form-control" type="text" name="materia1" value="<?=$key->Materia1 ?>">
				
				<label>Materia de Apoyo 2:</label>
				<input class="form-control" type="text" name="materia2" value="<?=$key->Materia2 ?>">
			</div>
			<div class="col-6"></div>
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