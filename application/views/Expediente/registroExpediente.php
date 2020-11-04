<!DOCTYPE html>
<html>
<head>
	<title>Expedientes</title>
</head>
<div class="col-12">
	<body>
	<form action="http://localhost:8084/Plantel/index.php/expediente/create" method="POST" onsubmit="return 
	validarFormulario()">
		<div align="center"> 
			<h5>Expedientes de la Comunidad Estudiantil</h5>
			<h6>Registrar Alumno</h6>
		</div>

		<div class="form-group row">
		<div class="form-group col-md-3 ">
			<center>
			<h6>Datos Personales</h6>
			</center>
			    <label>Nombre:</label>
				<input id="nombre" class="form-control" type="text" name="nombre" onkeypress="return 
				soloLetras(event)" maxlength="50" minlength="1">
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
<br>
                <label>Capacitación:</label>
				<SELECT id="carrera" class="form-control"  name="carrera">
				    <option>Elige una Opción...</option>
					<option>Higiene y Salud Comunitaria</option>
					<option>Diseño Arquitectónico</option>
					<option>Informática</option>
					<option>Producción Agropecuaria</option>
					<option>Contabilidad</option>
					<option>Tecnología de los Alimentos</option>
				</SELECT>
</div>

            <div class="form-group col-md-3 ">
			<center>
			<h6>Datos Personales</h6>
			</center>                
				<label>Grupo Asignado:</label>
				<SELECT id="grupo" class="form-control"  name="grupo">
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
			<SELECT id="paraescolar" class="form-control"  name="paraescolar">
				    <option>Elige una Opción...</option>
					<option>Banda Musical</option>
					<option>Futbol</option>
					<option>Rondalla</option>
					<option>Danza</option>
					<option>Basquetball</option>
					<option>Volleball</option>
					<option>Aerobics</option>
					<option>Karate</option>
				</SELECT>
<br>
                
                <label>Correo Electrónico:</label>
				<input id="correro" class="form-control" type="text" name="correo" onkeypress="return 
				NumText(event)" maxlength="20">
<br>
                <label>Número Teléfonico:</label>
				<input id="telefono" class="form-control" type="text" name="telefono" onkeypress="return 
				NumText(event)" maxlength="12">
<br>
                <label>CURP:</label>
				<input id="curp" class="form-control" type="text" name="curp" onkeypress="return NumText(event)" 
				onkeyup="this.value=Mayusculas(this.value)" maxlength="18" minlength="1">

</div>
            <div class="form-group col-md-3 ">
			<center>
			<h6>Datos Personales</h6>
			</center>
                <label>RFC:</label>
				<input id="rfc" class="form-control" type="text" name="rfc" onkeypress="return NumText(event)" 
				maxlength="13">
<br>		
				<label>Municipio:</label>
				<input id="municipio" class="form-control" type="text" name="municipio" onkeypress="return 
				soloLetras(event)" maxlength="50">
<br>

                <label>Comunidad:</label>
				<input id="comunidad" class="form-control" type="text" name="comunidad" onkeypress="return 
				soloLetras(event)" maxlength="50">
<br>
               
				<label>Nombre de la Calle:</label>
				<input id="callenom" class="form-control" type="text" name="callenom" onkeypress="return 
				NumText(event)" maxlength="40">

<br>
                <label>Nùmero de la Calle:</label>
				<input id="callenum" class="form-control" type="text" name="callenum" onkeypress="return
				 NumText(event)" maxlength="12">
</div>
            <div class="form-group col-md-3 ">
			<center>
			<h6>Datos Personales</h6>
			</center>
                <label>Nombre del Tutor:</label>
				<input id="tutor" class="form-control" type="text" name="tutor" onkeypress="return
				 sololetras(event)" maxlength="45">
<br>
                <label>Apellidos del Tutor:</label>
				<input id="tutorap" class="form-control" type="text" name="tutorap" onkeypress="return
				 sololetras(event)" maxlength="45">
<br>
				<label>Número Teléfonico:</label>
				<input id="tutortel" class="form-control" type="text" name="tutortel" onkeypress="return
				 NumText(event)" maxlength="12">
<br>
				<label>Nombre del Asesor:</label>
				<input id="docente" class="form-control" type="text" name="docente" onkeypress="return 
				soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" minlength="1">
<br>
                <label>Apellidos del Asesor:</label>
				<input id="apellidosd" class="form-control" type="text" name="apellidosd" onkeypress="return 
				soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="30" minlength="1">
