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
            return 51;
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
    if($X == 52 && $a == 1) return true;

    if( ($X == 53 && $a == 2) || ($X == 53 && $a == 3) || ($X == 53 && $a == 4) || ($X == 53 && $a == 5) || ($X == 53 && $a == 6) ) {
        return true;
    }

    if($X == 54 && $a == 2) return true;
    if($X == 55 && $a == 25) return true;
    if($X == 56 && $a == 46) return true;
    if($X == 57 && $a == 3) return true;
    if($X == 58 && $a == 25) return true;
    if($X == 59 && $a == 4) return true;

    if( ($X == 75 && $a == 24) || ($X == 75 && $a == 25) || ($X == 75 && $a == 26) || ($X == 75 && $a == 30) || ($X == 75 && $a == 31) || ($X == 75 && $a == 36) ) {
        return true;
    }
    if( ($X == 77 && $a == 24) || ($X == 77 && $a == 25) || ($X == 77 && $a == 26) || ($X == 77 && $a == 30) || ($X == 77 && $a == 31) || ($X == 77 && $a == 36) ) {
        return true;
    }
    if( ($X == 81 && $a == 24) || ($X == 81 && $a == 25) || ($X == 81 && $a == 26) || ($X == 81 && $a == 36) ) {
        return true;
    }

    if( ($X == 54 && $a == 3) || 
        ($X == 54 && $a == 4) || 
        ($X == 54 && $a == 5) || 
        ($X == 54 && $a == 6) || 
        ($X == 56 && $a == 39) || 
        ($X == 54 && $a == 47) || 
        ($X == 57 && $a == 4) || 
        ($X == 57 && $a == 6) || 
        ($X == 54 && $a == 5) || 
        ($X == 54 && $a == 6) || 
        ($X == 58 && $a == 4) || 
        ($X == 58 && $a == 5) || 
        ($X == 58 && $a == 6) || 
        ($X == 59 && $a == 5) || 
        ($X == 59 && $a == 6) || 
        ($X == 60 && $a == 5) || 
        ($X == 60 && $a == 6) || 
        ($X == 62 && $a == 6) ||
        ($X == 63 && $a == 39) || 
        ($X == 65 && $a == 7) || 
        ($X == 73 && $a == 7) || 
        ($X == 73 && $a == 10) || 
        ($X == 73 && $a == 14) || 
        ($X == 73 && $a == 15) || 
        ($X == 73 && $a == 17) || 
        ($X == 73 && $a == 19) || 
        ($X == 73 && $a == 22) || 
        ($X == 73 && $a == 23) || 
        ($X == 73 && $a == 28) || 
        ($X == 73 && $a == 30) || 
        ($X == 73 && $a == 31) || 
        ($X == 73 && $a == 32) || 
        ($X == 73 && $a == 33) || 
        ($X == 66 && $a == 7) || 
        ($X == 66 && $a == 15) || 
        ($X == 66 && $a == 19) || 
        ($X == 66 && $a == 47) || 
        ($X == 68 && $a == 38) || 
        ($X == 69 && $a == 7) || 
        ($X == 69 && $a == 15) || 
        ($X == 69 && $a == 19) || 
        ($X == 73 && $a == 35) || 
        ($X == 73 && $a == 37) || 
        ($X == 73 && $a == 40) || 
        ($X == 73 && $a == 41) || 
        ($X == 73 && $a == 42) || 
        ($X == 73 && $a == 43) || 
        ($X == 73 && $a == 44) || 
        ($X == 73 && $a == 45) || 
        ($X == 73 && $a == 46) || 
        ($X == 73 && $a == 47) || 
        ($X == 74 && $a == 37) || 
        ($X == 78 && $a == 7) || 
        ($X == 78 && $a == 10) || 
        ($X == 78 && $a == 14) || 
        ($X == 78 && $a == 15) || 
        ($X == 78 && $a == 17) || 
        ($X == 78 && $a == 19) || 
        ($X == 78 && $a == 28) || 
        ($X == 78 && $a == 35) || 
        ($X == 78 && $a == 37) || 
        ($X == 82 && $a == 35) || 
        ($X == 82 && $a == 37) || 
        ($X == 82 && $a == 40) || 
        ($X == 82 && $a == 41) || 
        ($X == 82 && $a == 42) || 
        ($X == 82 && $a == 43) || 
        ($X == 82 && $a == 44) || 
        ($X == 82 && $a == 45) || 
        ($X == 82 && $a == 46) || 
        ($X == 82 && $a == 47) || 
        ($X == 69 && $a == 47) || 
        ($X == 70 && $a == 37) || 
        ($X == 71 && $a == 7) || 
        ($X == 71 && $a == 19) || 
        ($X == 71 && $a == 47) || 
        ($X == 80 && $a == 7) || 
        ($X == 80 && $a == 10) || 
        ($X == 80 && $a == 14) || 
        ($X == 80 && $a == 15) || 
        ($X == 80 && $a == 17) || 
        ($X == 80 && $a == 19) ||
        ($X == 80 && $a == 35) ||
        ($X == 80 && $a == 37) ||
        ($X == 80 && $a == 40) ||
        ($X == 80 && $a == 41) ||
        ($X == 80 && $a == 42) ||
        ($X == 80 && $a == 43) ||
        ($X == 80 && $a == 44) ||
        ($X == 80 && $a == 45) ||
        ($X == 80 && $a == 46) ||
        ($X == 80 && $a == 47) ||
        ($X == 82 && $a == 7) ||
        ($X == 82 && $a == 10) ||
        ($X == 82 && $a == 14) ||
        ($X == 82 && $a == 15) ||
        ($X == 82 && $a == 17) ||
        ($X == 82 && $a == 19) ||
        ($X == 82 && $a == 22) ||
        ($X == 82 && $a == 28) ||
        ($X == 82 && $a == 30) ||
        ($X == 82 && $a == 31) ||
        ($X == 78 && $a == 46) ||
        ($X == 78 && $a == 47) ||
        ($X == 76 && $a == 37) ||
        ($X == 80 && $a == 28) ||
        ($X == 85 && $a == 7) ||
        ($X == 86 && $a == 39)
    ) {
        return true;
    }

    if( ($X == 79 && $a == 24) || ($X == 79 && $a == 25) || ($X == 79 && $a == 26) ) return true;
    if($X == 60 && $a == 25) return true;
    if($X == 61 && $a == 8) return true;
    if($X == 61 && $a == 9) return true;
    if($X == 62 && $a == 5) return true;
    if($X == 63 && $a == 36) return true;
    if($X == 64 && $a == 6) return true;
    if($X == 65 && $a == 47) return true;
    if($X == 66 && $a == 6) return true;        
    if($X == 66 && $a == 11) return true;
    if($X == 66 && $a == 12) return true;
    if($X == 66 && $a == 13) return true;
    if($X == 66 && $a == 16) return true;
    if($X == 66 && $a == 18) return true;
    if($X == 66 && $a == 20) return true;
    if($X == 66 && $a == 21) return true;
    if($X == 66 && $a == 25) return true;
    if($X == 66 && $a == 27) return true;
    if($X == 66 && $a == 29) return true;
    if( ($X == 67 && $a == 34) || ($X == 67 && $a == 38) ) return true;
    if($X == 67 && $a == 39) return true;
    if($X == 68 && $a == 34) return true;
    if($X == 69 && $a == 36) return true;
    if($X == 70 && $a == 46) return true;
    if($X == 71 && $a == 15) return true;
    if($X == 72 && $a == 25) return true;
    if($X == 73 && $a == 34) return true;
    if($X == 74 && $a == 46) return true;
    if($X == 75 && $a == 48) return true;
    if($X == 76 && $a == 46) return true;
    if($X == 78 && $a == 40) return true;
    if($X == 78 && $a == 41) return true;
    if($X == 78 && $a == 42) return true;
    if($X == 78 && $a == 43) return true;
    if($X == 78 && $a == 44) return true;
    if($X == 78 && $a == 45) return true;
    if( ($X == 79 && $a == 30) || ($X == 80 && $a == 30) ) return true;
    if( ($X == 79 && $a == 31) || ($X == 80 && $a == 31) ) return true;
    if($X == 79 && $a == 36) return true;
    if($X == 80 && $a == 22) return true;
    if($X == 82 && $a == 23) return true;
    if($X == 82 && $a == 32) return true;
    if($X == 82 && $a == 33) return true;
    if($X == 82 && $a == 34) return true;
    if($X == 83 && $a == 25) return true;
    if($X == 83 && $a == 26) return true;
    if($X == 83 && $a == 36) return true;
    if($X == 84 && $a == 26) return true;
    if($X == 85 && $a == 47) return true;
    if($X == 86 && $a == 46) return true;

    return false;
}

