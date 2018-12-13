<?php
	// include 'simbolo.php';
	include 'tabelaDeSimbolos.php';
	// session_start();

	if(!isset($_SESSION['s'])) {
		$_SESSION['s'] = array();
	}

	$tabelaDeSimbolos = new TabelaDeSimbolos();


	foreach ($_SESSION['a'] as $key => $value) {
		// echo 'auuue'. $value->sentenca.' <br>';
		$tabelaDeSimbolos->verifica($value);


	}

	// echo "<pre>";
	// print_r($_SESSION['s']);



// depois daqui chamar o sintaticooo
include 'sintaticoInteiro.php';

?>