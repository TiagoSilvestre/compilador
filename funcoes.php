<?php
require 'tabela.php';

function verificaSentencaNaTabela($sentenca) {
    
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

        case "Identificador":
            return 25;
            break;

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

        case ":=":
            return 38;
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

        case ",":
            return 46;
            break;

        case ";":
            return 47;
            break;

        case "literal":
            return 48;
            break;

        case ".":
            return 49;
            break;

        case "..":
            return 50;
            break;

        case "$":
            return 50;
            break;
        
        default:
            return 25;
            break;
    }


    if (in_array($sentenca, $a->tabela)) { 
        echo "Retornou da tabela TRUE";
        return true;
        // aqui ele joga num array das palavras reconhecidas
    } 
    echo "Retornou da tabela FALSE";
    return false;
}
