<?php
	// Conexion a la base de datos para el crud

	// Datos conexion
	$host = 'localhost';
	$bd = 'banco_riendo';
	$us = 'bbkmg';
	$contr = 'holamundo';

	// Cad Conexion
	$cad_conx = 'pgsql:host= ' . $host . '; dbname= ' . $bd;

	// Conexion
	try {
		$conx = new PDO($cad_conx, $us, $contr);
	} catch (Exception $e) {
		echo '(ERROR) Algo salió mal!';
	}
?>