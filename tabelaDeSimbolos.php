<?php
class TabelaDeSimbolos {
	
	public $nome;
    public $categoria;
    public $tipo;
    public $nivel;

    public $program;

    public function __construct() {
        // $this->nome = $nome;
        // $this->categoria = $categoria;
        // $this->tipo = $tipo;
        $this->nivel = 0;
    }


    public function verifica($value) {
    	if($value->sentenca == 'PROGRAM') {
			$this->program = true;
		}
    } 


    public function addNaTabela() {



        $_SESSION['error'] = 'ERRO: add tabelaaa';
		$_SESSION['color'] = 'red';
        header("Location: index.php");
    }

    public function busca() {

    }
}
