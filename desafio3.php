<?php

echo PHP_EOL . "-------- CÁLCULO DE IMC --------" . PHP_EOL;

$nome = "Maria";
$peso = 59;
$altura = 1.75;

$imc = $peso / $altura ** 2;

echo "Nome: $nome" . PHP_EOL . "Peso: $peso" . PHP_EOL . "Altura: $altura" . PHP_EOL;
echo "IMC: $imc" . "\n \nResultado: ";


if($imc < 18.5) {
    echo "Abaixo do peso!";
} else if ($imc >= 18.5 && $imc < 25) {
    echo "Peso Normal";
} else if ($imc >= 25 && $imc < 30) {
    echo "Sobre o peso";
} else if ($imc >= 30 && $imc < 35) {
    echo "Obesidade Grau I";
} else if ($imc >= 35 && $imc < 40) {
    echo "Obesidade Grau II";
} else if ($imc >= 40) {
    echo "Obesidade Grau III";
}