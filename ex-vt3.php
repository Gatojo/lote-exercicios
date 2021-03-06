<?php

//Criar e coletar valores inteiros nos vetores VT1[3] e VT2[3]. Concatenar
//esses valores em um 3º vetor (VT3[6]) e mostrar os seus dados. P. ex:
//VT1| 1| 2| 3| |VT2| 4| 5| 6| |VT3| 1| 2| 3| 4| 5| 6

$vt1 = [];
$vt2 = [];
$vt3 = [];

    for($i = 0; $i < 3; $i++){
            $vt1 [$i] = readline("Digite o numero ");
        }
    for($i = 0; $i < 3; $i++){
            $vt2[$i] = readline("Digite o numero ");
        }
    for($i = 0; $i < 3; $i++){
            $vt3[$i] = $vt1[$i];
            $vt3[$i + 3] = $vt2[$i];
        }
for($i = 0; $i < 6; $i++){
    echo "posiçao: ". $i . ": ". $vt3[$i].PHP_EOL;    
}
        
