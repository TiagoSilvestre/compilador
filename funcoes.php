<?php

function getCodigo($sentenca) {
    
    switch ($sentenca) {
        case "PROGRAM":
            return 1;
            break;

        case "LABEL":
            return 2;
            break;

        case "CONST":
            return 3;
            break;

        case "VAR":
            return 4;
            break;

        case "PROCEDURE":
            return 5;
            break;

        case "BEGIN":
            return 6;
            break;

        case "END":
            return 7;
            break;

        case "INTEGER":
            return 8;
            break;

        case "ARRAY":
            return 9;
            break;

        case "OF":
            return 10;
            break;

        case "CALL":
            return 11;
            break;

        case "GOTO":
            return 12;
            break;

        case "IF":
            return 13;
            break;

        case "THEN":
            return 14;
            break;

        case "ELSE":
            return 15;
            break;

        case "WHILE":
            return 16;
            break;

        case "DO":
            return 17;
            break;

        case "REPEAT":
            return 18;
            break;

        case "UNTIL":
            return 19;
            break;

        case "READLN":
            return 20;
            break;

        case "WRITELN":
            return 21;
            break;

        case "OR":
            return 22;
            break;

        case "AND":
            return 23;
            break;

        case "NOT":
            return 24;
            break;

        case "INTEIRO":
            return 26;
            break;

        case "FOR":
            return 27;
            break;

        case "TO":
            return 28;
            break;

        case "CASE":
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

        case "LITERAL":
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



function verificaSentenca($sentenca) {
    
    switch ($sentenca) {
        case "PROGRAM":
            return true;
            break;

        case "LABEL":
            return true;
            break;

        case "CONST":
            return true;
            break;

        case "VAR":
            return true;
            break;

        case "PROCEDURE":
            return true;
            break;

        case "BEGIN":
            return true;
            break;

        case "END":
            return true;
            break;

        case "INTEGER":
            return true;
            break;

        case "ARRAY":
            return true;
            break;

        case "OF":
            return true;
            break;

        case "CALL":
            return true;
            break;

        case "GOTO":
            return true;
            break;

        case "IF":
            return true;
            break;

        case "THEN":
            return true;
            break;

        case "ELSE":
            return true;
            break;

        case "WHILE":
            return true;
            break;

        case "DO":
            return true;
            break;

        case "REPEAT":
            return true;
            break;

        case "UNTIL":
            return true;
            break;

        case "READLN":
            return true;
            break;

        case "WRITELN":
            return true;
            break;

        case "OR":
            return true;
            break;

        case "AND":
            return true;
            break;

        case "NOT":
            return true;
            break;

        // case "Identificador":
        //     return 25;
        //     break;

        case "INTEIRO":
            return true;
            break;

        case "FOR":
            return true;
            break;

        case "TO":
            return true;
            break;

        case "CASE":
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

        case "LITERAL":
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
