<?php

//Receba 2 valores inteiros. Calcule e mostre o resultado da diferença do
//maior pelo menos valor.

$v1 = readline("digite v1: ");
$v2 = readline("digite v2: ");

if ($v1 > $v2){
    $resultado = $v1 - $v2;
}else{
    $resultado = $v2 - $v1;
}

echo "A diferença é " . $resultado;