<?php

// Quem se lembra de seu tempo no pátio da escola, quando as meninas pegavam uma flor e rasgavam suas pétalas, dizendo cada uma das seguintes frases cada vez que uma pétala era rasgada:

// "Eu te amo"
// "um pouco"
// "muito"
// "apaixonadamente"
// "loucamente"
// "de jeito nenhum"
// Se houver mais de 6 pétalas, você começa com "I love you"7 pétalas, "a little"8 pétalas e assim por diante.

// Quando a última pétala foi rasgada, houve gritos de excitação, sonhos, pensamentos e emoções surgindo.

// Seu objetivo neste kata é determinar qual frase as meninas diriam na última pétala para uma flor de um determinado número de pétalas. O número de pétalas é sempre maior que 0.

function how_much_i_love_you(int $nb_petals): string {
    // Your code here
    $var = $nb_petals % 6;
    
    switch($var){
        case 1:
          return "Eu te amo";
        break;
        case 2:
          return "um pouco";
        break;
         case 3:
          return "muito";
        break;
         case 4:
          return "apaixonadamente";
        break;
         case 5:
          return "loucamente";
        break;
         case 6:
          return "de jeito nenhum";
        break;
        default:
        return "de jeito nenhum";
        break;
    }
    
}

echo how_much_i_love_you(9).PHP_EOL;