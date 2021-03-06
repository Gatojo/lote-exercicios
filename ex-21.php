<?php

//Receba 4 notas bimestrais de um aluno. Calcule e mostre a média aritmética.
//Mostre a mensagem de acordo com a média:

$n1 = readline("Digite sua nota um ");
$n2 = readline("Digite sua nota dois ");
$n3 = readline("Digite sua nota tres ");
$n4 = readline("Digite sua nota quatro ");

$soma = ($n1 + $n2 + $n3 + $n4) /4;

if($soma >= 6.0){
    echo "APROVADO". PHP_EOL;
    echo ($soma);
}else{
    if($soma >= 3.0 && $soma < 6.0){
        echo "EXAME". PHP_EOL;
        echo($soma);
    }else{
        if($soma < 3.0){
            echo "RETIDO". PHP_EOL;
            echo ($soma);
        }
    }
}