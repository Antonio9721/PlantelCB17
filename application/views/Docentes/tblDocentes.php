<!DOCTYPE html>
<html>
<head>
	<title>Docentes</title>
</head>
<body>
	<div>
		<div align="center">
		<h4>Docentes Matriculados en el Plantel</h4>
		<h5>Registro de Asesores</h5>
		</div>
		<div class="col-2" align="left">
			<a href="http://localhost:8084/Plantel/index.php/docentes/opencreate">
			<button class="btn btn-primary"><span class="fa fa-plus"></span> Agregar Docente</button></a>
		</div>
		<div class="card-body">
			 <tr class="table-secondary">
				<table class="table " id="example1" width="100%" cellspacing="0">
					<thead class="table-dark">
						<tr>
							<td>Id</td>
							<td>Nombre</td>
							<td>Apellido Paterno</td>
							<td>Apellido Materno</td>
							<td>Matricula</td>
							<td>Grupo Asignado</td>
							<td>Especialidad</td>
							<td>Correo Institucional</td>
							<td>Número Teléfonico</td>
							
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datosDocentes as $key):?>
							<tr>
								<td><?=$key->idDocente ?></td>
								<td><?=$key->Nombre ?></td>
								<td><?=$key->ApellidoP ?></td>
								<td><?=$key->ApellidoM ?></td>
								<td><?=$key->Matricula ?></td>
								<td><?=$key->GrupoA ?></td>
								<td><?=$key->Especialidad ?></td>
								<td><?=$key->Correo ?></td>
								<td><?=$key->Telefono ?></td>
								
			
								<td> 
								<a href="http://localhost:8084/Plantel/index.php/docentes/findone/<?=$key->idDocente ?>"><button class="form-control btn btn-success" onclick="return Edition()">Editar</button></a>
								</td>
								<td>
								<a href="http://localhost:8084/Plantel/index.php/docentes/delete/<?=$key->idDocente ?>"><button class="form-control btn btn-danger" onclick="return Delete()">Eliminar</button></a>
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