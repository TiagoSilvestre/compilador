<?php
include 'simbolo.php';

class TabelaDeSimbolos {
	
	public $nome;
    public $categoria;
    public $tipo;
    public $nivel;

    public $program = false;
    public $var = false;

    public $saveTipe = false;
    public $variaveisTMP = [];

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
            }
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
            $this->var = false;
        }
        if($value->codigo == 25 && !$this->verificaSeEstaNaTabela($value->sentenca) && !$this->var) {
            $this->printError('Identificador (' . $value->sentenca . ') NÂO declarado');
        }


        // BEGIN
        if($value->sentenca == 'BEGIN') {
            $this->nivel++;
        }
        // END
        if($value->sentenca == 'END') {
            $this->nivel--;
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




    public function printError($text) {
        $_SESSION['error'] = $text;
		$_SESSION['color'] = 'red';
        header("Location: index.php");
    }

    public function busca() {

    }
}
