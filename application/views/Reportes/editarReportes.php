<!DOCTYPE html>
<html>
<head>
	<title>Editar Registro</title>
</head>
   <center>
   	<h4>Editar Registro</h4>
   </center>
   <br>
<div class="col-12">
	<body>
	<?php foreach ($reportesolito as $key): ?>
		<form action="http://localhost:8084/Plantel/index.php/reportes/updateReportes/<?=$key->idReporte?>" 
        method="POST">
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
               
			</div>

			<div class="form-group col-md-4">
				<label>Reporte:</label>
				<input class="form-control" type="text" name="reporte" onkeypress="return soloLetras(event)" 
                maxlength="150" value="<?=$key->Reporte ?>">
<br>
				<label>Castigo:</label>
				<input class="form-control" type="text" name="castigo" onkeypress="return soloLetras(event)" 
                maxlength="150" value="<?=$key->Castigo ?>">
<br>
				<label>Acuerdo:</label>
				<input class="form-control" type="text" name="acuerdo" onkeypress="return soloLetras(event)" 
                maxlength="150" value="<?=$key->Acuerdo ?>">
<br>
                <label>Fecha del Reporte:</label>
				<input class="form-control" type="date" name="fecha" onkeypress="return soloLetras(event)" 
                maxlength="4" value="<?=$key->Fecha ?>">
<br>
				<label>Hora del Reporte:</label>
				<input class="form-control" type="time" name="hora" onkeypress="return soloLetras(event)" 
                maxlength="" value="<?=$key->Hora ?>">
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