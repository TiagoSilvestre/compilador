<?php
require 'tabela.php';

function verificaSentencaNaTabela($sentenca) {
    $a = new Tabela();
    // print_r($a->tabela);
  //  echo $sentenca;
    
    // verifica se a sentença foi encontrada igual
    if (in_array($sentenca, $a->tabela)) { 
        echo "Retornou da tabela TRUE";
        return true;
        // aqui ele joga num array das palavras reconhecidas
    } 
    echo "Retornou da tabela FALSE";
    return false;
}
