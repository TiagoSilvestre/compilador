<?php
include 'simbolo.php';

class TabelaDeSimbolos {
	
	public $nome;
    public $categoria;
    public $tipo;
    public $nivel;

    public $program = false;
    public $var = false;
    public $label = false;
    public $const = false;
    public $procedure = false;

    public $saveTipe = false;
    public $saveParam = false;
    
    public $variaveisTMP = [];
    public $nivelZero = true;

    public function __construct() {
        $this->nivel = 0;
    }


    public function verifica($value) {

        // ***** ALTERACOES DE NÍVEL *****
        // BEGIN
        if($value->sentenca == 'BEGIN' && $this->nivel == 0) {
            $this->nivel++;
        }
        // END
        if($value->sentenca == 'END') {
            $this->nivel--;
        }
        //PROCEDURE
        if($value->sentenca == 'PROCEDURE') {
            $this->nivel++;
        }  


        // PROGRAM
    	if($value->sentenca == 'PROGRAM') {
			$this->program = true;
		}
        if($value->codigo == 25 && $this->program) {
            if($this->verificaSeEstaNaTabela($value)){
                $this->printError('Identificador (' . $value->sentenca . ') já declarado - program');
            }else {
                array_push($_SESSION['s'], new Simbolo($value->sentenca, 'variavel', 'PROGRAM', $this->nivel));
                $this->program = false;
                return;
            }
        }


        // LABEL
		if($value->sentenca == 'LABEL') {
			$this->label = true;
		}
        if($value->codigo == 25 && $this->label) {
            if($this->verificaSeEstaNaTabela($value) || $this->verificaTMP($value->sentenca)){
                $this->printError('Identificador (' . $value->sentenca . ') já declarado - label');
            } else {
			    array_push($this->variaveisTMP, $value->sentenca);
            }
        }
		if($value->sentenca == ';' && $this->label) {
			foreach ($this->variaveisTMP as $key => $val) {
				array_push($_SESSION['s'], new Simbolo($val, 'variavel', 'LABEL', $this->nivel));
			}
            $this->variaveisTMP = [];
            $this->label = false;
            return;
		}


        // CONST
		if($value->sentenca == 'CONST') {
			$this->const = true;
		}
        if($value->codigo == 25 && $this->const) {
            if($this->verificaSeEstaNaTabela($value) || $this->verificaTMP($value->sentenca)){
                $this->printError('Identificador (' . $value->sentenca . ') já declarado - const');
            } else {
			    array_push($this->variaveisTMP, $value->sentenca);
            }
        }
		if($value->sentenca == 'VAR' && $this->const) {
			foreach ($this->variaveisTMP as $key => $val) {
				array_push($_SESSION['s'], new Simbolo($val, 'variavel', 'CONST', $this->nivel));
			}
            $this->variaveisTMP = [];
            $this->const = false;
            $this->var = true;
            return;
		}


        // VAR
		if($value->sentenca == 'VAR') {
			$this->var = true;
		}
		if($value->codigo == 25 && $this->var) {
            if($this->verificaSeEstaNaTabela($value) || $this->verificaTMP($value->sentenca)){
                $this->printError('Identificador (' . $value->sentenca . ') já declarado - var');
            } else {
			    array_push($this->variaveisTMP, $value->sentenca);
            }
		}
		if($value->sentenca == ':' && $this->var) {
            $this->saveTipe = true;
		}
        if($this->saveTipe && $value->sentenca == 'INTEGER') {
			foreach ($this->variaveisTMP as $key => $val) {
				array_push($_SESSION['s'], new Simbolo($val, 'variavel', 'INTEGER', $this->nivel));
			}
            $this->variaveisTMP = [];
            $this->var = false;
            return;
        }


        // PROCEDURE
		if($value->sentenca == 'PROCEDURE') {
			$this->procedure = true;
		}

        if($value->codigo == 25 && $this->procedure) {
            if($this->verificaSeEstaNaTabela($value)){
                $this->printError('Identificador (' . $value->sentenca . ') já declarado - procedure');
            }else {
                if($this->saveParam){
                    array_push($_SESSION['s'], new Simbolo($value->sentenca, 'parâmetro', 'PARAMETRO', $this->nivel));
                } else {
                    array_push($_SESSION['s'], new Simbolo($value->sentenca, 'procedure', 'PROCEDURE', $this->nivel));
                    $this->saveParam = true;
                    return;
                }
            }
        }

        if($value->sentenca == ';' && $this->procedure) {
            $this->procedure = false;
            $this->saveParam = false;
		}

 

        // VERIFICAÇAO
        if($value->codigo == 25 && !$this->var && !$this->label && !$this->const && !$this->procedure) {
            if($this->verificaSeEstaNaTabela($value)) {
                // verifica o nivel
                if($this->verificaNivel($value->sentenca)) {
                    $this->printError('Identificador (' . $value->sentenca . ') fora de escopo');
                }
            } else { 
                $_SESSION['printaTabela'] = true;
                $this->printError('Identificador (' . $value->sentenca . ') NÂO declarado');
            }
        }

            
    } 


    public function verificaSeEstaNaTabela($value) {
        $_SESSION['teste'] = $value;
        if(!empty($_SESSION['s'])) {
            foreach ($_SESSION['s'] as $key => $tabelaVal) {
                $_SESSION['teste'] = $tabelaVal->nome.' ';
                if($tabelaVal->nome === $value->sentenca && $tabelaVal->nivel === $this->nivel){
                    
                    return true;

                }
            }
        }
        return false;
    }

    public function verificaTMP($value) {
        if(!empty($this->variaveisTMP)) {
            foreach ($this->variaveisTMP as $key => $val) {
                if($val === $value){
                    return true;
                }
            }            
        }
        return false;
    }

    public function verificaNivel($value) {
        if(!empty($_SESSION['s'])) {
            foreach ($_SESSION['s'] as $key => $val) {
                if($val->nome === $value && $val->nivel <= $this->nivel){
                    return false;
                }
            }            
        }
        return true;
    }
    



    public function printError($text) {
        $_SESSION['error'] = $text;
		$_SESSION['color'] = 'red';
        header("Location: index.php");
        exit;
    }

    public function busca() {

    }
}
