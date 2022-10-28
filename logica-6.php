<?php
 /*
 Você foi contratado para desenvolver um programa para auxiliar no saque de caixas eletronicos. Esse programa deverá calcular a quantidade de cada celula  de dinheiro que o caixa deverá entregar ao cliente.
 
 O programa deve seguir as seguintes restrições abaixo:
 1.1- O programa deve permitir saques com cedulas de R$5,00 R$10,00 R$ 20,00 R$50,00 e R$ 100,00;
 1.2- O programa deve informar ao cliente as cedulas disponiveis antes de solicitar o valor do saque;
 1.3- O programa deve solicitar ao cliente o valor do saque;
 1.4- O programa deve priorizar as cedulas maiores durante o saque;
 1.5- O programa deve impedir o saque, caso o valor solicitado não possa ser atendido com as celulas disponives;
 1.6- O programa deve mostrar ao cliente a quantidade de cedulas que serão entregues para ele no final da execução;
 */

// 1.1
 $cedulas = [
    5, 10, 20, 50, 100
 ];
// 1.2
 echo " - Células disponives: ".implode(', ',$cedulas). "\n";

 // 1.3
 $valorDoSaque = readline(" Digite o valor para o saque \n");

 // 1.5 verifica o valor do saque
 if($valorDoSaque % $cedulas[0] > 0){
    die(" O valor de R$".$valorDoSaque.",00 solicitado não pode ser atendido pelas cedulas disponiveis \n");
 }

 $valorRestante = $valorDoSaque;
 $cedulasSaque = [];


 //1.4 prioriza as celulas maiores
 rsort($cedulas);

 // iterar as celulas disponiveis
 foreach($cedulas as $cedula){
    if($cedula > $valorRestante) continue;

    $quantidade = floor($valorRestante / $cedula);

    $valorRestante -= ($cedula * $quantidade);

    $cedulasSaque[$cedula] = $quantidade;
 }

 echo "\n Saque de R$" . $valorDoSaque.",00\n";

 foreach($cedulasSaque as $cedula => $quantidade){
    echo " > ". $quantidade. " x R$".$cedula. "\n";
 }
