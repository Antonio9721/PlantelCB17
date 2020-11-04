<!DOCTYPE html>
<html>
<head>
	<title>Editar Registro</title>
</head>
<div class="col-12">
	<body>
	<?php foreach ($bandasolito as $key): ?>
		<form action="http://localhost:8084/Plantel/index.php/banda/updateBanda/<?=$key->idBanda?>" 
		method="POST">
		<div class="form-group row">
			<div class="col-2"></div>
			<div class="form-group col-md-4">
				<label>Nombre</label>
				<input class="form-control" type="text" name="nombre" onkeypress="return numeros(event)" 
				maxlength="20" minlength="1" value="<?=$key->Nombre ?>">
<br>
				<label>Apellido Paterno</label>
				<input class="form-control" type="text" name="apaterno" onkeypress="return soloLetras(event)" 
				maxlength="20" minlength="1" value="<?=$key->Apaterno ?>">
<br>
				<label>Apellido Materno</label>
				<input class="form-control" type="text" name="amaterno" onkeypress="return soloLetras(event)" 
				maxlength="20" minlength="1" value="<?=$key->Amaterno ?>">
<br>
				<label>Matricula</label>
				<input class="form-control" type="text" name="matricula" onkeypress="return NumText(event)" 
				maxlength="13" minlength="1" value="<?=$key->Matricula ?>">
			</div>

			<div class="form-group col-md-4">
			<label>Semestre:</label>
			        <SELECT id="semestre" class="form-control"  name="semestre">
					<option>Primero A</option>
					<option>Primero B</option>
					<option>Primero C</option>
					<option>Primero D</option>
					<option>Primero E</option>
					<option>Primero F</option>

					<option>Segundo A</option>
					<option>Segundo B</option>
					<option>Segundo C</option>
					<option>Segundo D</option>
					<option>Segundo E</option>
					<option>Segundo F</option>

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

				<label>Inicio de la Clase:</label>
				<input class="form-control" type="time" name="hinicio" value="<?=$key->Hinicio ?>">
<br>
				<label>Fin de la Clase:</label>
				<input class="form-control" type="time" name="hfin" value="<?=$key->Hfin ?>">
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