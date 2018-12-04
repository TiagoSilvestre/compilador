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


	foreach ($_SESSION['aCopia'] as $key => $value) {
		// $tabelaDeSimbolos->verifica($value);


	}

	echo "<pre>";
	print_r($_SESSION['s']);

$_SESSION['error'] = 'COMPILADO COM SUCESSO!!!!';
$_SESSION['color'] = 'green';
header("Location: index.php");
exit;


// depois daqui chamar o sintaticooo
// include 'sintaticoInteiro.php';

?>