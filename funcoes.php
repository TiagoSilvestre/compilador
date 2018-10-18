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

        case "IDENTIFICADOR":
            return 25;
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
    // Fim LETRA SOZINHAS
        case "PROGRAMA":
            return 52;
            break;

        case "BLOCO":
            return 53;
            break;

        case "DCLROT":
            return 54;
            break;

        case "LID":
            return 55;
            break;

        case "REPIDENT":
            return 56;
            break;

        case "DCLCONST":
            return 57;
            break;

        case "LDCONST":
            return 58;
            break;

        case "DCLVAR":
            return 59;
            break;

        case "LDVAR":
            return 60;
            break;

        case "TIPO":
            return 61;
            break;

        case "DCLPROC":
            return 62;
            break;

        case "DEFPAR":
            return 63;
            break;

        case "CORPO":
            return 64;
            break;

        case "REPCOMANDO":
            return 65;
            break;

        case "COMANDO":
            return 66;
            break;

        case "RCOMID":
            return 67;
            break;

        case "RVAR":
            return 68;
            break;

        case "PARAMETROS":
            return 69;
            break;

        case "REPPAR":
            return 70;
            break;

        case "ELSEPARTE":
            return 71;
            break;

        case "VARIAVEL":
            return 72;
            break;

        case "VARIAVEL1":
            return 73;
            break;

        case "REPVARIAVEL":
            return 74;
            break;

        case "ITEMSAIDA":
            return 75;
            break;

        case "REPITEM":
            return 76;
            break;

        case "EXPRESSAO":
            return 77;
            break;

        case "REPEXPSIMP":
            return 78;
            break;

        case "EXPSIMP":
            return 79;
            break;

        case "REPEXP":
            return 80;
            break;

        case "TERMO":
            return 81;
            break;

        case "REPTERMO":
            return 82;
            break;

        case "FATOR":
            return 83;
            break;

        case "CONDCASE":
            return 84;
            break;

        case "CONTCASE":
            return 85;
            break;

        case "RPINTEIRO":
            return 86;
            break;

        case "SEM EFEITO":
            return 87;
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
function getSentencaNaoTerminal($codigo) {

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



function isNaoTerminal($sentenca) {
    
    switch ($sentenca) {
        case "PROGRAMA":
            return true;
            break;

        case "BLOCO":
            return true;
            break;

        case "DCLROT":
            return true;
            break;

        case "LID":
            return true;
            break;

        case "REPIDENT":
            return true;
            break;

        case "DCLCONST":
            return true;
            break;

        case "LDCONST":
            return true;
            break;

        case "DCLVAR":
            return true;
            break;

        case "LDVAR":
            return true;
            break;

        case "TIPO":
            return true;
            break;

        case "DCLPROC":
            return true;
            break;

        case "DEFPAR":
            return true;
            break;

        case "CORPO":
            return true;
            break;

        case "REPCOMANDO":
            return true;
            break;

        case "COMANDO":
            return true;
            break;

        case "RCOMID":
            return true;
            break;

        case "RVAR":
            return true;
            break;

        case "PARAMETROS":
            return true;
            break;

        case "REPPAR":
            return true;
            break;

        case "ELSEPARTE":
            return true;
            break;

        case "VARIAVEL":
            return true;
            break;

        case "VARIAVEL1":
            return true;
            break;

        case "REPVARIAVEL":
            return true;
            break;

        case "ITEMSAIDA":
            return true;
            break;

        case "REPITEM":
            return true;
            break;

        case "EXPRESSAO":
            return true;
            break;

        case "REPEXPSIMP":
            return true;
            break;

        case "EXPSIMP":
            return true;
            break;

        case "REPEXP":
            return true;
            break;

        case "TERMO":
            return true;
            break;

        case "REPTERMO":
            return true;
            break;

        case "FATOR":
            return true;
            break;

        case "CONDCASE":
            return true;
            break;

        case "CONTCASE":
            return true;
            break;

        case "RPINTEIRO":
            return true;
            break;

        case "SEM EFEITO":
            return true;
            break;
    
        default:
            return false;
    }
}

function existeNaTabelaParse($X, $a){
    if($X == 52 && $a == 1) {
        return true;
    }

    return false;
}



function adicionaDerivacao($X, $a){
    if($X == 52 && $a == 1) {

        array_push($_SESSION['x'], new Linha(getCodigo('PROGRAM'), 'PROGRAM'));
        array_push($_SESSION['x'], new Linha(getCodigo('IDENTIFICADOR'), 'IDENTIFICADOR'));
        array_push($_SESSION['x'], new Linha(getCodigo(';'), ';'));
        array_push($_SESSION['x'], new Linha(getCodigo('BLOCO'), 'BLOCO'));
        array_push($_SESSION['x'], new Linha(getCodigo('.'), '.'));

    }
}
