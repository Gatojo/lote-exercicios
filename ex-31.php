<?php

//Calcule e mostre o quadrado dos números entre 10 e 150.

for($i = 10; $i <= 150; $i++){
    $resultado = $i*$i;
    echo "$resultado". PHP_EOL;
}

$i = 10;

while($i <= 150){
    $valor = $i*$i;
    echo "$valor".PHP_EOL;
}