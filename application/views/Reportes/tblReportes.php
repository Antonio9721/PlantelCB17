<!DOCTYPE html>
<html>
<head>
	<title>Reportes</title>
</head>
<body>
	<div>
		<div align="center">
		<h5>Reportes de Alumnos de Mala Conducta</h5>
        <h6>Registro de Incidencias</h6>
		</div>
		<div class="col-2" align="left">
			<a href="http://localhost:8084/Plantel/index.php/reportes/opencreate">
            <button class="btn btn-primary"><span class="fa fa-plus"></span> Reportar Alumno</button></a>
		</div>
		<div class="card-body">
		<div class="table-responsive">
        <table class="table">
					<thead class="table-dark">
						<tr>
							<td>Id</td>
							<td>Nombre</td>
							<td>A.Paterno</td>
							<td>A.Materno</td>
							<td>Matricula</td>
							<td>Semestre</td>
							<td>Fecha</td>
                            <td>Hora</td>
                            <td>Reporte</td>
                            <td>Castigo</td>
                            <td>Acuerdo</td>
                            
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datosReportes as $key):?>
							<tr>
								<td><?=$key->idReporte ?></td>
								<td><?=$key->Nombre ?></td>
								<td><?=$key->ApellidoP ?></td>
								<td><?=$key->ApellidoM ?></td>
								<td><?=$key->Matricula ?></td>
								<td><?=$key->Semestre ?></td>
								<td><?=$key->Fecha ?></td>
                                <td><?=$key->Hora ?></td>
                                <td><?=$key->Reporte ?></td>
                                <td><?=$key->Castigo ?></td>
                                <td><?=$key->Acuerdo ?></td>
                                
			
								<td> 
								<a href="http://localhost:8084/Plantel/index.php/reportes/findone/<?=$key->idReporte ?>">
                                <button class="form-control btn btn-success" onclick="return Edition()">Editar</button></a>
								</td>
								<td>
								<a href="http://localhost:8084/Plantel/index.php/reportes/delete/<?=$key->idReporte ?>">
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