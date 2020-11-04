<!DOCTYPE html>
<html>
<head>
	<title>Editar Registro</title>
</head>
<div class="col-12">
	<body>
	<?php foreach ($alumnosolito as $key): ?>
		<form action="http://localhost:8084/Plantel/index.php/alumnos/updateAlumnos/<?=$key->idAlumno?>" 
        method="POST">

		<div align="center">
			<h4>Alumnos Inscritos en el Plantel</h4>
			<h5>Editar Registro del Alumno</h5>
			</div>
		
		<div class="form-group row">
			<div class="col-2"></div>
			<div class="form-group col-md-4">
				<label>Nombre</label>
				<input class="form-control" type="text" name="nombre" onkeypress="return numeros(event)" 
				maxlength="50" minlength="1" value="<?=$key->Nombre ?>">
<br>
				<label>Apellido Paterno</label>
				<input class="form-control" type="text" name="apellidop" onkeypress="return soloLetras(event)" 
				maxlength="25" minlength="1" value="<?=$key->ApellidoP ?>">
<br>
				<label>Apellido Materno</label>
				<input class="form-control" type="text" name="apellidom" onkeypress="return soloLetras(event)" 
				maxlength="25" minlength="1" value="<?=$key->ApellidoM ?>">
<br>
				<label>Matricula</label>
				<input class="form-control" type="text" name="matricula" onkeypress="return NumText(event)" 
				maxlength="13" minlength="1" value="<?=$key->Matricula ?>">

<br>

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

				</SELECT>
<br>
			</div>

			<div class="form-group col-md-4">
			<label>Capacitación Solicitada:</label>
			<select class="form-control" name="carrera" value="<?=$key->Carrera ?>">
			<option selected>Higine y Salud Comuitaria</option>
			<option selected>Diseño Arquitectónico</option>
			<option selected>Informática</option>
			<option selected>Producción Agropecuaria</option>
			<option selected>Contabilidad</option>
			<option selected>Tecnología de los Alimentos</option>
			</select>
<br>
			<label>Paraescolar Solicitada:</label>
			<select class="form-control" name="paraescolar" value="<?=$key->Paraescolar ?>">
			<option>Aerobics</option>
					<option>Banda Musical</option>
					<option>Banderolas y Descubiertas</option>
					<option>Basquetball</option>
					<option>Danza</option>
					<option>Futbol</option>
					<option>Karate</option>
					<option>Rondalla</option>
					<option>Vollibol</option>
			</select>
<br>

				<label>Nombre del Asesor:</label>
				<input class="form-control" type="text" name="nombrea" onkeypress="return soloLetras(event)" 
				maxlength="50" minlength="1" value="<?=$key->NombreA ?>">
<br>		

                <label>Apellido Paterno del Asesor:</label>
				<input class="form-control" type="text" name="apaterno" onkeypress="return soloLetras(event)" 
				maxlength="50" minlength="1" value="<?=$key->Apaterno ?>">
<br>

                <label>Apellido Materno del Asesor:</label>
				<input class="form-control" type="text" name="amaterno" onkeypress="return soloLetras(event)" 
				maxlength="50" minlength="1" value="<?=$key->Amaterno ?>">
<br>		
			</div>
			<div class="col-6"></div>
			<div class="form-group col-md-4">
				<input class="form-control btn btn-primary" type="submit" name="Enviar" onclick="return 
				Confirmation()">
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