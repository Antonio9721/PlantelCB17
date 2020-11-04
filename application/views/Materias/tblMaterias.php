<!DOCTYPE html>
<html>
<head>
	<title>Materias</title>
</head>
<body>
	<div>
		<div align="center">
		<h3>Materias Ofertadas</h3>
		</div>
		<div class="col-2" align="left">
			<a href="http://localhost:8084/Plantel/index.php/materias/opencreate">
			<button class="btn btn-primary"><span class="fa fa-plus"></span> Agregar Materia</button></a>
		</div>
		<div class="card-body">
			 <tr class="table-secondary">
				<table class="table " id="example1" width="100%" cellspacing="0">
					<thead class="table-dark">
						<tr>
							<td>Id</td>
							<td>Materia</td>
							<td>Clave</td>
							<td>Semestre Asignado</td>
							<td>Nombre del Docente</td>
							<td>Apellido Paterno</td>
							<td>Apellido Materno</td>
							
							
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datosMaterias as $key):?>
							<tr>
								<td><?=$key->idMateria ?></td>
								<td><?=$key->Materia ?></td>
								<td><?=$key->ClaveMat ?></td>
								<td><?=$key->Semestre ?></td>
								<td><?=$key->NombreDoc ?></td>
								<td><?=$key->Apaterno ?></td>
								<td><?=$key->Amaterno ?></td>
								
								
			
								<td> 
								<a href="http://localhost:8084/Plantel/index.php/materias/findone/<?=$key->idMateria ?>">
								<button class="form-control btn btn-success" onclick="return Edition()">Editar</button></a>
								</td>
								<td>
								<a href="http://localhost:8084/Plantel/index.php/materias/delete/<?=$key->idMateria ?>">
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