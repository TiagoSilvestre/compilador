<?php
class Linha {
	
	public $codigo;
    public $sentenca;

    public function __construct($codigo, $sentenca) {
        $this->codigo = $codigo;
        $this->sentenca = $sentenca;
    }
}
