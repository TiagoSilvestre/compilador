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

//Função para a segunda tabela
function getCodigoNaoTerminal($codigo) {

    switch ($codigo) {
        case 52:
            return "PROGRAMA";
            break;

        case 53:
            return "BLOCO";
            break;

        case 54:
            return "DCLROT";
            break;

        case 55:
            return "LID";
            break;

        case 56:
            return "REPIDENT";
            break;

        case 57:
            return "DCLCONST";
            break;

        case 58:
            return "LDCONST";
            break;

        case 59:
            return "DCLVAR";
            break;

        case 60:
            return "LDVAR";
            break;

        case 61:
            return "TIPO";
            break;

        case 62:
            return "DCLPROC";
            break;

        case 63:
            return "DEFPAR";
            break;

        case 64:
            return "CORPO";
            break;

        case 65:
            return "REPCOMANDO";
            break;

        case 66:
            return "COMANDO";
            break;

        case 67:
            return "RCOMID";
            break;

        case 68:
            return "RVAR";
            break;

        case 69:
            return "PARAMETROS";
            break;

        case 70:
            return "REPPAR";
            break;

        case 71:
            return "ELSEPARTE";
            break;

        case 72:
            return "VARIAVEL";
            break;

        case 73:
            return "VARIAVEL1";
            break;

        case 74:
            return "REPVARIAVEL";
            break;

        case 75:
            return "ITEMSAIDA";
            break;

        case 76:
            return "REPITEM";
            break;

        case 77:
            return "EXPRESSAO";
            break;

        case 78:
            return "REPEXPSIMP";
            break;

        case 79:
            return "EXPSIMP";
            break;

        case 80:
            return "REPEXP";
            break;

        case 81:
            return "TERMO";
            break;

        case 82:
            return "REPTERMO";
            break;

        case 83:
            return "FATOR";
            break;

        case 84:
            return "CONDCASE";
            break;

        case 85:
            return "CONTCASE";
            break;

        case 86:
            return "RPINTEIRO";
            break;

        case 87:
            return "SEM EFEITO";
            break;
    }
}
