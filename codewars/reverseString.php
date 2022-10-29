<?php

// Complete the solution so that it reverses the string passed into it.
// Complete a solução para que ela inverta a string passada para ela.
// 'world'  =>  'dlrow'
// 'word'   =>  'drow'

// function solution($str){
//     $reverseString = "";
//     $count = strlen($str)-1;
//     for($i = $count; $i >= 0; $i--){
//         $reverseString.=$str[$i];
//     }
//     return $reverseString;
// }

$palavra = readline("input: ");

function reverte ($palavra)
{
    $array_palavra = str_split($palavra); // transforma a string em array
    $palavraReversa = array_reverse($array_palavra); // reverte a ordem do array 
    echo implode(", ", $palavraReversa); // transforma a string em array
}
reverte($palavra);
