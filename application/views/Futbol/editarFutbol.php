<!DOCTYPE html>
<html>
<head>
	<title>Agregar Alumno</title>
</head>
<div class="col-12">
	<body>
	<form action="http://localhost:8084/Plantel/index.php/futbol/create" method="POST" 
	onsubmit="return validarFormulario()">
			<br> 	<br> 	<br>
		<div align="center">
		<h4>Paraescolar de Futbol</h4>
		<h5>Registrar Alumno</h5>
		</div>
		<div class="form-group row">
			<div class="col-2"></div>
			<div class="form-group col-md-4 ">
				<label>Nombre:</label>
				<input id="nombre" class="form-control" type="text" name="nombre" onkeypress="return 
				soloLetras(event)" maxlength="25" minlength="1">
<br>
				<label>Apellido Paterno:</label>
				<input id="apaterno" class="form-control" type="text" name="apaterno" onkeypress="return 
				soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" minlength="1">
<br>
                <label>Apellido Materno:</label>
				<input id="amaterno" class="form-control" type="text" name="amaterno" onkeypress="return 
				soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" minlength="1">
<br>
				<label>Matricula:</label>
				<input id="matricula" class="form-control" type="text" name="matricula" onkeypress="return 
				NumText(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="13" minlength="1">
</div>
				
			<div class="form-group col-md-4">
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
<br>				
			<label>Inicio de la Clase:</label>
			<input id="hinicio" class="form-control" type="time" name="hinicio" onkeypress="return soloLetras(event)"
			 maxlength="25">
<br>

			<label>Fin de la Clase:</label>
			<input id="hfin" class="form-control" type="time" name="hfin" onkeypress="return soloLetras(event)"
			 maxlength="25">
				
			</div>
			<div class="col-6"></div>
			<div class="form-group col-md-2">
				<input class="form-control btn btn-primary" type="submit" name="Enviar" onclick="return Confirmation()">
			</div>
			<div class="form-group col-md-2">
				<input class="form-control btn btn-danger" type="reset" name="Restablecer">
			</div>
		</div>
	</form>
</body>
</div>
<script type="text/javascript">
	function Confirmation() {
		if (confirm("Verifique correctamente los Datos antes de Enviar")) {
			return true;
		}else{
			return false;
		}
	}
</script>
<script type="text/javascript">
	function validarFormulario() {
		var txtNombre= document.getElementById('nombre').value;
		var txtApellidos= document.getElementById('apellidos').value;
		var txtMatricula= document.getElementById('matricula').value;
		var txtGrupo= document.getElementById('grupo').value;
		var txtMateria1= document.getElementById('materia1').value;
		var txtMateria2= document.getElementById('materia2').value;
		var txtidDocente= document.getElementById('iddocente').value;
		var banderaRBTN = false;

		 if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtApellidos == null || txtAP.length == 0 || /^\s+$/.test(txtApellidos)){
            alert('ERROR: El campo apellidos no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtMatricula == null || txtMatricula.length == 0 || /^\s+$/.test(txtMatricula)){
            alert('ERROR: El campo matricula no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtGrupo == null || txtGrupo.length == 0 || /^\s+$/.test(txtGrupo)){
            alert('ERROR: El campo grupo no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtMateria1 == null || txtMateria1.length == 0 || /^\s+$/.test(txtMateria1)){
            alert('ERROR: El campo materia1 no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtMateria2 == null || txtMateria2.length == 0 || /^\s+$/.test(txtMateria2)){
            alert('ERROR: El campo materia2 no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtidDocente == null || txtidDocente.length == 0 || /^\s+$/.test(txtidDocente)){
            alert('ERROR: El campo idDocente no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

         return true;
	}
</script>
</html>