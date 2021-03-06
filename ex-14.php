<?php

//Receba 2ângulos de um triângulo. Calcule e mostre o valor do 3º ângulo.

$anguloUm = readline("digite o valor do angulo um ");

$anguloDois = readline("digite o valor do angulo dois ");

$x = $anguloUm + $anguloDois;

$anguloTres = 180 - $x;

echo "o valor do angulo tres é " . $anguloTres;