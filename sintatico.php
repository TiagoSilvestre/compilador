<?php
	include 'funcoes.php';
	include 'linha.php';
	session_start();

	if(!isset($_SESSION['x'])) {
		$_SESSION['x'] = array();
		array_push($_SESSION['x'], new Linha(52, getSentencaNaoTerminal(52)));
		header("Location: index.php");
		exit;
	}


	if(!isNaoTerminal($_SESSION['x'][0]->sentenca )) {
		echo "é terminall";
		

	}else {
		echo "NAOO é terminall<br>";
		if(existeNaTabelaParse($_SESSION['x'][0]->codigo, $_SESSION['a'][0]->codigo)){
			
			adicionaDerivacao($_SESSION['x'][0]->codigo, $_SESSION['a'][0]->codigo);

			header("Location: index.php");

		}else {
			echo " NAOO exisssste";
		}

	}

	// echo "<pre>";
	// print_r($_SESSION['x']);


	// die();

/*
 || $_SESSION['x'][0] == '$'
	echo "<pre>";
	print_r($_SESSION['x'][0]->sentenca);


	echo "<pre>";
	print_r($_SESSION['x']);

	array_shift($_SESSION['x']);

	echo "<pre>";
	print_r($_SESSION['x']);

*/
	header("Location: index.php");
?>