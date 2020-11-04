<!DOCTYPE html>
<html>
<head>
	<title>Editar Registro</title>
</head>
<div class="col-12">
	<body>
	<?php foreach ($expedientesolito as $key): ?>
		<form action="http://localhost:8084/Plantel/index.php/expediente/updateExpediente/<?=$key->idExpe?>" 
		method="POST">
		
		<br> <br> <br>
		<div align="center"> 
			<h5>Expedientes de la Comunidad Estudiantil</h5>
			<h6>Editar Registro</h6>
		</div>
<br>
		<div class="form-group row">
        <div class="form-group col-md-3">
			<center>
			<h5>Datos Personales</h5>
			</center>
				<label>Nombre:</label>
				<input class="form-control" type="text" name="nombre" onkeypress="return soloLetras(event)" 
				maxlength="50" minlength="1" value="<?=$key->Nombre ?>">
<br>

				<label>Apellido Paterno:</label>
				<input class="form-control" type="text" name="apaterno" onkeypress="return soloLetras(event)" 
				maxlength="25" minlength="1" value="<?=$key->Apaterno ?>">
<br>

				<label>Apellido Materno:</label>
				<input class="form-control" type="text" name="amaterno" onkeypress="return soloLetras(event)" 
				maxlength="25" minlength="1" value="<?=$key->Amaterno ?>">
<br>

                
				<label>Matricula:</label>
				<input class="form-control" type="text" name="matricula" onkeypress="return soloLetras(event)" 
				maxlength="25" minlength="1" value="<?=$key->Matricula ?>">
<br>

           
			<label>Capacitación:</label>
			<select class="form-control" name="carrera" value="<?=$key->Carrera ?>">
			<option selected>Higine y Salud Comuitaria</option>
			<option selected>Diseño Arquitectónico</option>
			<option selected>Informática</option>
			<option selected>Producción Agropecuaria</option>
			<option selected>Contabilidad</option>
			<option selected>Tecnología de los Alimentos</option>
			</select>
</div>

            <div class="form-group col-md-3">
			<center>
			<h5>Datos Personales</h5>
			</center>
            <label>Grupo Asignado:</label>
            <SELECT id="grupo" class="form-control"  name="grupo" value="<?$key->Grupo ?>">
				    <option>Elige una Opción...</option>
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

            <label>Paraescolar:</label>
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

                <label>Correo Electrónico:</label>
				<input class="form-control" type="text" name="correo" onkeypress="return soloLetras(event)" 
				maxlength="25" minlength="6" value="<?=$key->Correo?>">
<br>

                <label>Número Telefónico:</label>
				<input class="form-control" type="text" name="telefono" onkeypress="return soloLetras(event)" 
				maxlength="12" minlength="6" value="<?=$key->Telefono?>">
<br>

				<label>CURP:</label>
				<input class="form-control" type="text" name="curp" onkeypress="return soloLetras(event)" 
				maxlength="18" minlength="6" value="<?=$key->CURP ?>">
</div>

            <div class="form-group col-md-3 ">
			<center>
			<h5>Datos Personales</h5>
			</center>
			<label>RFC:</label>
			<input class="form-control" type="text" name="rfc" onkeypress="return soloLetras(event)" 
				maxlength="13" minlength="1" value="<?=$key->RFC ?>">
<br>

            <label>Municipio:</label>
			<input class="form-control" type="text" name="municipio" value="<?=$key->Municipio ?>">
<br>

            <label>Comunidad:</label>
			<input class="form-control" type="text" name="comunidad" value="<?=$key->Comunidad ?>">
<br>

            <label>Nombre de la Calle:</label>
			<input class="form-control" type="text" name="callenom" value="<?=$key->CalleNom ?>">
<br>

            <label>Número de la Calle:</label>
			<input class="form-control" type="int" name="callenum" value="<?=$key->CalleNum ?>">
</div>
			
            <div class="form-group col-md-3 ">
			<center>
			<h5>Datos Personales</h5>
			</center>
			<label>Nombre del Tutor:</label>
			<input class="form-control" type="text" name="tutor" value="<?=$key->Tutor ?>">
<br>

            <label>Apellidos del Tutor:</label>
			<input class="form-control" type="text" name="amaterno" value="<?=$key->Amaterno ?>">
<br>

			<label>Número Teléfonico:</label>
			<input class="form-control" type="int" name="telefono" value="<?=$key->Telefono ?>">
<br>

            <label>Nombre del Asesor:</label>
			<input class="form-control" type="text" name="docente" value="<?=$key->Docente ?>">
<br>

            <label>Apellidos del Asesor:</label>
			<input class="form-control" type="text" name="apellidosd" value="<?=$key->ApellidosD ?>">
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