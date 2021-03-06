<?php
    //Criar e coletar um vetor [100] inteiro e exibir:
    //a. O maior e o menor valor;
    //b. A média dos valores.

$vetor = [];
$media = 0;

for($i = 0; $i < 5; $i++){
    $vetor[$i] = readline("Digite um numero ");
    $media = $media + $vetor[$i];
}

$maior = $vetor [0];
$menor = $vetor [0];

for($i = 1; $i < 5; $i++){
    if($vetor [$i] > $maior){
        $maior = $vetor [$i];
    }
    if($vetor [$i] < $menor){
        $menor = $vetor [$i];
    }
}

$media = $media /5;
echo $maior. PHP_EOL. $menor. PHP_EOL. (int)$media;

