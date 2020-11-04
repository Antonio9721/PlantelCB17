<!DOCTYPE html>
<html>
<head>
	<title>Banda Musical</title>
</head>
<body>
	<div>
		<div align="center">
		<h4>Paraescolar de Banda Musical</h4>
		<h5>Alumnos Inscritos</h5>
		</div>

		<div class="col-2" align="left">
			<a href="http://localhost:8084/Plantel/index.php/banda/opencreate">
			<button class="btn btn-primary"><span class="fa fa-plus"></span> Agregar Alumno</button></a>
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
							<td>Semestre</td>
							<td>Inicio de la Clase</td>
							<td>Fin de la Clase</td>
					
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datosBanda as $key):?>
							<tr>
								<td><?=$key->idBanda ?></td>
								<td><?=$key->Nombre ?></td>
								<td><?=$key->Apaterno ?></td>
								<td><?=$key->Amaterno ?></td>
								<td><?=$key->Matricula ?></td>
								<td><?=$key->Semestre ?></td>
								<td><?=$key->Hinicio ?></td>
								<td><?=$key->Hfin ?></td>
								
			
								<td> 
								<a href="http://localhost:8084/Plantel/index.php/banda/findone/<?=$key->idBanda ?>"><button class="form-control btn btn-success" onclick="return Edition()">Editar</button></a>
								</td>
								<td>
								<a href="http://localhost:8084/Plantel/index.php/banda/delete/<?=$key->idBanda ?>"><button class="form-control btn btn-danger" onclick="return Delete()">Eliminar</button></a>
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