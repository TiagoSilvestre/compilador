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
                $this->printError('Identificador já declarado');
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
			array_push($this->variaveisTMP, $value->sentenca);
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
        echo 'sentenca: '.$value.'<br>';
        foreach ($_SESSION['s'] as $key => $val) {
           // echo 'foreachhh: '.$val->sentenca.'<br>';
            print_r($val);
            // if($val->sentenca === $value){
            //     echo "é truee<br>";
            //     return true;
            // }
        }
        echo "é falseooo<br>";
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
