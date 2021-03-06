<?php

//Receba 2 valores reais. Calcule e mostre o maior deles

$v1 = readline("digite v1: ");
$v2 = readline("digite v2: ");

$resultado = $v1 - $v2;

if($resultado > 0){
    echo "O maior deles é " . $v1;
}else{
    echo "O maior deles é " . $v2;
}