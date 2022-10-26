<?php

// DESCRIPTION:
// CHALLENGE CODE WARS
// Build a function that returns an array of integers from N to 1 where n > 0.
// Construa uma função que retorne um array de inteiros de N ate 1 onde N > 0

// Example : n=5 --> [5,4,3,2,1]

 function imprimeNumeros(int $variavel) 
{
    $number = [];

    for ($i =1 ; $i < $variavel; $i ++){

        $number[$i] = $variavel - $i;
            array_push($number, $i); 
        
    }

    return $number;

    // echo (imprimeNumeros (1));
}

