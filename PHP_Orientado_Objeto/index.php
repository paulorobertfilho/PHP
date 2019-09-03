<?php

require "Pessoa.php";
require "Programador.php";

#$pessoa = new Pessoa("Paulo");
$programador = new Programador("Paulo","JS");
#var_dump($uma_pessoa);

#echo $pessoa->getNome();

echo $programador->getNome();

#constantes
echo $programador::ESPECIE;
