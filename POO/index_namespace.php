<?php
require 'namespace1.php';
require 'namespace2.php';
require 'classes/matematica/basico.php';

$a = new class1\MinhaClasse();
echo $a->testar();

use classes\matematica\Basico as Basico;
$basico = new Basico();