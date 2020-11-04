<!DOCTYPE html>
<html>
<head>
	<title>Docentes Matriculados</title>
	
</head>
<div class="col-12">
	<body>
	<form action="http://localhost:8084/Plantel/index.php/docentes/create" method="POST" onsubmit="return 
	validarFormulario()">
		<div align="center">
			<h4>Docentes Matriculados en el Plantel</h4>
			<h5>Registrar Docente</h5>
			</div>

		<div class="form-group row">
			<div class="col-2"></div>
			<div class="form-group col-md-4 ">
				<label>Nombre:</label>
				<input id="nombre" class="form-control" type="text" name="nombre" 
				onkeypress="return soloLetras(event)" maxlength="50" minlength="1">
<br>
				<label>Apellido Paterno:</label>
				<input id="apellidop" class="form-control" type="text" name="apellidop" 
				onkeypress="return soloLetras(event)"  maxlength="25" minlength="1">
<br>		
                <label>Apellido Materno:</label>
				<input id="apellidom" class="form-control" type="text" name="apellidom" 
				onkeypress="return soloLetras(event)"  maxlength="25" minlength="1">
<br>				
				
				<label>Matricula:</label>
				<input id="matricula" class="form-control" type="text" name="matricula" 
				onkeypress="return NumText(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="13" minlength="1">
			</div>

			<div class="form-group col-md-4">
				<label>Grupo Asignado</label>
				<SELECT id="grupoa" class="form-control"  name="grupoa">
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

                <label>Especialidad:</label>
				<input id="especialidad" class="form-control" type="text" name="especialidad" 
				onkeypress="return soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" minlength="1">
<br>
				<label>Correo Institucional:</label>
				<input id="correo" class="form-control" type="text" name="correo" onkeyup="this.value=soloLetras(this.value)">
<br>
				<label>Número Teléfonico:</label>
				<input id="telefono" class="form-control" type="text" name="telefono" onkeyup="this.value=soloLetras(this.value)">

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
		var txtEspecialidad= document.getElementById('especialidad').value;
		var txtMatricula= document.getElementById('matricula').value;
		var txtCarrera= document.getElementById('carrera').value;
		var txtGrupo= document.getElementById('grupo').value;
		var txtCorreoIns= document.getElementById('correoins').value;
		var txtTelefonoD= document.getElementById('telefonod').value;
		var banderaRBTN = false;

		 if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtApellidos == null || txtApellidos.length == 0 || /^\s+$/.test(txtApellidos)){
            alert('ERROR: El campo apellidos no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtEspecialidad == null || txtEspcialidad.length == 0 || /^\s+$/.test(txtEspecialidad)){
            alert('ERROR: El campo especilidad no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
          if(txtMatricula == null || txtMatricula.length == 0 || /^\s+$/.test(txtMatricula)){
            alert('ERROR: El campo matricula no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
          if(txtCarrera == null || txtCarrera.length == 0 || /^\s+$/.test(txtCarrera)){
            alert('ERROR: El campo capacitacion no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
		  

          if(txtGrupo == null || txtGrupo.length == 0 || /^\s+$/.test(txtGrupoAsig)){
            alert('ERROR: El campo grupo no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtCorreoIns == null || txtCorreoIns.length == 0 || /^\s+$/.test(txtCorreoIns)){
            alert('ERROR: El campo correo no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          
          }

		  if(txtTelefonoD == null || txtTelefonoD.length == 0 || /^\s+$/.test(txtTelefonoD)){
            alert('ERROR: El campo telefono no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          
          }
         return true;
	}
</script>
</html>
