<!DOCTYPE html>
<html>
<head>
	<title>Alumnos de Nuevo Ingreso</title>
</head>
<body>
	<div>
		<div align="center">
		<h4>Alumnos de Nuevo Ingreso</h4>
		<h5>Registro de Aspirantes</h5>
		</div>
		<div class="col-2" align="left">
			<a href="http://localhost:8084/Plantel/index.php/aspirantes/opencreate">
			<button class="btn btn-primary"><span class="fa fa-plus"></span> Agregar Aspirante</button></a>
		</div>

		<div class="card-body">
		<div class="table-responsive">
        <table class="table">
					<thead class="table-dark">
						<tr>
							<td>Id</td>
							<td>Nombre</td>
							<td>Apellido Paterno</td>
							<td>Apellido Materno</td>
							<td>CURP</td>
							<td>Fecha de Nacimiento</td>
							<td>Número Telefónico</td>
							<td>Correo Electrónico</td>
							
							<td>Capacitación Solicitada</td>
							<td>Paraescolar Solicitada</td>
							<td>Secundaria Procedente</td>
							<td>Dialecto</td>
							<td>Discapacidad</td>
							<td>Fecha Registro</td>
							<td>Hora Registro</td>
							

							<td>Estado Federativo</td>
							<td>Municipio</td>
							<td>Código Postal </td>
							<td>Comunidad</td>
							<td>Nombre Calle</td>
							<td>Número Exterior</td>
							<td>Número Interior</td>
						
							<td>Nombre del Tutor</td>
							<td>Apellido Paterno</td>
							<td>Apellido Materno</td>
							<td>Número Teléfono</td>
							<td>Escolaridad</td>
							<td>Ocupación Laboral</td>
							<td>Salario</td>
							

							<td>Editar</td>
							<td>Eliminar</td>
							
					
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datosAspirantes as $key):?>
							<tr>
								<td><?=$key->idAspirante ?></td>
								<td><?=$key->Nombre ?></td>
								<td><?=$key->ApellidoP ?></td>
								<td><?=$key->ApellidoM ?></td>
								<td><?=$key->Curp ?></td>
								<td><?=$key->Nacimiento ?></td>
								<td><?=$key->Ntelefono ?></td>
								<td><?=$key->Correo ?></td>
								<td><?=$key->Carrera ?></td>
								<td><?=$key->Paraescolar ?></td>
								<td><?=$key->Secundaria ?></td>
								<td><?=$key->Dialecto ?></td>
								<td><?=$key->Discapacidad ?></td>
								<td><?=$key->Fecha ?></td>
								<td><?=$key->Hora ?></td>
								<td><?=$key->Estado ?></td>
								<td><?=$key->Municipio ?></td>
								<td><?=$key->Codigo ?></td>
								<td><?=$key->Comunidad ?></td>
								<td><?=$key->Calle ?></td>
								<td><?=$key->NumeroE ?></td>
								<td><?=$key->NumeroI ?></td>
								<td><?=$key->NombreT ?></td>
								<td><?=$key->Apaterno ?></td>
								<td><?=$key->Amaterno ?></td>
								<td><?=$key->Telefono ?></td>
								<td><?=$key->Escolaridad ?></td>
								<td><?=$key->Ocupacion ?></td>
								<td><?=$key->Salario ?></td>
			
								<td> 
								<a href="http://localhost:8084/Plantel/index.php/aspirantes/findone/<?=$key->idAspirante ?>">
								<button class="form-control btn btn-success" onclick="return Edition()">Editar</button></a>
								</td>
								<td>
								<a href="http://localhost:8084/Plantel/index.php/aspirantes/delete/<?=$key->idAspirante ?>">
								<button class="form-control btn btn-danger" onclick="return Delete()">Eliminar</button></a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>


<script type="text/javascript">
	function Edition() {
		if (confirm("¿Desea Editar este Registro?")) {
			return true;
		}else{
			return false;
		}
	}
	function Delete(){
		if (confirm("¿Desea Eliminar este Registro?")) {
			return true;
		}else{
			return false;
		}
	}
</script>
</html>