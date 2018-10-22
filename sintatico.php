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


	if(!isNaoTerminal($_SESSION['x'][0]->sentenca) || $_SESSION['x'][0]->sentenca == '$') {
		// echo "é terminall";
		// $_SESSION['error'] = "é terminall";

		if($_SESSION['x'][0]->codigo == $_SESSION['a'][0]->codigo){
			array_shift($_SESSION['x']);
			array_shift($_SESSION['a']);
			header("Location: index.php");
		}
		else {
			if($_SESSION['a'][0]->sentenca == '$'){
				$_SESSION['error'] = 'COMPILADO COM SUCESSO!!!!';
				$_SESSION['color'] = 'green';	
				header("Location: index.php");
				exit;	
			}
			$_SESSION['error'] = 'ERRO: (X) é diferente de (a)';
			$_SESSION['color'] = 'red';
			header("Location: index.php");
			exit;	
		}
	}
	else {
		// echo "NAOO é terminall<br>";
		// $_SESSION['error'] = "NAOO é terminall<br>";

		if(existeNaTabelaParse($_SESSION['x'][0]->codigo, $_SESSION['a'][0]->codigo)){
			adicionaDerivacao($_SESSION['x'][0]->codigo, $_SESSION['a'][0]->codigo);
			header("Location: index.php");
			exit;	
		}
		else {
			$_SESSION['error'] = 'ERRO: Não existe na Tabela de Parse';
			$_SESSION['color'] = 'red';
			header("Location: index.php");
			exit;	
		}

	}

/*
 || $_SESSION['x'][0] == '$'
	echo "<pre>";
	print_r($_SESSION['x'][0]->sentenca);

	echo "<pre>";
	print_r($_SESSION['x']);

	array_shift($_SESSION['x']);
*/
?>