<?php
	include 'funcoes.php';
	include 'linha.php';
	include 'Simbolo.php';
	session_start();

	if(!isset($_SESSION['x'])) {
		$_SESSION['x'] = array();
		array_push($_SESSION['x'], new Linha(52, getSentencaNaoTerminal(52)));
		header("Location: index.php");
		exit;
	}

	// PARTES SEMANTICO
	if(!isset($_SESSION['s'])) {
		$_SESSION['s'] = array();
	}

	if($_SESSION['a'][0]->codigo === 25) {
		// verificar se o identificador já esta na tabela, sim = erro, nao = inserir na tabela
		// array_push($_SESSION['s'], new Simbolo($_SESSION['a'][0]->sentenca, );
		// como saber se o identificador esta sendo declarado ou utilizado?
	}

	// SINTATICO
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