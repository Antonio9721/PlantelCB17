<!DOCTYPE html>
<html>
<head>
	<title>Reportar Alumno</title>
</head>
<div class="col-12">
	<body>
	<form action="http://localhost:8084/Plantel/index.php/reportes/create" method="POST" onsubmit="return 
    validarFormulario()">
		<div align="center">
			<h4>Reportar Alumno</h4></div>
			<div class="form-group row">
			<div class="col-2"></div>
			<div class="form-group col-md-4 ">
			    <label>Nombre:</label>
			     <input id="nombre" class="form-control" type="text" name="nombre" onkeypress="return soloLetras(event)" maxlength="45" minlength="1">
<br>
				<label>Apellido Paterno:</label>
				<input id="apellidop" class="form-control" type="text" name="apellidop" onkeypress="return 
                soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="30" minlength="1">
<br>
				<label>Apellido Materno:</label>
				<input id="apellidom" class="form-control" type="text" name="apellidom" onkeypress="return 
                soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="30" minlength="1">
<br>				
				<label>Matricula:</label>
				<input id="matricula" class="form-control" type="text" name="matricula" onkeypress="return 
                NumText(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="14" minlength="1">
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

               <div class="form-group col-md-4 ">
		        <label>Reporte:</label>
				<input id="reporte" class="form-control" type="text" name="reporte" onkeypress="return 
                soloLetra(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="150" minlength="1">
<br>
                <label>Castigo:</label>
				<input id="castigo" class="form-control" type="text" name="castigo" onkeypress="return 
                soloLetra(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="150" minlength="1">
<br>
                <label>Acuerdo:</label>
				<input id="acuerdo" class="form-control" type="text" name="acuerdo" onkeypress="return 
                soloLetra(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="150" minlength="1">
<br>
                <label>Fecha del Reporte:</label>
				<input id="fecha" class="form-control" type="date" name="fecha" onkeypress="return 
                soloLetra(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="4" minlength="1">
<br>
                <label>Hora del Reporte:</label>
				<input id="hora" class="form-control" type="time" name="hora" onkeypress="return 
                soloLetra(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="" minlength="1">
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
		var txtGrupo= document.getElementById('grupo').value;
		var txtReporte= document.getElementById('reporte').value;
		var txtCastigo= document.getElementById('castigo').value;
		var txtAcuerdo= document.getElementById('acuerdo').value;
		var txtFechaRep= document.getElementById('fecharep').value;
		var txtHoraRep= document.getElementById('horarep').value;
		var banderaRBTN = false;

		 if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtApellidoP == null || txtApellidoP.length == 0 || /^\s+$/.test(txtApellidoP)){
            alert('ERROR: El campo apellido parterno no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtApellidoM == null || txtApellidoM.length == 0 || /^\s+$/.test(txtApellidoM)){
            alert('ERROR: El campo apellido materno no debe ir vacío o lleno de solamente espacios en blanco');
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
		  if(txtReporte == null || txtReporte.length == 0 || /^\s+$/.test(txtReporte)){
            alert('ERROR: El campo reporte no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtCastigo == null || txtCastigo.length == 0 || /^\s+$/.test(txtCastigo)){
            alert('ERROR: El campo castigo no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtAcuerdo == null || txtAcuerdo.length == 0 || /^\s+$/.test(txtAcuerdo)){
            alert('ERROR: El campo acuerdo no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          
          }

		  if(txtFechaRep == null || txtFechaRep.length == 0 || /^\s+$/.test(txtFechaRep)){
            alert('ERROR: El campo fecha no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          
          }

		  if(txtHoraRep == null || txtHoraRep.length == 0 || /^\s+$/.test(txtHoraRep)){
            alert('ERROR: El campo hora no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          
          }
         return true;
	}
</script>
</html>
