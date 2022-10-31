<?php

// Nesta tarefa simples, você recebe um número e deve torná-lo negativo. Mas talvez o número já seja negativo?

// Exemplos
// makeNegative(1)    // return -1
// makeNegative(-5)   // return -5
// makeNegative(0)    // return 0
// makeNegative(0.12) // return -0.12

// Notas
// O número já pode ser negativo e, nesse caso, nenhuma alteração é necessária.
// Zero (0) não é verificado para nenhum sinal específico. Zeros negativos não fazem sentido matemático.

function makeNegative($num)
{
    if($num < 0 )
        return $num;
     else {
        return $num - ($num * 2);
    }
}

echo makeNegative(120).PHP_EOL;