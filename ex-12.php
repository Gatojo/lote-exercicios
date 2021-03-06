<?php

//Receba o ano de nascimento e o ano atual. Calcule e mostre a sua idade e
//quantos anos terá daqui a 17 anos.

$nascimento = readline("Digite sua data de nascimento ");
$atual = readline("Digite o ano atual ");

$idade = ($atual - $nascimento);
$idadeNova = $idade + 17;

echo "Voce tem " . $idade . " anos " . PHP_EOL;
echo "Voce tera " . $idadeNova . " anos ";