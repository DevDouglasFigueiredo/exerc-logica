<?php

// Escreva uma função que aceite um inteiro (n) e uma string (s) como parâmetros e retorne uma string de (s) vezes repetidas exatamente (n).

// Exemplos (entrada -> saída)
// 6, "I"     -> "IIIIII"
// 5, "Hello" -> "HelloHelloHelloHelloHello"

// $word = readline("insira a palavra\n ");
// $repeat = readline("qts vezes quer repetir ?\n ");

function repeatStr($n, $str)
{
  $result = "";
    for($i = 0; $i < $n; $i++){
      $result = $result . $str;
    }
  return $result;

}





