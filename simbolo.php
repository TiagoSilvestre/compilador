<?php
class Simbolo {
	
	public $nome;
    public $categoria;
    public $tipo;
    public $nivel;

    public function __construct($nome, $categoria, $tipo, $nivel) {
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->tipo = $tipo;
        $this->nivel = $nivel;
    }
}
