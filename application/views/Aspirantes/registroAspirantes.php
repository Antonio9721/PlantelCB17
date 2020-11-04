<!DOCTYPE html>
<html>
<head>
	<title>Alumnos de Nuevo Ingreso</title>
</head>
<div class="col-12">
	<body>
	<form action="http://localhost:8084/Plantel/index.php/aspirantes/create" method="POST" 
	onsubmit="return validarFormulario()">
		<div align="center">
			<h5>Registrar Alumno de Nuevo Ingreso</h5></div>
			
	<br>
		<div class="form-group row">
			<div class="form-group col-md-3 ">
			<center>
			<h6>Datos Personales</h6>
			</center>
				<label>Nombre:</label>
				<input id="nombre" class="form-control" type="text" name="nombre" 
				onkeypress="return soloLetras(event)" maxlength="50" minlength="1">
<br>
				<label>Apellido Paterno:</label>
				<input id="apellidop" class="form-control" type="text" name="apellidop" 
				onkeypress="return soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="20"
				 minlength="1">
<br>
                
				<label>Apellido Materno:</label>
				<input id="apellidom" class="form-control" type="text" name="apellidom" 
				onkeypress="return soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" 
				minlength="1">
<br>

				<label>CURP:</label>
				<input id="curp" class="form-control" type="text" name="curp" 
				onkeypress="return soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="18" 
				minlength="1">
<br>
                
                <label>Fecha de Nacimiento:</label>
				<input id="nacimiento" class="form-control" type="date" name="nacimiento" 
				onkeypress="return NumText(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="4" 
				minlength="1">
<br>

                <label>Número Telefónico:</label>
				<input id="ntelefono" class="form-control" type="int" name="ntelefono" 
				onkeypress="return soloNumeros(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="12" 
				minlength="1">
<br>

                <label>Correo Electrónico:</label>
				<input id="correo" class="form-control" type="text" name="correo" 
				onkeypress="return soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="30" 
				minlength="1">
</div>

    <div class="form-group col-md-3 ">
	<center>
	<h6>Datos Escolares</h6>
	</center>
	<label>Secundaria de Origen:</label>
	<input id="secundaria" class="form-control" type="text" name="secundaria" onkeypress="return 
	SoloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="250" minlength="1">
<br>

            <label>Habla Algún Dialecto (Si/No, Especifique):</label>
			<input id="dialecto" class="form-control" type="text" name="dialecto" onkeypress="return soloLetras(event)"
			maxlength="30">
<br>

            <label>Sufre Discapacidad (Si/No, Especifique):</label>
			<input id="discapacidad" class="form-control" type="text" name="discapacidad" onkeypress="return soloLetras(event)"
			maxlength="30">
<br>

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
           		
			<label>Fecha de Registro:</label>
			<input id="fecha" class="form-control" type="date" name="fecha" onkeypress="return soloLetras(event)"
			maxlength="8">
<br>

		    <label>Hora de Registro:</label>
			<input id="hora" class="form-control" type="time" name="hora" onkeypress="return soloLetras(event)" 
			maxlength="4">

</div>
            <div class="form-group col-md-3 ">
			<center>
	        <h6>Dirección del Alumno</h6>
	        </center>

			<label>Estado Federativo:</label>
			<input id="estado" class="form-control" type="text" name="estado" onkeypress="return soloLetras(event)" maxlength="80">
<br>

		    <label>Municipio:</label>
			<input id="municipio" class="form-control" type="text" name="municipio" onkeypress="return soloLetras(event)" maxlength="80">
<br>

            <label>Código Postal :</label>
			<input id="codigo" class="form-control" type="text" name="codigo" onkeypress="return soloLetras(event)" maxlength="12">
<br>

			<label>Comunidad:</label>
			<input id="comunidad" class="form-control" type="text" name="comunidad" onkeyup="this.value=soloLetras(this.value)">
<br>

            <label>Nombre de la Calle:</label>
			<input id="calle" class="form-control" type="text" name="calle" onkeyup="this.value=soloLetras(this.value)">
<br>

			<label>Número Exterior:</label>
			<input id="numeroe" class="form-control" type="int" name="numeroe" onkeyup="this.value=soloLetras(this.value)">
<br>

			<label>Número Interior:</label>
			<input id="numeroi" class="form-control" type="int" name="numeroi" onkeyup="this.value=soloLetras(this.value)">
</div>
			
			<div class="form-group col-md-3">
			<center>
	        <h6>Datos del Tutor</h6>
	        </center>
			<label>Nombre:</label>
			<input id="nombret" class="form-control" type="text" name="nombret" onkeyup="this.value=soloLetras(this.value)">
<br>

			<label>Apellido Paterno:</label>
			<input id="apaterno" class="form-control" type="text" name="apaterno" onkeyup="this.value=soloLetras(this.value)">
<br>

            <label>Apellido Materno:</label>
			<input id="amaterno" class="form-control" type="text" name="amaterno" onkeyup="this.value=soloLetras(this.value)">
<br>

			<label>Número Teléfonico:</label>
			<input id="telefono" class="form-control" type="int" name="telefono" onkeyup="this.value=soloLetras(this.value)">

<br>

            <label>Nivel de Escolaridad:</label>
			<input id="escolaridad" class="form-control" type="text" name="escolaridad" onkeyup="this.value=soloLetras(this.value)">