</div>
      
			<div class="col-8"></div>
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
		var txtCURP= document.getElementById('curp').value;
		var txtRFC= document.getElementById('rfc').value;
		var txtCorreo= document.getElementById('correo').value;
		var txtTelefono= document.getElementById('telefono').value;
		var txtTutor= document.getElementById('tutor').value;
		var txtTutorAp= document.getElementById('tutorap').value;
		var txtTutorTel= document.getElementById('tutortel').value;
		var txtGrupo= document.getElementById('grupo').value;
		var txtMatricula= document.getElementById('matricula').value;
		var txtCarrera= document.getElementById('carrera').value;
		var txtParaescolar= document.getElementById('paraescolar').value;
		var txtDocente= document.getElementById('docente').value;
		var txtApellidosD= document.getElementById('apellidosd').value;
		var txtMunicipio= document.getElementById('municipio').value;
		var txtComunidad= document.getElementById('comunidad').value;
		var txtCalleNom= document.getElementById('callenom').value;
		var txtCalleNum= document.getElementById('callenum').value;
		var banderaRBTN = false;

		 if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtApellidoP == null || txtApellidoP.length == 0 || /^\s+$/.test(txtApellidoP)){
            alert('ERROR: El campo apellido paterno no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtApellidoM == null || txtApellidoM.length == 0 || /^\s+$/.test(txtApellidoM)){
            alert('ERROR: El campo apellido materno no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtCURP == null || txtCURP.length == 0 || /^\s+$/.test(txtCURP)){
            alert('ERROR: El campo curp no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtRFC == null || txtRFC.length == 0 || /^\s+$/.test(txtRFC)){
            alert('ERROR: El campo rfc no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtCorreo == null || txtCorreo.length == 0 || /^\s+$/.test(txtCorreo)){
            alert('ERROR: El campo correo electrónico no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtTelefono == null || txtTelefono.length == 0 || /^\s+$/.test(txtTelefono)){
            alert('ERROR: El campo teléfono no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtTutor == null || txtTutor.length == 0 || /^\s+$/.test(txtTutorN)){
            alert('ERROR: El campo nombre del tutor no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtTutorAp == null || txtTutorAp.length == 0 || /^\s+$/.test(txtTutorAp)){
            alert('ERROR: El campo apellidos del tutor no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtTutorTel == null || txtTutorTel.length == 0 || /^\s+$/.test(txtTutorTel)){
            alert('ERROR: El campo teléfono del tutor no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtGrupo == null || txtGrupo.length == 0 || /^\s+$/.test(txtGrupo)){
            alert('ERROR: El campo Grupo no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtMatricula == null || txtMatricula.length == 0 || /^\s+$/.test(txtMatricula)){
            alert('ERROR: El campo Matricula no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtCarrera == null || txtCarrera.length == 0 || /^\s+$/.test(txtCarrera)){
            alert('ERROR: El campo Capacitación no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtParaescolar == null || txtParaescolar.length == 0 || /^\s+$/.test(txtParaescolar)){
            alert('ERROR: El campo Paraescolar no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtDocente == null || txtDocente.length == 0 || /^\s+$/.test(txtDocente)){
            alert('ERROR: El campo Nombre del Docente no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtApellidosD == null || txtApellidosD.length == 0 || /^\s+$/.test(txtApellidosD)){
            alert('ERROR: El campo Apellidos del Docente no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtMunicipio == null || txtMunicipio.length == 0 || /^\s+$/.test(txtMunicipio)){
            alert('ERROR: El campo municipio no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtComunidad == null || txtComunidad.length == 0 || /^\s+$/.test(txtComunidad)){
            alert('ERROR: El campo comunidad no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtCalleNom == null || txtCalleNom.length == 0 || /^\s+$/.test(txtCalleNom)){
            alert('ERROR: El campo nombre de la calle no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtCalleNum == null || txtCalleNum.length == 0 || /^\s+$/.test(txtCalleNum)){
            alert('ERROR: El campo número de la calle no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }


		  

          
          if(txtAsesorNom == null || txtAsesorNom.length == 0 || /^\s+$/.test(txtAsesorNom)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtAsesorAp == null || txtAsesorAp.length == 0 || /^\s+$/.test(txtAsesorAp)){
            alert('ERROR: El campo apellidos no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtPromedio == null || txtPromedio.length == 0 || /^\s+$/.test(txtPromedio)){
            alert('ERROR: El campo promedio no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
         return true;
	}
</script>
</html>