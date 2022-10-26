<?php

//$patinhos = readline("insira um numero entre 1 a 10 de patinhos . ") . PHP_EOL;
$patinhos = 2;
$contador = 0;

// while (is_numeric($patinhos) || $patinhos <= 1 || $patinhos >= 10) 
while ($patinhos <= 1 || $patinhos >= 10) {
    echo ("O numero de patinhos inseridos eh invalido, eh necessario um valor de 1 a 10 numérico (não aceitamos letras) ") . PHP_EOL;
    $patinhos = readline("insira um numero valido de patinhos : ") . PHP_EOL;
}

for ($i = $patinhos; $i > 0; $i--) {

    if ($i != 1) {
        echo " $i patinhos foram passear\n";
    } else {
        echo "1 patinho foi passear\n";
    }

    echo " Alem das montanha\n";
    echo " para brincar\n";
    echo " A mamae gritou : Quá, Quá, Quá, Quá\n";

    switch ($i) {
        case 2:
            echo " Mas só um patinho voltou de lá \n". PHP_EOL;
            break;
        case 1: 
            echo " Mas nenhum patinho voltou de lá. \n " . PHP_EOL;
            break;
        default:
            echo " Mas só " .($i - 1 ). " patinho voltou de lá \n" .PHP_EOL;
            break;
    }

}

echo "\n";
echo " A mamãe patinha foi procurar\n";
echo " Alem das montanhas\n";
echo " Na beira do Mar\n";
echo " A mamãe gritou: Quá, Quá, Quá, Quá\n";
echo " E os " . $patinhos . " patinhos voltaram de lá . \n". PHP_EOL;

