<?php

// mg = miligrama
// cg = centigrama
// g = grama
// kg = quilograma
// t = tonela


$unidades = [
    'mg' => 1,
    'cg' => 10,
    'g' => 100,
    'kg' => 1000,
    't' => 1000000
];

$unidadesValidas = implode(' , ', array_keys($unidades));

$novaOperacao = readline(" - Deseja fazer uma conversao ? \n");



while ($novaOperacao == "sim") {

    do {

        $unidadeBase = readline(" - Digite uma UNIDADE base ($unidadesValidas): ");
        if (!isset($unidades[$unidadeBase])) {

            echo " Unidade Inválida ! \n\n ";
        }
    } while (!isset($unidades[$unidadeBase]));


    do {
        $valorBase = readline(" - Digite um VALOR Base ($unidadesValidas) : ");

        if (!is_numeric($valorBase)) {
            echo "Valor Inválido !\n ";
        }
    } while (!is_numeric($valorBase));

    $valorMiligrama = $valorBase * $unidades[$unidadeBase];

    echo "\nResultados:\n";

    foreach ($unidades as $unidade => $divisor) {
        $resultadoDivisor = $valorMiligrama / $divisor;
        echo " > " . ($resultadoDivisor) . " " . $unidade . "\n";
    }

    $novaOperacao = readline(" - Deseja fazer uma NOVA conversão ? (sim/não)") . PHP_EOL;
    
}

echo " Ate a proxima !\n ";
