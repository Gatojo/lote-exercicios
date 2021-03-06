<?php

//Receba 2 valores inteiros e diferentes. Mostre seus valores em ordem
//crescente

$v1 = readline("digite o valor um ");
$v2 = readline("digite o valor dois ");

if($v1 == $v2){
    echo "proibido valor igual";
}else{
    if($v1 < $v2){
        echo  $v1 . "," . $v2;
    }else{
        echo  $v2 . "," . $v1;
    }
}