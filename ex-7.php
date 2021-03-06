<?php

//Receba os valores do comprimento, largura e altura de um paralelepípedo.
//Calcule e mostre seu volume.

$a = readline("digite o comprimento ");
$b = readline("digite a largura ");
$c = readline("digite a altura ");

$v = $a*$b*$c;

echo "O valor do volume " . $v;