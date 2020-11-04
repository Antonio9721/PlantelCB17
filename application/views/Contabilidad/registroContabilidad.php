<!DOCTYPE html>
<html>
<head>
	<title>Contabilidad</title>
</head>
<div class="col-12">
	<body>
	<form action="http://localhost:8084/Plantel/index.php/contabilidad/create" method="POST" onsubmit="return 
	validarFormulario()">
		<div align="center">
		<h4>Capacitación de Contabilidad</h4>
		<h5>Registrar Alumno</h5>
		</div>
		<div class="form-group row">
			<div class="col-2"></div>
			<div class="form-group col-md-4 ">
				<label>Nombre:</label>
				<input id="nombre" class="form-control" type="text" name="nombre" onkeypress="return 
				soloLetras(event)" maxlength="50" minlength="1">
<br>
				<label>Apellido Paterno:</label>
				<input id="apellidop" class="form-control" type="text" name="apellidop" onkeypress="return 
				soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="20" minlength="1">
<br>
				<label>Apellido Materno:</label>
				<input id="apellidom" class="form-control" type="text" name="apellidom" onkeypress="return 
				soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" minlength="1">
<br>
				<label>Matricula:</label>
				<input id="matricula" class="form-control" type="text" name="matricula" onkeypress="return
				 NumText(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="20" minlength="1">
			</div>

			<div class="form-group col-md-4">
			<label>Semestre:</label>
				<SELECT id="semestre" class="form-control"  name="semestre">
				    <option>Elige una Opción...</option>
					

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
				<input id="materia1" class="form-control" type="text" name="materia1" onkeypress="return 
				soloLetras(event)" maxlength="50">
				
<br>				<label>Materia de Apoyo 2:</label>
				<input id="materia2" class="form-control" type="text" name="materia2" onkeyup="this.value=soloLetras(this.value)">
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
		var txtAP= document.getElementById('apellidop').value;
		var txtAM= document.getElementById('apellidom').value;
		var txtMatricula= document.getElementById('matricula').value;
		var txtSemestre= document.getElementById('semestre').value;
		var txtGrupo= document.getElementById('grupo').value;
		var txtNombreDoc= document.getElementById('nombredoc').value;
		var txtApellidos= document.getElementById('apellidos').value;
		var banderaRBTN = false;

		 if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtAP == null || txtAP.length == 0 || /^\s+$/.test(txtAP)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtAM == null || txtAM.length == 0 || /^\s+$/.test(txtAM)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtMatricula == null || txtMatricula.length == 0 || /^\s+$/.test(txtMatricula)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtSemestre == null || txtSemestre.length == 0 || /^\s+$/.test(txtSemestre)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtGrupo == null || txtGrupo.length == 0 || /^\s+$/.test(txtGrupo)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtNombreDoc == null || txtNombreDoc.length == 0 || /^\s+$/.test(txtNombreDoc)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtApellidos == null || txtApellidos.length == 0 || /^\s+$/.test(txtApellidos)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
         return true;
	}
</script>
</html>