function adicionaDerivacao($X, $a){
    if($X == 52 && $a == 1) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];

        array_push($_SESSION['x'], new Linha(getCodigo('PROGRAM'), 'PROGRAM'));
        array_push($_SESSION['x'], new Linha(getCodigo('IDENTIFICADOR'), 'IDENTIFICADOR'));
        array_push($_SESSION['x'], new Linha(getCodigo(';'), ';'));
        array_push($_SESSION['x'], new Linha(getCodigo('BLOCO'), 'BLOCO'));
        array_push($_SESSION['x'], new Linha(getCodigo('.'), '.'));
    }

    if( ($X == 53 && $a == 2) || ($X == 53 && $a == 3) || ($X == 53 && $a == 4) || ($X == 53 && $a == 5) || ($X == 53 && $a == 6) ) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('DCLROT'), 'DCLROT'));
        array_push($_SESSION['x'], new Linha(getCodigo('DCLCONST'), 'DCLCONST'));
        array_push($_SESSION['x'], new Linha(getCodigo('DCLVAR'), 'DCLVAR'));
        array_push($_SESSION['x'], new Linha(getCodigo('DCLPROC'), 'DCLPROC'));
        array_push($_SESSION['x'], new Linha(getCodigo('CORPO'), 'CORPO'));
    }

    if($X == 54 && $a == 2) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('LABEL'), 'LABEL'));
        array_push($_SESSION['x'], new Linha(getCodigo('LID'), 'LID'));
        array_push($_SESSION['x'], new Linha(getCodigo(';'), ';'));
    }

    if($X == 55 && $a == 25) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('IDENTIFICADOR'), 'IDENTIFICADOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPIDENT'), 'REPIDENT'));
    }

    if($X == 56 && $a == 46) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo(','), ','));
        array_push($_SESSION['x'], new Linha(getCodigo('IDENTIFICADOR'), 'IDENTIFICADOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPIDENT'), 'REPIDENT'));
    }

    if($X == 57 && $a == 3) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('CONST'), 'CONST'));
        array_push($_SESSION['x'], new Linha(getCodigo('IDENTIFICADOR'), 'IDENTIFICADOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('='), '='));
        array_push($_SESSION['x'], new Linha(getCodigo('INTEIRO'), 'INTEIRO'));
        array_push($_SESSION['x'], new Linha(getCodigo(';'), ';'));
        array_push($_SESSION['x'], new Linha(getCodigo('LDCONST'), 'LDCONST'));
    }

    if($X == 58 && $a == 25) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('IDENTIFICADOR'), 'IDENTIFICADOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('='), '='));
        array_push($_SESSION['x'], new Linha(getCodigo('INTEIRO'), 'INTEIRO'));
        array_push($_SESSION['x'], new Linha(getCodigo(';'), ';'));
        array_push($_SESSION['x'], new Linha(getCodigo('LDCONST'), 'LDCONST'));
    }

    if($X == 59 && $a == 4) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('VAR'), 'VAR'));
        array_push($_SESSION['x'], new Linha(getCodigo('LID'), 'LID'));
        array_push($_SESSION['x'], new Linha(getCodigo(':'), ':'));
        array_push($_SESSION['x'], new Linha(getCodigo('TIPO'), 'TIPO'));
        array_push($_SESSION['x'], new Linha(getCodigo(';'), ';'));
        array_push($_SESSION['x'], new Linha(getCodigo('LDVAR'), 'LDVAR'));
    }

    if( ($X == 75 && $a == 24) || ($X == 75 && $a == 25) || ($X == 75 && $a == 26) || ($X == 75 && $a == 30) || ($X == 75 && $a == 31) || ($X == 75 && $a == 36) ) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
    }

    if( ($X == 77 && $a == 24) || ($X == 77 && $a == 25) || ($X == 77 && $a == 26) || ($X == 77 && $a == 30) || ($X == 77 && $a == 31) || ($X == 77 && $a == 36) ) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('EXPSIMP'), 'EXPSIMP'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPEXPSIMP'), 'REPEXPSIMP'));
    }

    if( ($X == 81 && $a == 24) || ($X == 81 && $a == 25) || ($X == 81 && $a == 26) || ($X == 81 && $a == 36) ) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('FATOR'), 'FATOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPTERMO'), 'REPTERMO'));
    }

    if( ($X == 54 && $a == 3) || 
        ($X == 54 && $a == 4) || 
        ($X == 54 && $a == 5) || 
        ($X == 54 && $a == 6) || 
        ($X == 56 && $a == 39) || 
        ($X == 54 && $a == 47) || 
        ($X == 57 && $a == 4) || 
        ($X == 57 && $a == 6) || 
        ($X == 54 && $a == 5) || 
        ($X == 54 && $a == 6) || 
        ($X == 58 && $a == 4) || 
        ($X == 58 && $a == 5) || 
        ($X == 58 && $a == 6) || 
        ($X == 59 && $a == 5) || 
        ($X == 59 && $a == 6) || 
        ($X == 60 && $a == 5) || 
        ($X == 60 && $a == 6) || 
        ($X == 62 && $a == 6) ||
        ($X == 63 && $a == 39) || 
        ($X == 65 && $a == 7) || 
        ($X == 73 && $a == 7) || 
        ($X == 73 && $a == 10) || 
        ($X == 73 && $a == 14) || 
        ($X == 73 && $a == 15) || 
        ($X == 73 && $a == 17) || 
        ($X == 73 && $a == 19) || 
        ($X == 73 && $a == 22) || 
        ($X == 73 && $a == 23) || 
        ($X == 73 && $a == 28) || 
        ($X == 73 && $a == 30) || 
        ($X == 73 && $a == 31) || 
        ($X == 73 && $a == 32) || 
        ($X == 73 && $a == 33) || 
        ($X == 66 && $a == 7) || 
        ($X == 66 && $a == 15) || 
        ($X == 66 && $a == 19) || 
        ($X == 66 && $a == 47) || 
        ($X == 68 && $a == 38) || 
        ($X == 69 && $a == 7) || 
        ($X == 69 && $a == 15) || 
        ($X == 69 && $a == 19) || 
        ($X == 73 && $a == 35) || 
        ($X == 73 && $a == 37) || 
        ($X == 73 && $a == 40) || 
        ($X == 73 && $a == 41) || 
        ($X == 73 && $a == 42) || 
        ($X == 73 && $a == 43) || 
        ($X == 73 && $a == 44) || 
        ($X == 73 && $a == 45) || 
        ($X == 73 && $a == 46) || 
        ($X == 73 && $a == 47) || 
        ($X == 74 && $a == 37) || 
        ($X == 78 && $a == 7) || 
        ($X == 78 && $a == 10) || 
        ($X == 78 && $a == 14) || 
        ($X == 78 && $a == 15) || 
        ($X == 78 && $a == 17) || 
        ($X == 78 && $a == 19) || 
        ($X == 78 && $a == 28) || 
        ($X == 78 && $a == 35) || 
        ($X == 78 && $a == 37) || 
        ($X == 82 && $a == 35) || 
        ($X == 82 && $a == 37) || 
        ($X == 82 && $a == 40) || 
        ($X == 82 && $a == 41) || 
        ($X == 82 && $a == 42) || 
        ($X == 82 && $a == 43) || 
        ($X == 82 && $a == 44) || 
        ($X == 82 && $a == 45) || 
        ($X == 82 && $a == 46) || 
        ($X == 82 && $a == 47) || 
        ($X == 69 && $a == 47) || 
        ($X == 70 && $a == 37) || 
        ($X == 71 && $a == 7) || 
        ($X == 71 && $a == 19) || 
        ($X == 71 && $a == 47) || 
        ($X == 80 && $a == 7) || 
        ($X == 80 && $a == 10) || 
        ($X == 80 && $a == 14) || 
        ($X == 80 && $a == 15) || 
        ($X == 80 && $a == 17) || 
        ($X == 80 && $a == 19) ||
        ($X == 80 && $a == 35) ||
        ($X == 80 && $a == 37) ||
        ($X == 80 && $a == 40) ||
        ($X == 80 && $a == 41) ||
        ($X == 80 && $a == 42) ||
        ($X == 80 && $a == 43) ||
        ($X == 80 && $a == 44) ||
        ($X == 80 && $a == 45) ||
        ($X == 80 && $a == 46) ||
        ($X == 80 && $a == 47) ||
        ($X == 82 && $a == 7) ||
        ($X == 82 && $a == 10) ||
        ($X == 82 && $a == 14) ||
        ($X == 82 && $a == 15) ||
        ($X == 82 && $a == 17) ||
        ($X == 82 && $a == 19) ||
        ($X == 82 && $a == 22) ||
        ($X == 82 && $a == 28) ||
        ($X == 82 && $a == 30) ||
        ($X == 82 && $a == 31) ||
        ($X == 78 && $a == 46) ||
        ($X == 78 && $a == 47) ||
        ($X == 76 && $a == 37) ||
        ($X == 80 && $a == 28) ||
        ($X == 85 && $a == 7) ||
        ($X == 86 && $a == 39)
    ) {
        array_shift($_SESSION['x']);
    }

    if( ($X == 79 && $a == 24) || ($X == 79 && $a == 25) || ($X == 79 && $a == 26) ) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('TERMO'), 'TERMO'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPEXP'), 'REPEXP'));
    }

    if($X == 60 && $a == 25) {
        //array_shift($_SESSION['x']);

        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('LID'), 'LID'));
        array_push($_SESSION['x'], new Linha(getCodigo(':'), ':'));
        array_push($_SESSION['x'], new Linha(getCodigo('TIPO'), 'TIPO'));
        array_push($_SESSION['x'], new Linha(getCodigo(';'), ';'));
        array_push($_SESSION['x'], new Linha(getCodigo('LDVAR'), 'LDVAR'));
    }
    if($X == 61 && $a == 8) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('INTEGER'), 'INTEGER'));
    }

    //Colocar lá em cima na outra função: Daqui para baixo
    if($X == 61 && $a == 9) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('ARRAY'), 'ARRAY'));
        array_push($_SESSION['x'], new Linha(getCodigo('['), '['));
        array_push($_SESSION['x'], new Linha(getCodigo('INTEIRO'), 'INTEIRO'));
        array_push($_SESSION['x'], new Linha(getCodigo('..'), '..'));
        array_push($_SESSION['x'], new Linha(getCodigo('INTEIRO'), 'INTEIRO'));
        array_push($_SESSION['x'], new Linha(getCodigo(']'), ']'));
        array_push($_SESSION['x'], new Linha(getCodigo('OF'), 'OF'));
        array_push($_SESSION['x'], new Linha(getCodigo('INTEGER'), 'INTEGER'));
    }
    if($X == 62 && $a == 5) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('PROCEDURE'), 'PROCEDURE'));
        array_push($_SESSION['x'], new Linha(getCodigo('IDENTIFICADOR'), 'IDENTIFICADOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('DEFPAR'), 'DEFPAR'));
        array_push($_SESSION['x'], new Linha(getCodigo(';'), ';'));
        array_push($_SESSION['x'], new Linha(getCodigo('BLOCO'), 'BLOCO'));
        array_push($_SESSION['x'], new Linha(getCodigo(';'), ';'));
        array_push($_SESSION['x'], new Linha(getCodigo('DCLPROC'), 'DCLPROC'));
    }
    if($X == 63 && $a == 36) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('('), '('));
        array_push($_SESSION['x'], new Linha(getCodigo('LID'), 'LID'));
        array_push($_SESSION['x'], new Linha(getCodigo(':'), ':'));
        array_push($_SESSION['x'], new Linha(getCodigo('INTEGER'), 'INTEGER'));
    }
    if($X == 64 && $a == 6) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('BEGIN'), 'BEGIN'));
        array_push($_SESSION['x'], new Linha(getCodigo('COMANDO'), 'COMANDO'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPCOMANDO'), 'REPCOMANDO'));
        array_push($_SESSION['x'], new Linha(getCodigo('END'), 'END'));
    }
    if($X == 65 && $a == 47) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo(';'), ';'));
        array_push($_SESSION['x'], new Linha(getCodigo('COMANDO'), 'COMANDO'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPCOMANDO'), 'REPCOMANDO'));
    }
    if($X == 66 && $a == 6) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('CORPO'), 'CORPO'));
    }
    if($X == 66 && $a == 11) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('CALL'), 'CALL'));
        array_push($_SESSION['x'], new Linha(getCodigo('IDENTIFICADOR'), 'IDENTIFICADOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('PARAMETROS'), 'PARAMETROS'));
    }
    if($X == 66 && $a == 12) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('GOTO'), 'GOTO'));
        array_push($_SESSION['x'], new Linha(getCodigo('IDENTIFICADOR'), 'IDENTIFICADOR'));
    }
    if($X == 66 && $a == 13) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('IF'), 'IF'));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
        array_push($_SESSION['x'], new Linha(getCodigo('THEN'), 'THEN'));
        array_push($_SESSION['x'], new Linha(getCodigo('COMANDO'), 'COMANDO'));
        array_push($_SESSION['x'], new Linha(getCodigo('ELSEPARTE'), 'ELSEPARTE'));
    }
    if($X == 66 && $a == 16) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('WHILE'), 'WHILE'));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
        array_push($_SESSION['x'], new Linha(getCodigo('DO'), 'DO'));
        array_push($_SESSION['x'], new Linha(getCodigo('COMANDO'), 'COMANDO'));
    }
    if($X == 66 && $a == 18) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('REPEAT'), 'REPEAT'));
        array_push($_SESSION['x'], new Linha(getCodigo('COMANDO'), 'COMANDO'));
        array_push($_SESSION['x'], new Linha(getCodigo('UNTIL'), 'UNTIL'));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
    }
    if($X == 66 && $a == 20) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('READLN'), 'READLN'));
        array_push($_SESSION['x'], new Linha(getCodigo('('), '('));
        array_push($_SESSION['x'], new Linha(getCodigo('VARIAVEL'), 'VARIAVEL'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPVARIAVEL'), 'REPVARIAVEL'));
        array_push($_SESSION['x'], new Linha(getCodigo(')'), ')'));
    }
    if($X == 66 && $a == 21) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('WRITELN'), 'WRITELN'));
        array_push($_SESSION['x'], new Linha(getCodigo('('), '('));
        array_push($_SESSION['x'], new Linha(getCodigo('ITEMSAIDA'), 'ITEMSAIDA'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPITEM'), 'REPITEM'));
        array_push($_SESSION['x'], new Linha(getCodigo(')'), ')'));
    }
    if($X == 66 && $a == 25) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('IDENTIFICADOR'), 'IDENTIFICADOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('RCOMID'), 'RCOMID'));
    }
    if($X == 66 && $a == 27) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('FOR'), 'FOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('IDENTIFICADOR'), 'IDENTIFICADOR'));
        array_push($_SESSION['x'], new Linha(getCodigo(':='), ':='));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
        array_push($_SESSION['x'], new Linha(getCodigo('TO'), 'TO'));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
        array_push($_SESSION['x'], new Linha(getCodigo('DO'), 'DO'));
        array_push($_SESSION['x'], new Linha(getCodigo('COMANDO'), 'COMANDO'));
    }
    if($X == 66 && $a == 29) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('CASE'), 'CASE'));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
        array_push($_SESSION['x'], new Linha(getCodigo('OF'), 'OF'));
        array_push($_SESSION['x'], new Linha(getCodigo('CONDCASE'), 'CONDCASE'));
        array_push($_SESSION['x'], new Linha(getCodigo('END'), 'END'));
    }
    if( ($X == 67 && $a == 34) || ($X == 67 && $a == 38) ) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('RVAR'), 'RVAR'));
        array_push($_SESSION['x'], new Linha(getCodigo(':='), ':='));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
    }
    if($X == 67 && $a == 39) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo(':'), ':'));
        array_push($_SESSION['x'], new Linha(getCodigo('COMANDO'), 'COMANDO'));
    }
    if($X == 68 && $a == 34) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('['), '['));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
        array_push($_SESSION['x'], new Linha(getCodigo(']'), ']'));
    }
    if($X == 69 && $a == 36) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('('), '('));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPPAR'), 'REPPAR'));
        array_push($_SESSION['x'], new Linha(getCodigo(')'), ')'));
    }
    if($X == 70 && $a == 46) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo(','), ','));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPPAR'), 'REPPAR'));
    }
    if($X == 71 && $a == 15) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('ELSE'), 'ELSE'));
        array_push($_SESSION['x'], new Linha(getCodigo('COMANDO'), 'COMANDO'));
    }
    if($X == 72 && $a == 25) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('IDENTIFICADOR'), 'IDENTIFICADOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('VARIAVEL1'), 'VARIAVEL1'));
    }
    if($X == 73 && $a == 34) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('['), '['));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
        array_push($_SESSION['x'], new Linha(getCodigo(']'), ']'));
    }
    if($X == 74 && $a == 46) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo(','), ','));
        array_push($_SESSION['x'], new Linha(getCodigo('VARIAVEL'), 'VARIAVEL'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPVARIAVEL'), 'REPVARIAVEL'));
    }
    if($X == 75 && $a == 48) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('LITERAL'), 'LITERAL'));
    }
    if($X == 76 && $a == 46) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo(','), ','));
        array_push($_SESSION['x'], new Linha(getCodigo('ITEMSAIDA'), 'ITEMSAIDA'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPITEM'), 'REPITEM'));
    }
    if($X == 78 && $a == 40) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('='), '='));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPSIMP'), 'EXPSIMP'));
    }
    if($X == 78 && $a == 41) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('>'), '>'));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPSIMP'), 'EXPSIMP'));
    }
    if($X == 78 && $a == 42) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('>='), '>='));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPSIMP'), 'EXPSIMP'));
    }
    if($X == 78 && $a == 43) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('<'), '<'));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPSIMP'), 'EXPSIMP'));
    }
    if($X == 78 && $a == 44) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('<='), '<='));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPSIMP'), 'EXPSIMP'));
    }
    if($X == 78 && $a == 45) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('!='), '!='));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPSIMP'), 'EXPSIMP'));
    }
    if( ($X == 79 && $a == 30) || ($X == 80 && $a == 30) ) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('+'), '+'));
        array_push($_SESSION['x'], new Linha(getCodigo('TERMO'), 'TERMO'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPEXP'), 'REPEXP'));
    }
    if( ($X == 79 && $a == 31) || ($X == 80 && $a == 31) ) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('-'), '-'));
        array_push($_SESSION['x'], new Linha(getCodigo('TERMO'), 'TERMO'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPEXP'), 'REPEXP'));
    }
    if($X == 79 && $a == 36) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('TERMO'), 'TERMO'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPEXP'), 'REPEXP'));
    }
    if($X == 80 && $a == 22) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('OR'), 'OR'));
        array_push($_SESSION['x'], new Linha(getCodigo('TERMO'), 'TERMO'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPEXP'), 'REPEXP'));
    }
    if($X == 82 && $a == 23) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('AND'), 'AND'));
        array_push($_SESSION['x'], new Linha(getCodigo('FATOR'), 'FATOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPTERMO'), 'REPTERMO'));
    }
    if($X == 82 && $a == 32) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('*'), '*'));
        array_push($_SESSION['x'], new Linha(getCodigo('FATOR'), 'FATOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPTERMO'), 'REPTERMO'));
    }
    if($X == 82 && $a == 33) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('/'), '/'));
        array_push($_SESSION['x'], new Linha(getCodigo('FATOR'), 'FATOR'));
        array_push($_SESSION['x'], new Linha(getCodigo('REPTERMO'), 'REPTERMO'));
    }
    if($X == 82 && $a == 34) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('NOT'), 'NOT'));
        array_push($_SESSION['x'], new Linha(getCodigo('FATOR'), 'FATOR'));
    }
    if($X == 83 && $a == 25) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('VARIAVEL'), 'VARIAVEL'));
    }
    if($X == 83 && $a == 26) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('INTEIRO'), 'INTEIRO'));
    }
    if($X == 83 && $a == 36) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('('), '('));
        array_push($_SESSION['x'], new Linha(getCodigo('EXPRESSAO'), 'EXPRESSAO'));
        array_push($_SESSION['x'], new Linha(getCodigo(')'), ')'));
    }
    if($X == 84 && $a == 26) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo('INTEIRO'), 'INTEIRO'));
        array_push($_SESSION['x'], new Linha(getCodigo('RPINTEIRO'), 'RPINTEIRO'));
        array_push($_SESSION['x'], new Linha(getCodigo(':'), ':'));
        array_push($_SESSION['x'], new Linha(getCodigo('COMANDO'), 'COMANDO'));
        array_push($_SESSION['x'], new Linha(getCodigo('CONTCASE'), 'CONTCASE'));
    }
    if($X == 85 && $a == 47) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo(';'), ';'));
        array_push($_SESSION['x'], new Linha(getCodigo('CONDCASE'), 'CONDCASE'));
    }
    if($X == 86 && $a == 46) {
        //array_shift($_SESSION['x']);
        $_SESSION['x'] = [];
        array_push($_SESSION['x'], new Linha(getCodigo(','), ','));
        array_push($_SESSION['x'], new Linha(getCodigo('INTEIRO'), 'INTEIRO'));
        array_push($_SESSION['x'], new Linha(getCodigo('RPINTEIRO'), 'RPINTEIRO'));
    }
}