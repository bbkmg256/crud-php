<?php
	// Controlador para registro persona

	// Verifica que el array del post contenga algo,
	// o en otras palabras, que se haya presionado el boton.
	if (!empty($_POST["btn_reg"])) {
		// Corrobora que los campos contengan datos
		if (!empty($_POST["DNI"]) and !empty($_POST["apellido"]) and !empty($_POST["ciudad"])) {
			// Almacenamiento de contenido de los campos
			$dni = $_POST["DNI"]; $apellido = $_POST["apellido"]; $ciudad = $_POST["ciudad"];

			// Consulta a enviar a la BD
			$consulta_insert = '
			INSERT INTO cliente(dni, apellido, cod_ciudad)
			VALUES (:dni, :apellido, :ciudad)
			';
			
			try {
				// Preparacion de consulta
				$pre_st = $conx->prepare($consulta_insert);

				// Enlace de parametros por nombre
				$pre_st->bindParam(':dni', $dni, PDO::PARAM_INT);
				$pre_st->bindParam(':apellido', $apellido, PDO::PARAM_STR);
				$pre_st->bindParam(':ciudad', $ciudad, PDO::PARAM_INT);

				// Ejecución consulta
				$pre_st->execute();
				
				echo '<div class="alert alert-success text-center">Registro correcto!</div>';
			} catch (Exception $e) {
				echo '<div class="alert alert-danger text-center">Fallo al registrar usuario!</div>';
			}
		} else {
			echo '<div class="alert alert-warning text-center">Algún campo no tiene datos!</div>';
		}
	}
?>