<br>

            <label>Ocupación Laboral:</label>
			<input id="ocupacion" class="form-control" type="text" name="ocupacion" onkeyup="this.value=soloLetras(this.value)">
<br>

            <label>Salario Mensual:</label>
			<input id="salario" class="form-control" type="text" name="salario" onkeyup="this.value=soloLetras(this.value)">
<br>


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
		var txtCurp= document.getElementById('curp').value;
		var txtNacimiento= document.getElementById('nacimiento').value;
		var txtNtelefono= document.getElementById('ntelefono').value;
		var txtCorreo= document.getElementById('correo').value;
		var txtCarrera= document.getElementById('carrera').value;
		var txtParaescolar= document.getElementById('paraescolar').value;
		var txtSecundaria= document.getElementById('secundaria').value;
		var txtDialecto= document.getElementById('dialecto').value;
		var txtDiscapacidad= document.getElementById('discapacidad').value;
		var txtFecha= document.getElementById('fecha').value;
		var txtHora= document.getElementById('hora').value;
		var txtEstado= document.getElementById('estado').value;
		var txtMunicipio= document.getElementById('municipio').value;
		var txtCodigo= document.getElementById('codigo').value;
		var txtComunidad= document.getElementById('comunidad').value;
		var txtCalle= document.getElementById('calle').value;
		var txtNumeroE= document.getElementById('numeroe').value;
		var txtNumeroI= document.getElementById('numeroi').value;
		var txtNombreT= document.getElementById('nombret').value;
		var txtApaterno= document.getElementById('apaterno').value;
		var txtAmaterno= document.getElementById('amaterno').value;
		var txtTelefono= document.getElementById('telefono').value;
		var txtEscolaridad= document.getElementById('escolaridad').value;
		var txtOcupacio= document.getElementById('ocupacion').value;
		var txtSalario= document.getElementById('salario').value;
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

		  if(txtCurp == null || txtCurp.length == 0 || /^\s+$/.test(txtCurp)){
            alert('ERROR: El campo curp no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtNacimiento == null || txtNacimiento.length == 0 || /^\s+$/.test(txtNacimiento)){
            alert('ERROR: El campo fecha de nacimiento no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtNtelefono == null || txtNtelefono.length == 0 || /^\s+$/.test(txtNtelefono)){
            alert('ERROR: El campo número telefónico  no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtCorreo == null || txtCorreo.length == 0 || /^\s+$/.test(txtCorreo)){
            alert('ERROR: El campo e-mail no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtCarrera == null || txtCarrera.length == 0 || /^\s+$/.test(txtCarrera)){
            alert('ERROR: El campo capacitación solicitada no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtParaescolar == null || txtParaescolar.length == 0 || /^\s+$/.test(txtParaescolar)){
            alert('ERROR: El campo paraescolar solicitada no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtSecundaria == null || txtSecundaria.length == 0 || /^\s+$/.test(txtSecundaria)){
            alert('ERROR: El campo secundaria de origen no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtDialecto == null || txtDialecto.length == 0 || /^\s+$/.test(txtDialecto)){
            alert('ERROR: El campo dialecto de origen no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtDiscapacidad == null || txtDiscapacidad.length == 0 || /^\s+$/.test(txtDiscapacidad)){
            alert('ERROR: El campo discapacidad no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
      
          if(txtFecha == null || txtFecha.length == 0 || /^\s+$/.test(txtFecha)){
            alert('ERROR: El campo fecha de registro no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtHora == null || txtHora.length == 0 || /^\s+$/.test(txtHora)){
            alert('ERROR: El campo hora de registro no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtEstado == null || txtEstado.length == 0 || /^\s+$/.test(txtEstado)){
            alert('ERROR: El campo estado de origen no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtMunicipio == null || txtMunicipio.length == 0 || /^\s+$/.test(txtMunicipio)){
            alert('ERROR: El campo municipio no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtComunidad == null || txtComunidad.length == 0 || /^\s+$/.test(txtComunidad)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtCalle == null || txtCalle.length == 0 || /^\s+$/.test(txtCalle)){
            alert('ERROR: El campo nombre de la calle no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtNumeroE == null || txtNumeroE.length == 0 || /^\s+$/.test(txtNumeroE)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtNumeroI == null || txtNumeroI.length == 0 || /^\s+$/.test(txtNumeroI)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtNombreT == null || txtNombreT.length == 0 || /^\s+$/.test(txtNombreT)){
            alert('ERROR: El campo nombre del tutor no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtApaterno == null || txtApaterno.length == 0 || /^\s+$/.test(txtApaterno)){
            alert('ERROR: El campo apellido paterno no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtAmaterno == null || txtAmaterno.length == 0 || /^\s+$/.test(txtAmaterno)){
            alert('ERROR: El campo apellido materno no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
          if(txtTelefono == null || txtTelefono.length == 0 || /^\s+$/.test(txtTelefono)){
            alert('ERROR: El campo Número telefónico del tutor no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtEscolaridad == null || txtEscolaridad.length == 0 || /^\s+$/.test(txtEscolaridad)){
            alert('ERROR: El campo escolaridad de origen no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtOcupacion == null || txtOcupacion.length == 0 || /^\s+$/.test(txtOcupacion)){
            alert('ERROR: El campo ocupacion laboral de origen no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

		  if(txtSalario == null || txtSalario.length == 0 || /^\s+$/.test(txtSalario)){
            alert('ERROR: El campo salario de origen no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
         return true;
	}
</script>
</html>