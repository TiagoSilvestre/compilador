<?php
	// include 'simbolo.php';
	include 'tabelaDeSimbolos.php';
	// session_start();

	if(!isset($_SESSION['s'])) {
		$_SESSION['s'] = array();
	}

	$program = false;
	$var = false;
	$variaveisTMP = [];
	
	$tabelaDeSimbolos = new TabelaDeSimbolos();
	// $tabelaDeSimbolos->addNaTabela();


	foreach ($_SESSION['a'] as $key => $value) {
		$tabelaDeSimbolos->verifica($value);


	}

	echo "<pre>";
	print_r($_SESSION['s']);

// depois daqui chamar o sintaticooo

?>