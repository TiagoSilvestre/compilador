<?php
	include 'funcoes.php';
	include 'linha.php';
	session_start();

	if(!isset($_SESSION['x'])) {
		$_SESSION['x'] = array();
		array_push($_SESSION['x'], new Linha(52, getCodigoNaoTerminal(52)));
	}


	// if($_SESSION['x'])



/*
	echo "<pre>";
	print_r($_SESSION['x']);

	array_shift($_SESSION['x']);

	echo "<pre>";
	print_r($_SESSION['x']);

	die();
*/
	header("Location: index.php");
?>