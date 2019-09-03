<?php

class Programador extends Pessoa{
	public $linguagem;

	public function __construct($tempNome, $tempLinguagem)
	{
		$this->nome = $tempNome;
		$this->linguagem = $tempLinguagem;

		echo"<br>Obj ".__CLASS__." instanciado.<br>";
	}
}
