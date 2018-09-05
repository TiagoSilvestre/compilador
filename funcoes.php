<?php

require 'tabela.php';

function verificaSentencaNaTabela($sentenca) {
    $a = new Tabela();

    if (in_array($sentenca, $a->tabela)) { 
<<<<<<< HEAD
        // echo "Retornou da tabela TRUE<br>";
        return true;
    } 
    // echo "Retornou da tabela FALSE<br>";
=======
        return true;
    } 
>>>>>>> master
    return false;
}



function getCodigo($sentenca) {
    
    switch ($sentenca) {
        case "Program":
            return 1;
            break;

        case "Label":
            return 2;
            break;

        case "Const":
            return 3;
            break;

        case "Var":
            return 4;
            break;

        case "Procedure":
            return 5;
            break;

        case "Begin":
            return 6;
            break;

        case "End":
            return 7;
            break;

        case "Integer":
            return 8;
            break;

        case "Array":
            return 9;
            break;

        case "Of":
            return 10;
            break;

        case "Call":
            return 11;
            break;

        case "Goto":
            return 12;
            break;

        case "If":
            return 13;
            break;

        case "Then":
            return 14;
            break;

        case "Else":
            return 15;
            break;

        case "While":
            return 16;
            break;

        case "Do":
            return 17;
            break;

        case "Repeat":
            return 18;
            break;

        case "Until":
            return 19;
            break;

        case "Readln":
            return 20;
            break;

        case "Writeln":
            return 21;
            break;

        case "Or":
            return 22;
            break;

        case "And":
            return 23;
            break;

        case "Not":
            return 24;
            break;

        // case "Identificador":
        //     return 25;
        //     break;

        case "Inteiro":
            return 26;
            break;

        case "For":
            return 27;
            break;

        case "To":
            return 28;
            break;

        case "Case":
            return 29;
            break;

        case ":=":
            return 38;
            break;

        case ">=":
            return 42;
            break;

        case "<":
            return 43;
            break;

        case "<=":
            return 44;
            break;

        case "<>":
            return 45;
            break;

        case "literal":
            return 48;
            break;

        case "..":
            return 50;
            break;

        case "$":
            return 50;
            break;

        // DAQUI SAO SÓ LETRAS 
        case "+":
            return 30;
            break;

        case "-":
            return 31;
            break;

        case "*":
            return 32;
            break;

        case "/":
            return 33;
            break;

        case "[":
            return 34;
            break;

        case "]":
            return 35;
            break;

        case "(":
            return 36;
            break;

        case ")":
            return 37;
            break;

        case ":":
            return 39;
            break;

        case "=":
            return 40;
            break;

        case ">":
            return 41;
            break;
        
        case ",":
            return 46;
            break;

        case ";":
            return 47;
            break;

        case ".":
            return 49;
            break;

        case "$":
            return 50;
            break;
    }
}



function verificaSentenca22($sentenca) {
    
    switch ($sentenca) {
        case "Program":
            return true;
            break;

        case "Label":
            return true;
            break;

        case "Const":
            return true;
            break;

        case "Var":
            return true;
            break;

        case "Procedure":
            return true;
            break;

        case "Begin":
            return true;
            break;

        case "End":
            return true;
            break;

        case "Integer":
            return true;
            break;

        case "Array":
            return true;
            break;

        case "Of":
            return true;
            break;

        case "Call":
            return true;
            break;

        case "Goto":
            return true;
            break;

        case "If":
            return true;
            break;

        case "Then":
            return true;
            break;

        case "Else":
            return true;
            break;

        case "While":
            return true;
            break;

        case "Do":
            return true;
            break;

        case "Repeat":
            return true;
            break;

        case "Until":
            return true;
            break;

        case "Readln":
            return true;
            break;

        case "Writeln":
            return true;
            break;

        case "Or":
            return true;
            break;

        case "And":
            return true;
            break;

        case "Not":
            return true;
            break;

        // case "Identificador":
        //     return 25;
        //     break;

        case "Inteiro":
            return true;
            break;

        case "For":
            return true;
            break;

        case "To":
            return true;
            break;

        case "Case":
            return true;
            break;

        case ":=":
            return true;
            break;

        case ">=":
            return true;
            break;

        case "<":
            return true;
            break;

        case "<=":
            return true;
            break;

        case "<>":
            return true;
            break;

        case "literal":
            return true;
            break;

        case "..":
            return true;
            break;

        // DAQUI SAO SÓ LETRAS 
        case "+":
            return true;
            break;

        case "-":
            return true;
            break;

        case "*":
            return true;
            break;

        case "/":
            return true;
            break;

        case "[":
            return true;
            break;

        case "]":
            return true;
            break;

        case "(":
            return true;
            break;

        case ")":
            return true;
            break;

        case ":":
            return true;
            break;

        case "=":
            return true;
            break;

        case ">":
            return true;
            break;
        
        case ",":
            return true;
            break;

        case ";":
            return true;
            break;

        case ".":
            return true;
            break;

        case "$":
            return true;
            break;
    
        default:
            return false;
    }
}
