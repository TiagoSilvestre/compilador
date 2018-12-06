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
    public $variaveisTMP = [];
    public $nivelZero = true;

    public function __construct() {
        $this->nivel = 0;
    }


    public function verifica($value) {
        // PROGRAM
    	if($value->sentenca == 'PROGRAM') {
			$this->program = true;
		}
        if($value->codigo == 25 && $this->program) {
            if($this->verificaSeEstaNaTabela($value->sentenca)){
                $this->printError('Identificador (' . $value->sentenca . ') já declarado');
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
            if($this->verificaSeEstaNaTabela($value->sentenca) || $this->verificaTMP($value->sentenca)){
                $this->printError('Identificador (' . $value->sentenca . ') já declarado');
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
            if($this->verificaSeEstaNaTabela($value->sentenca) || $this->verificaTMP($value->sentenca)){
                $this->printError('Identificador (' . $value->sentenca . ') já declarado');
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
            if($this->verificaSeEstaNaTabela($value->sentenca) || $this->verificaTMP($value->sentenca)){
                $this->printError('Identificador (' . $value->sentenca . ') já declarado');
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
            if($this->verificaSeEstaNaTabela($value->sentenca)){
                $this->printError('Identificador (' . $value->sentenca . ') já declarado');
            }else {
                array_push($_SESSION['s'], new Simbolo($value->sentenca, 'procedure', 'PROCEDURE', $this->nivel));
                $this->program = false;
                return;
            }
        }

 

        // VERIFICAÇAO
        if($value->codigo == 25 && !$this->var && !$this->label && !$this->const) {
            if($this->verificaSeEstaNaTabela($value->sentenca)) {
                // verifica o nivel
                if($this->verificaNivel($value->sentenca)) {
                    $this->printError('Identificador (' . $value->sentenca . ') fora de escopo');
                }
            } else { 
                $this->printError('Identificador (' . $value->sentenca . ') NÂO declarado');
            }
        }

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
    } 


    public function verificaSeEstaNaTabela($value) {
        if(!empty($_SESSION['s'])) {
            foreach ($_SESSION['s'] as $key => $val) {
                if($val->nome === $value){
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
