<?php

class Pessoa{
	protected $nome;
	const ESPECIE = "Humana";

	public function __construct($tempNome)
	{
		$this->nome = $tempNome;
	}

	public function setNome($novoNome)	{
			$this->nome = $novoNome;
	}
	public function getNome()	{
		return $this->nome;
	}
}
