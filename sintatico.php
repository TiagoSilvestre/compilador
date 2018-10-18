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


	if(!isNaoTerminal($_SESSION['x'][0]->sentenca )) { // FALTOU VER SE É FINAL DE ARQUIVO
		echo "é terminall";
		if($_SESSION['x'][0]->codigo == $_SESSION['a'][0]->codigo){
			array_shift($_SESSION['x']);
			array_shift($_SESSION['a']);
			header("Location: index.php");
		}else {
			$_SESSION['error'] = 'Não existe na Tabela de Parse';
			header("Location: index.php");
			exit;	
		}

	}else {
		echo "NAOO é terminall<br>";
		if(existeNaTabelaParse($_SESSION['x'][0]->codigo, $_SESSION['a'][0]->codigo)){
			adicionaDerivacao($_SESSION['x'][0]->codigo, $_SESSION['a'][0]->codigo);
			header("Location: index.php");
			exit;	
		}else {
			$_SESSION['error'] = 'Não existe na Tabela de Parse';
			header("Location: index.php");
			exit;	
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