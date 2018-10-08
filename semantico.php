<?php
	include 'funcoes.php';
	include 'linha.php';
	session_start();

	if(!isset($_SESSION['pilha2'])) {
		$_SESSION['pilha2'] = array();
		array_push($_SESSION['pilha2'], new Linha(52, getCodigoNaoTerminal(52)));
	}

	// echo "<pre>";
	// print_r($_SESSION['pilha2']);

	header("Location: index.php");
?>

<!-- if(isset($_POST['pilhaDeTokens'])) {

				$pilhaDeTokens = $_POST['pilhaDeTokens'];
				$pilhaDois = $_POST['pilhaDois'];

				echo "<pre>";
				print_r($_POST['pilhaDeTokens']);

				echo "<pre>";
				print_r($_POST['pilhaDois']);
			} -->