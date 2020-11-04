<!DOCTYPE html>
<html>
<head>
	<title>Expedientes</title>
</head>
<body>
	<div>
		<div align="center">
			<h4>Expedientes de Alumnos Inscritos</h4>
			</div>
		<div class="col-2" align="left">
			<a href="http://localhost:8084/Plantel/index.php/expediente/opencreate">
			<button class="btn btn-primary"><span class="fa fa-plus"></span>Agregar Alumno</button></a>
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
							<td>RFC</td>
							<td>Correo Electrónico</td>
							<td>Número Teléfonico</td>

							<td>Nombre del Tutor</td>
							<td>Apellidos del Tutor</td>
							<td>Número Teléfonico</td>
							<td>Municipio</td>
                            <td>Comunidad</td>
                            <td>Nom.Calle</td>
                            <td>Num.Calle</td>

                            <td>Matricula</td>
                            <td>Capacitación</td>
							<td>Paraescolar</td>
							<td>Grupo</td>
                            
                            <td>Nombre Asesor</td>
                            <td>Apellidos Asesor</td>
                           

							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($datosExpediente as $key):?>
							<tr>
								<td><?=$key->idExpe ?></td>
								<td><?=$key->Nombre ?></td>
								<td><?=$key->Apaterno ?></td>
								<td><?=$key->Amaterno ?></td>
								<td><?=$key->CURP ?></td>
								<td><?=$key->RFC ?></td>
								<td><?=$key->Correo ?></td>
								<td><?=$key->Telefono ?></td>
								<td><?=$key->Tutor?></td>
								<td><?=$key->TutorAp ?></td>
								<td><?=$key->TutorTel ?></td>
								<td><?=$key->Municipio ?></td>
								<td><?=$key->Comunidad ?></td>
								<td><?=$key->CalleNom ?></td>
								<td><?=$key->CalleNum ?></td>
								<td><?=$key->Matricula ?></td>
								<td><?=$key->Carrera ?></td>
								<td><?=$key->Paraescolar ?></td>
								<td><?=$key->Grupo ?></td>
								<td><?=$key->Docente ?></td>
								<td><?=$key->ApellidosD ?></td>
								
								<td> 
								<a href="http://localhost:8084/Plantel/index.php/expediente/findone/<?=$key->idExpe ?>">
								<button class="form-control btn btn-success" onclick="return Edition()">Editar</button></a>
								</td>
								<td>
								<a href="http://localhost:8084/Plantel/index.php/expediente/delete/<?=$key->idExpe ?>">
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