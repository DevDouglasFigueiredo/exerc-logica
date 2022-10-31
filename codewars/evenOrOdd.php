<?php

//Crie uma função que receba um inteiro como argumento e retorne "Even"para números pares ou "Odd"ímpares.

function evenOrOdd (int $n)
{
    return $n % 2 == 0 ? "Even" : "Odd";
}

echo evenOrOdd(8).PHP_EOL;
