<!DOCTYPE html>
<html>
<head>
	<title>Alumnos de Inscritos</title>
</head>
<div class="col-12">
	<body>
	<form action="http://localhost:8084/Plantel/index.php/alumnos/create" method="POST" onsubmit="return 
	validarFormulario()">
		<div align="center">
			<h4>Alumnos Inscritos en el Plantel</h4>
			<h5>Registrar Alumno</h5>
			</div>

		<div class="form-group row">
			<div class="col-2"></div>
			<div class="form-group col-md-4 ">
				<label>Nombre:</label>
				<input id="nombre" class="form-control" type="text" name="nombre" onkeypress="return 
				soloLetras(event)" maxlength="30" minlength="1">
<br>
				<label>Apellido Paterno:</label>
				<input id="apellidop" class="form-control" type="text" name="apellidop" onkeypress="return 
				soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" minlength="1">
<br>

                <label>Apellido Materno:</label>
				<input id="apellidom" class="form-control" type="text" name="apellidom" onkeypress="return 
				soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" minlength="1">
<br>
				<label>Matricula:</label>
				<input id="matricula" class="form-control" type="text" name="matricula" onkeypress="return 
				NumText(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="13" minlength="1">
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

				</SELECT>
				
<br>
				
			</div>
			
			<div class="form-group col-md-4">
			<label>Capacitación Solicitada:</label>
			<SELECT id="carrera" class="form-control"  name="carrera">
				    <option>Elige una Opción...</option>
					<option>Higiene y Salud Comunitaria</option>
					<option>Diseño Arquitectónico</option>
					<option>Informática</option>
					<option>Producción Agropecuaria</option>
					<option>Contabilidad</option>
					<option>Tecnología de los Alimentos</option>
				</SELECT>
<br>
			<label>Paraescolar Solicitada:</label>
			<SELECT id="paraescolar" class="form-control"  name="paraescolar">
				    <option>Elige una Opción...</option>
					<option>Aerobics</option>
					<option>Banda Musical</option>
					<option>Banderolas y Descubiertas</option>
					<option>Basquetball</option>
					<option>Danza</option>
					<option>Futbol</option>
					<option>Karate</option>
					<option>Rondalla</option>
					<option>Vollibol</option>
				</SELECT>

<br>
			
			<label>Nombre del Asesor:</label>
			<input id="nombrea" class="form-control" type="text" name="nombrea" onkeypress="return 
			soloLetras(event)" maxlength="50">

<br>

            <label>Apellido Paterno del Asesor:</label>
			<input id="apaterno" class="form-control" type="text" name="apaterno" onkeypress="return 
			soloLetras(event)" maxlength="50">

 <br>          
            <label>Apellido Materno del Asesor:</label>
			<input id="amaterno" class="form-control" type="text" name="amaterno" onkeypress="return 
			soloLetras(event)" maxlength="50">

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
		var txtMatricula= document.getElementById('matricula').value;
		var txtCapacitacion= document.getElementById('capacitacion').value;
		var txtParaescolar= document.getElementById('paraescolar').value;
		var txtSemestre= document.getElementById('semestre').value;
		var txtGrupo= document.getElementById('grupo').value;
		var txtNombreA= document.getElementById('nombrea').value;
		var txtApellidosA= document.getElementById('apellidosa').value;
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

          if(txtMatricula == null || txtMatricula.length == 0 || /^\s+$/.test(txtMatricula)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
          if(txtCapacitacion == null || txtCapacitacion.length == 0 || /^\s+$/.test(txtCapacitacion)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
		  if(txtParaescolar == null || txtParaescolar.length == 0 || /^\s+$/.test(txtParaescolar)){
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

          if(txtNombreA == null || txtNombreA.length == 0 || /^\s+$/.test(txtNombreA)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtApellidosA == null || txtApellidosA.length == 0 || /^\s+$/.test(txtApellidosA)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
         return true;
	}
</script>
</html>
