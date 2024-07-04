<!-- Crud PHP + PGSQL -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Proyecto CRUD PHP+PGSQL!</title>
		<!-- Linkeo Boostrap css-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
	<body>
		<!-- Linkeo Boostrap js-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

		<h1 class="text-center p-3">¡Bienvenido!</h1>

		<!-- Form de registro -->
		<div class="container-fluid row">
			<form class="col-4 p-3">
				<!-- texto e ingreso dato DNI -->
				<div class="mb-3">
					<label class="form-label">DNI</label>
					<input type="text" class="form-control">
				</div>

				<!-- texto e ingreso dato apellido -->
				<div class="mb-3">
					<label class="form-label">Apellido</label>
					<input type="text" class="form-control">
				</div>

				<!-- texto e ingreso dato ciudad-->
				<div class="mb-3">
					<label class="form-label">Ciudad</label>
					<input type="text" class="form-control">
				</div>

				<!-- Aviso xd -->
				<div class="form-text p-2">Nunca compartiremos esta información con nadie.</div>
				
				<!-- Boton reg -->
				<button type="submit" class="btn btn-primary">Registrar</button>
			</form>

			<!-- Tabla de datos -->
			<div class="col-7 p-3">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">DNI</th>
							<th scope="col">Apellido</th>
							<th scope="col">Ciudad</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<?php
							include "modelo/conx.php";
							$consulta = $conx->query('SELECT * FROM cliente');
							foreach ($consulta->fetchAll() as $reg) { ?>
								<tr>
									<td><?= $reg['dni'] ?></td>
									<td><?= $reg['apellido'] ?></td>
									<td><?= $reg['cod_ciudad'] ?></td>
									<td>
										<a href="" class="btn btn-small btn-warning">Editar</a>
										<a href="" class="btn btn-small btn-danger">Eliminar</a>
									</td>
								</tr>
							<?php }
						?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>