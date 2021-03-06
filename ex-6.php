<?php

//Receba os valores em x e y. Efetua a troca de seus valores e mostre seus conteúdos.

$x = readline("Digite o valor x ");
$y = readline("Digite o valor y ");

$aux = $x;
$x = $y;
$y = $aux;

echo "O valor de x é ". $x.PHP_EOL;
echo "O valor de y é " . $y;