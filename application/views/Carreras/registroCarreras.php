<!DOCTYPE html>
<html>
<head>
	<title>Capacitaciones</title>
	
</head>
<div class="col-12">
	<body>
	<form action="http://localhost:8084/Plantel/index.php/carreras/create" method="POST" 
    onsubmit="return validarFormulario()">
		<div align="center">
			<h5>Capacitaciones Ofertadas</h5>
			<h6>Registrar Nueva Capacitación</h6>
			</div>

		<div class="form-group row">
			<div class="col-2"></div>
			<div class="form-group col-md-3 ">
            <label>Nombre de la Capacitación:</label>
				<SELECT id="carrera" class="form-control"  name="carrera">
				    <option>Elige una Opción...</option>
					<option>Higiene y Salud Comunitaria</option>
					<option>Diseño Arquitectonico</option>
					<option>Informática</option>
					<option>Producción Agropecuaria</option>
					<option>Contabilidad</option>
					<option>Tecnología de los Alimentos</option>
				</SELECT>
<br>

    <label>Clave de la Capacitación:</label>
	<input id="clave" class="form-control" type="text" name="clave" onkeypress="return 
	NumText(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="13" minlength="1">
<br>

	<label>Nombre del Docente:</label>
	<input id="nombred" class="form-control" type="text" name="nombred" onkeypress="return soloLetras(event)" 
	maxlength="20" minlength="1">
	</div>

    <div class="col-2"></div>
		<div class="form-group col-md-3 ">
		<label>Apellido Paterno:</label>
		<input id="apellidop" class="form-control" type="text" name="apellidop"onkeypress="return 
		soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" minlength="1">
<br>
        <label>Apellido Materno:</label>
		<input id="apellidom" class="form-control" type="text" name="apellidom"onkeypress="return 
		soloLetras(event)" onkeyup="this.value=Mayusculas(this.value)" maxlength="25" minlength="1">
<br>
		
		</div>

		
		<div class="col-4"></div>
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
		var txtNombreCar= document.getElementById('nombrecar').value;
		var txtNombreD= document.getElementById('nombred').value;
		var txtApellidosD= document.getElementById('apellidosd').value;
		var txtClave= document.getElementById('clave').value;
		var banderaRBTN = false;

		 if(txtNombreCar == null || txtNombreCar.length == 0 || /^\s+$/.test(txtNombreCar)){
            alert('ERROR: El campo capacitacion no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtNombreD == null || txtNombreD.length == 0 || /^\s+$/.test(txtNombreD)){
            alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }

          if(txtApellidosD == null || txtApellidosD.length == 0 || /^\s+$/.test(txtApellidosD)){
            alert('ERROR: El campo apellidos no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
          if(txtClave == null || txtClave.length == 0 || /^\s+$/.test(txtClave)){
            alert('ERROR: El campo clave no debe ir vacío o lleno de solamente espacios en blanco');
            return false;
          }
         
         return true;
	}
</script>
</html>
