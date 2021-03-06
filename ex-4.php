<?php

//Receba a temperatura em graus Celsius. Calcule e mostre a sua 
//temperatura convertida em fahrenheit F = (9*C+160) /5.

$c = readline("digite os graus Celsius ");
$f = (9*$c+160)/5;

echo "A temperatura em fahrenheit " . $f;
