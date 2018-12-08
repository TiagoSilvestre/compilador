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
    public $call = false;    

    public $saveTipe = false;
    public $saveParam = false;
    
    public $variaveisTMP = [];
    public $variaveisTMP2 = [];
    public $nivelZero = true;
    public $saveProcedureTypeParam = false;
    public $saveTypeParam = false;
    public $verificaTipoParametro = false;

    public $currentProcedureName;

    public function __construct() {
        $this->nivel = 0;
    }


    public function verifica($value) {

        // ***** ALTERACOES DE NÍVEL *****
        // BEGIN
        if($value->sentenca == 'BEGIN' && $this->nivel == 0) {
            $this->nivel++;
        }
        // if(($value->sentenca == 'BEGIN' && $this->nivel != 1) || $value->sentenca == 'THEN' || $value->sentenca == 'ELSE') {
        //     $this->nivel++;
        // }
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
            $this->saveTipe = false;
            return;
        }


        // PROCEDURE
		if($value->sentenca == 'PROCEDURE') {
			$this->procedure = true;
		}

        if($value->sentenca == ':' && $this->saveProcedureTypeParam){
            $this->saveTypeParam = true;
        }


        if($this->saveTypeParam && $value->sentenca != ':'){
            array_push($_SESSION['s'], new Simbolo($this->variaveisTMP2[0], 'parâmetro', $value->sentenca, $this->nivel));
            $this->saveProcedureTypeParam = false;
            $this->saveTypeParam = false;
            $this->variaveisTMP2 = [];
            return;
        }        

        if($value->codigo == 25 && $this->procedure) {
            if($this->verificaSeEstaNaTabela($value) && !$this->saveParam){
                $this->printError('Identificador (' . $value->sentenca . ') já declarado - procedure');
            }else {
                if($this->saveParam){
                    if(!$this->saveProcedureTypeParam) {
                        array_push($this->variaveisTMP2, $value->sentenca);
                        $this->saveProcedureTypeParam = true;
                        return;
                    } 
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




        // CALL
		if($value->sentenca == 'CALL') {
			$this->call = true;
		}


		if($this->call && $value->codigo == 25) {
			 $this->currentProcedureName = $value->sentenca;
		}


        if($value->sentenca == '(' && $this->call) {
            $this->verificaTipoParametro = true;
		}

        if($this->verificaTipoParametro && $value->sentenca != '('){
            $this->verificaTipoDoParametro($value->sentenca);

        }

		if($this->call && $value->sentenca === ')') {        
            $this->call = false;
            $this->verificaTipoParametro = false;
        }
 

        // VERIFICAÇAO
        if($value->codigo == 25 && !$this->var && !$this->label && !$this->const && !$this->procedure) {
            if($this->verificaTabelaEnivel($value)) {
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


    public function verificaTipoDoParametro($value) {
        $parametroType = $value;
        $procedureType;

        if(!empty($_SESSION['s'])) {
            foreach ($_SESSION['s'] as $key => $tabelaVal) {
                if($tabelaVal->nome === $value){
                   // $aux = $_SESSION['s'][$key]['tipo'];
                   $parametroType = 't222e';
                   $parametroType = $tabelaVal->tipo;
                }
                if($tabelaVal->nome === $this->currentProcedureName){
                    $procedureType = $tabelaVal->tipo;
                }
            }
        }
        if($parametroType === $procedureType) {
            return true;
        }
        $tttt = $parametroType. " === ". $procedureType;
        array_push($_SESSION['teste'], $tttt);
        return false;
    }

    public function verificaTabelaEnivel($value) {
        $_SESSION['printaTabela'] = true;
        if(!empty($_SESSION['s'])) {
            foreach ($_SESSION['s'] as $key => $tabelaVal) {
                if($tabelaVal->nome === $value->sentenca && $tabelaVal->nivel <= $this->nivel){
                    return true;
                }
            }
        }
        return false;
    }


    public function verificaSeEstaNaTabela($value) {
        if(!empty($_SESSION['s'])) {
            foreach ($_SESSION['s'] as $key => $tabelaVal) {
                // $tttt = "Nome: " . $tabelaVal->nome . ' ' .
                //         "Sentença:" . $value->sentenca . ' ' . 
                //         "Nivel tabela: " . $tabelaVal->nivel . ' ' . 
                //         "Nivel atual: " . $this->nivel;
                // array_push($_SESSION['teste'], $tttt);

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
