<?php

	include 'linha.php';
	include 'simbolo.php';
	session_start();

	if(!isset($_SESSION['s'])) {
		$_SESSION['s'] = array();
	}

	$program = false;
	$var = false;
	$variaveisTMP = [];

	foreach ($_SESSION['a'] as $key => $value) {
		if($value->sentenca == 'PROGRAM') {
			$program = true;
			$tipo = $value->sentenca;
		}

		if($value->codigo == 25 && $program == true) {
			array_push($_SESSION['s'], new Simbolo($value->sentenca, 'variavel', $tipo, 0));
			$program = false;
		}

		if($value->sentenca == 'VAR') {
			$var = true;
			$tipo = $value->sentenca;
		}

		if($value->codigo == 25 && $var == true) {
			array_push($variaveisTMP, $value->sentenca);
		}

		if($value->codigo == 39 && $var == true) {
			if($_SESSION['a'][$key + 1]->sentenca == 'INTEGER') {
				foreach ($variaveisTMP as $key => $val) {
					array_push($_SESSION['s'], new Simbolo($val, 'variavel', 'INTEGER', 0));
				}
			}

			$var = false;
		}
	}

	echo "<pre>";
	print_r($_SESSION['s']);

?>