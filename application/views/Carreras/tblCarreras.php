<!DOCTYPE html>
<html>
<head>
	<title>Capacitaciones</title>
</head>
<body>
	<div>
		<div align="center">
		<h5>Capacitaciones Ofertadas</h5>
		<h6>Registro de Capacitaciones</h6>
		</div>

		<div class="col-2" align="left">
			<a href="http://localhost:8084/Plantel/index.php/carreras/opencreate">
            <button class="btn btn-primary"><span class="fa fa-plus"></span> Agregar Capacitación</button></a>
		</div>
		<div class="card-body">
			 <tr class="table-secondary">
				<table class="table " id="example1" width="100%" cellspacing="0">
					<thead class="table-dark">
						<tr>
							<td>Id</td>
							<td>Capacitación</td>
							<td>Clave</td>
							<td>Docente Asignado</td>
							<td>Apellido Paterno</td>
							<td>Apellido Materno</td>
							
							
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datosCarreras as $key):?>
							<tr>
								<td><?=$key->idCarrera ?></td>
								<td><?=$key->Carrera ?></td>
								<td><?=$key->Clave ?></td>
								<td><?=$key->NombreD ?></td>
								<td><?=$key->ApellidoP ?></td>
								<td><?=$key->ApellidoM ?></td>
							
								<td> 
								<a href="http://localhost:8084/Plantel/index.php/carreras/findone/<?=$key->idCarrera ?>">
                                <button class="form-control btn btn-success" onclick="return Edition()">Editar</button></a>
								</td>
								<td>
								<a href="http://localhost:8084/Plantel/index.php/carreras/delete/<?=$key->idCarrera?>">
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