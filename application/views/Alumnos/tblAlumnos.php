<!DOCTYPE html>
<html>
<head>
	<title>Alumnos Inscritos</title>
</head>
<body>
	<div>
		<div align="center">
		<h4>Alumnos Inscritos en el Plantel</h4>
		<h5>Registro de Alumnos</h5>
		</div>
		<div class="col-2" align="left">
			<a href="http://localhost:8084/Plantel/index.php/alumnos/opencreate">
			<button class="btn btn-primary"><span class="fa fa-plus"></span> Agregar Alumno</button></a>
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
							<td>Matricula</td>
							<td>Semestre</td>
							<td>Capacitación</td>
							<td>Paraescolar</td>
							<td>Asesor</td>
							<td>Apellido Paterno</td>
							<td>Apellido Materno</td>
							
							<td>Editar</td>
							<td>Eliminar</td>
							
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datosAlumnos as $key):?>
							<tr>
								<td><?=$key->idAlumno ?></td>
								<td><?=$key->Nombre ?></td>
								<td><?=$key->ApellidoP ?></td>
								<td><?=$key->ApellidoM ?></td>
								<td><?=$key->Matricula ?></td>
								<td><?=$key->Semestre ?></td>
								<td><?=$key->Carrera ?></td>
								<td><?=$key->Paraescolar ?></td>
								<td><?=$key->NombreA ?></td>
								<td><?=$key->Apaterno ?></td>
								<td><?=$key->Amaterno ?></td>
			
								<td> 
								<a href="http://localhost:8084/Plantel/index.php/alumnos/findone/<?=$key->idAlumno?>">
								<button class="form-control btn btn-success" onclick="return Edition()">Editar</button></a>
								</td>
								<td>
								<a href="http://localhost:8084/Plantel/index.php/alumnos/delete/<?=$key->idAlumno ?>">
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