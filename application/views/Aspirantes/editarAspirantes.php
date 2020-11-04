<!DOCTYPE html>
<html>
<head>
	<title>Editar Registro</title>
</head>
<div class="col-12">
	<body>
	<?php foreach ($aspirantesolito as $key): ?>
		<form action="http://localhost:8084/Plantel/index.php/aspirantes/updateAspirantes/<?=$key->idAspirante?>" 
		method="POST">
		<div align="center">
			<h4>Editar Registro del Aspirante</h4>
			</div>
<br>
		<div class="form-group row">
			<div class="form-group col-md-3">
			<center>
			<h6>Datos Personales</h6>
			</center>
				<label>Nombre:</label>
				<input class="form-control" type="text" name="nombre" onkeypress="return soloLetras(event)" 
				maxlength="50" minlength="1" value="<?=$key->Nombre ?>">
<br>

				<label>Apellido Paterno:</label>
				<input class="form-control" type="text" name="apellidop" onkeypress="return soloLetras(event)" 
				maxlength="25" minlength="1" value="<?=$key->ApellidoP ?>">
<br>

                
				<label>Apellido Materno:</label>
				<input class="form-control" type="text" name="apellidom" onkeypress="return soloLetras(event)" 
				maxlength="25" minlength="1" value="<?=$key->ApellidoM ?>">
<br>

				<label>CURP:</label>
				<input class="form-control" type="text" name="curp" onkeypress="return soloLetras(event)" 
				maxlength="18" minlength="6" value="<?=$key->Curp ?>">
<br>

				<label>Fecha de Nacimiento:</label>
				<input class="form-control" type="date" name="nacimiento" onkeypress="return soloLetras(event)" 
				maxlength="4" minlength="1" value="<?=$key->Nacimiento ?>">
<br>

				<label>Número Telefónico:</label>
				<input class="form-control" type="int" name="ntelefono" onkeypress="return soloLetras(event)" 
				maxlength="12" minlength="6" value="<?=$key->Ntelefono?>">
<br>

                
				<label>Correo Electrónico:</label>
				<input class="form-control" type="text" name="correo" onkeypress="return soloLetras(event)" 
				maxlength="25" minlength="6" value="<?=$key->Correo?>">
</div>

            <div class="form-group col-md-3">
			<center>
			<h6>Datos Escolares</h6>
			</center>
			<label>Secundaria Procedente:</label>
			<input class="form-control" type="text" name="secundaria" onkeypress="return soloLetras(event)" 
			maxlength="150" minlength="1" value="<?=$key->Secundaria ?>">
<br>

            <label>Habla Algún Dialecto (Si/No, Especifique):</label>
			<input class="form-control" type="text" name="dialecto" onkeypress="return soloLetras(event)" 
			maxlength="50" minlength="1" value="<?=$key->Dialecto ?>">
<br>

            <label>Sufre Discapacidad (Si/No, Especifique):</label>
			<input class="form-control" type="text" name="discapacidad" onkeypress="return soloLetras(event)" 
			maxlength="50" minlength="1" value="<?=$key->Discapacidad ?>">
<br>

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
			<option>Banda Musical</option>
			<option>Futbol</option>
			<option>Rondalla</option>
			<option>Danza</option>
			<option>Basquetball</option>
			<option>Volleball</option>
			<option>Aerobics</option>
			<option>Karate</option>
			</select>
<br>

			<label>Fecha de Registro:</label>
			<input class="form-control" type="date" name="fecha" onkeypress="return date(event)" maxlength="4" 
			value="<?=$key->Fecha ?>">
<br>

			<label>Hora de Registro:</label>
			<input class="form-control" type="time" name="hora" value="<?=$key->Hora ?>">
</div>

			<div class="form-group col-md-3">
			<center>
			<h6>Dirección del Alumno</h6>
			</center>
			<label>Estado Federativo:</label>
			<input class="form-control" type="text" name="estado" value="<?=$key->Estado ?>">
<br>

			<label>Municipio:</label>
			<input class="form-control" type="text" name="municipio" value="<?=$key->Municipio ?>">
<br>

            <label>Código Postal:</label>
			<input class="form-control" type="text" name="codigo" value="<?=$key->Codigo ?>">
<br>

			<label>Comunidad:</label>
			<input class="form-control" type="text" name="comunidad" value="<?=$key->Comunidad ?>">
<br>

			<label>Nombre de la Calle:</label>
			<input class="form-control" type="text" name="calle" value="<?=$key->Calle ?>">
<br>

			<label>Número Exterior:</label>
			<input class="form-control" type="int" name="numeroe" value="<?=$key->NumeroE ?>">
<br>

            
			<label>Número Interior:</label>
			<input class="form-control" type="int" name="numeroi" value="<?=$key->NumeroI ?>">
</div>

	        <div class="form-group col-md-3">
			<center>
			<h6>Datos del Tutor</h6>
			</center>
			<label>Nombre:</label>
			<input class="form-control" type="text" name="nombret" value="<?=$key->NombreT ?>">
<br>

            <label>Apellido Paterno:</label>
			<input class="form-control" type="text" name="apaterno" value="<?=$key->Apaterno ?>">
<br>

            <label>Apellido Materno:</label>
			<input class="form-control" type="text" name="amaterno" value="<?=$key->Amaterno ?>">
<br>

			<label>Número Teléfonico:</label>
			<input class="form-control" type="int" name="telefono" value="<?=$key->Telefono ?>">
<br>

            <label>Nivel de Escolaridad:</label>
			<input class="form-control" type="text" name="escolaridad" value="<?=$key->Escolaridad ?>">
<br>

            <label>Ocupación Laboral:</label>
			<input class="form-control" type="text" name="ocupacion" value="<?=$key->Ocupacion ?>">
<br>

            <label>Salario Mensual:</label>
			<input class="form-control" type="text" name="salario" value="<?=$key->Salario ?>">
</div>

			<div class="col-8"></div>
			<div class="form-group col-md-3">
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