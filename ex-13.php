<?php

//Receba a quantidade de alimento em quilos. Calcule e mostre quantos dias
//durará esse alimento sabendo que a pessoa consome 50g ao dia.

$quilos = readline("digite a quantidade de alimento em quilos ");

$gramas = $quilos * 1000;

$dias = $gramas/50;

echo "Os alimentos vão durar " . $dias . " dias";