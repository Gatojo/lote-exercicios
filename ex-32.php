<?php

//Receba um número inteiro. Calcule e mostre o seu fatorial

$n1 = readline("digite o numero ");

$fatorial = 1;

// while($n1 > 1){
//     $fatorial = $fatorial * $n1;
//     $n1--;
// }

// echo "$fatorial". PHP_EOL;

for($i = 1; $i <= $n1; $i++){
    $fatorial =  $fatorial * $i;
}

echo "$fatorial". PHP_EOL;