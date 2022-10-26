<?php
// - Você foi contratado  para desenvolver um conversor de unidades, onde o usuario poderar inserir valores em milimetros, centimetros, metros ou quilometros e a aplicação devera trazer a informação do valor correspondente nas demais unidades.

// O Programa deve seguir algumas restrições:
// - O Programa deve solicitar ao usuario que informe qual a unidade base do valor a ser inserido
// - O Programa nao deve permitir o avanço das etapas caso o usuario digite uma unidade inválida
// - O Programa deve solicitar ao usuario o valor da unidade base
// - O Programa não deve permitir o avanço das etapas caso o usuario digite um valor não numerico
// - O Programa deverá imprimir os valores correspondentes em todas as unidades disponiveis no sistema , exceto aquela que o usuario inseriu

$unidades = [
    'mm' => 1,
    'cm' => 10,
    'm' => 1000,
    'km' => 1000000
];

$unidadesValidas = implode(', ',array_keys($unidades));

do {
    $unidadeBase = readline(" Digite uma unidade base ($unidadesValidas) : ");

    if(!isset($unidades[$unidadeBase])){
        echo " Unidade Inválida\n\n";
    }

}while(!isset($unidades[$unidadeBase]));   

do {
    $valorBase = readline(" Digite um valor base ($unidadesValidas) : ");

    if(!is_numeric($valorBase)){
        echo " Valor Inválido\n\n";
    }

}while(!is_numeric($valorBase));

$valorMilimetro = $valorBase * $unidades[$unidadeBase];

echo "\nResultados:\n";

foreach($unidades as $unidade => $divisor){
    if($unidade == $unidadeBase) continue;
    $resultadoDivisor = $valorMilimetro / $divisor;
    echo " > " . ($resultadoDivisor). " ". $unidade. "\n";
}
