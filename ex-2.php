<?php

//Receba o salário de um funcionário e mostre o novo salário com reajuste de 15%.


$salario = readline("digite o salario ");
$novoSalario = $salario + ($salario*0.15);

echo "Seu salario é igual ". $novoSalario;