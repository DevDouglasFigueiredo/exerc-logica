<?php

$multiplicador = readline("informe o numero da tabuada, que voce quer");

for ($i = 1; $i <=10; $i++){
    $resultado = $multiplicador * $i;
    echo "$multiplicador x $i = $resultado ". PHP_EOL;
}
