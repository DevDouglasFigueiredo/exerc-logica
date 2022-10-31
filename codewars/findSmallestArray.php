<?php
// Dada uma matriz de inteiros, sua solução deve encontrar o menor inteiro.

// Por exemplo:

// Dado [34, 15, 88, 2]que sua solução retornará2
// Dado [34, -345, -1, 100]que sua solução retornará-345
// Você pode assumir, para o propósito deste kata, que o array fornecido não estará vazio.

$arr = [5, 8, 6, 2, 1, -11];


function smallestInteger ($arr)
{
    return min($arr);
}
echo smallestInteger($arr).PHP_EOL;