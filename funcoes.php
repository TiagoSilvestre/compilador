<?php
require 'tabela.php';

function verificaSentencaNaTabela($sentenca) {
    $a = new Tabela();
    print_r($a->tabela);
    echo $sentenca;
}
