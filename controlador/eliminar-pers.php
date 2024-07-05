<?php
	// Control para eliminacion persona

	// Comprueba que la variable pasada contenga algo
	try {
		$dni = $_GET['dni'];
		$consulta = 'DELETE FROM cliente WHERE dni = ' . $dni;
		
		// Ejecucion de la consulta
		$conx->query($consulta);
		echo '<div class="alert alert-success text-center">Cliente eliminado exitosamente!</div>';
	} catch (Exception $e) {
		echo '<div class="alert alert-warning text-center">Fallo al eliminar cliente!</div>';
	}

	/*
	sleep(5);
	header("Location: index.php");
	exit();
	*/
?>