<?php

//Receba os 2 números inteiros. Calcule e mostre a soma dos quadrados.

$um = readline("digite o valor de um ");
$dois = readline("digite o valor de dois ");

$valor = pow($um,2) + pow($dois,2);

echo "a soma dos quadrados é " . $valor;