<?php

//Criar e coletar um vetor [50] inteiro. Calcular e exibir:
//a. A média dos valores entre 10 e 200;
//b. A soma dos números ímpares.

$vt1 = [];
$media = 0;
$soma = 0;
$contador = 0;

for($i = 0; $i < 5; $i++){
    $vt1 [$i] = readline("digite o numero ");

    if($vt1 [$i] >= 10 && $vt1 [$i] <= 200){
        $media = $media + $vt1[$i];
        $contador = $contador + 1;
    }
    $resto = $vt1 [$i] % 2;

    if($resto == 1){
        $soma = $soma + $vt1 [$i];
    }
}

echo $soma.PHP_EOL;
$media = $media /$contador;
echo $media;