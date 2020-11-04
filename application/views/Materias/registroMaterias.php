<!DOCTYPE html>
<html>
<head>
	<title>Registrar Materia</title>
</head>
<div class="col-12">
	<body>
	<form action="http://localhost:8084/Plantel/index.php/materias/create" method="POST" onsubmit="return 
	validarFormulario()">
		<div align="center">
			<h3>Registrar Nueva Materia</h3></div>
			<br>
		<div class="form-group row">
			<div class="col-2"></div>
			<div class="form-group col-md-4 ">
				<label>Materia:</label>
				<input id="materia" class="form-control" type="text" name="materia" onkeypress="return 
				soloLetras(event)" maxlength="50" minlength="1">
<br>
				<label>Clave:</label>
				<input id="clavemat" class="form-control" type="text" name="clavemat" onkeypress="return 
				NumText(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="20" minlength="1">
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
                <div class="form-group col-md-4 ">		
				<label>Nombre del Docente:</label>
				<input id="nombredoc" class="form-control" type="text" name="nombredoc" onkeypress="return 
				soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" minlength="1">
<br>
				<label>Apellido Paterno:</label>
				<input id="apaterno" class="form-control" type="text" name="apaterno" onkeypress="return 
				soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" minlength="1">
<br>
                <label>Apellido Materno:</label>
				<input id="amaterno" class="form-control" type="text" name="amaterno" onkeypress="return 
				soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" minlength="1">

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
		var txtApellidoP= document.getElementById('apellidop').value;
		var txtApellidoM= document.getElementById('apellidom').value;
		var txtEspecialidad= document.getElementById('especialidad').value;
		var txtMatricula= document.getElementById('matricula').value;
		var txtCarrera= document.getElementById('carrera').value;
		var txtSemestre= document.getElementById('semestre').value;
		var txtGrupo= document.getElementById('grupo').value;
		var txtCorreoIns= document.getElementById('correoins').value;
		var banderaRBTN = false;

		 if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtApellidoP == null || txtApellidoP.length == 0 || /^\s+$/.test(txtApellidoP)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtApellidoM == null || txtApellidoM.length == 0 || /^\s+$/.test(txtApellidoM)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtEspecialidad == null || txtEspcialidad.length == 0 || /^\s+$/.test(txtEspecialidad)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
          if(txtMatricula == null || txtMatricula.length == 0 || /^\s+$/.test(txtMatricula)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
          if(txtCarrera == null || txtCarrera.length == 0 || /^\s+$/.test(txtCarrera)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
		  if(txtSemestre == null || txtSemestre.length == 0 || /^\s+$/.test(txtSemestre)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtGrupo == null || txtGrupo.length == 0 || /^\s+$/.test(txtGrupoAsig)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtCorreoIns == null || txtCorreoIns.length == 0 || /^\s+$/.test(txtCorreoIns)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          
          }
         return true;
	}
</script>
</html>
