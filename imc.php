<?php

$peso = readline(" Qual seu peso ? ");
$altura = readline(" Informe sua altura ");

$imc = round($peso / ($altura * $altura));

echo $imc . PHP_EOL;

// if ($imc <= 18.5) {
//     echo "abaixo do peso";
// } else if ($imc <= 25) {
//     echo " seu peso esta normal";
// } else if ($imc <= 30) {
//     echo 'vc esta acima do peso';
// } else if ($imc <= 35) {
//     echo 'vc esta obeso';
// }

 switch ($imc) {
     case $imc <= 18.5;
         echo "abaixo do peso". PHP_EOL;
         break;
     case  $imc <= 25;
         echo " seu peso esta normal". PHP_EOL;
         break;
     case $imc <= 30;
         echo 'vc esta acima do peso'. PHP_EOL;
         break;
     case $imc <= 30;
         echo 'vc esta acima do peso'. PHP_EOL;
         break;
     case $imc <= 35;
         echo 'vc esta obeso'. PHP_EOL;
         break;
 }