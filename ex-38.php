<?php

//Receba 100 números inteiros reais. Verifique e mostre o maior e o menor
//valor. Obs.: somente valores positivos.

$n1 = readline("digite o numero ");

$maior = $n1;
$menor = $n1;

$i = 1;

while($i < 5){
   $n1 = readline("Digite o numero ");
    $i++;

    if($n1 > $maior){
        $maior = $n1;
    }
    if($n1 < $menor){
        $menor = $n1;
    }
}

echo $maior. PHP_EOL. $menor;



for($i = 1; $i < 5; $i++){
    $n1 = readline("Digite o numero ");

    if($n1 > $maior){
        $maior = $n1;
    }
    if($n1 < $menor){
        $menor = $n1;
    }
}

echo $maior. PHP_EOL. $menor;
