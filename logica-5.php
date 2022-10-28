<?php
/*
 Você foi contratado para desenvolver um programa  para gerenciar sorteio de numeros , onde o usuario poderá inserir ate 6 conjuntos de numeros em uma lista e solicitar o sorteio desses conjuntos.

 O programa deve seguir as retrições abaixo:
 - O Programa deverá ter um menu para que o usuario escolha se deve adicionar, listar, sortear e sair.
 - A opção listar só poderá ser exibida caso a lista contenha ao menos um numero.
 - A opção sortear só poderá ser exibida caso  a lista  contenha ao menos dois numeros.
 - O programa deverá sortear apenas um numero por vez e deve remover os numeros ja sorteados da lista.

*/

$numeros = [];

do {
    echo " Bem vindo a  loteria de jogos do PHP\n";
    echo " 1 - Adicionar\n";
    if(count($numeros) >= 1) echo " 2 - Listar\n";
    
    if(count($numeros) >= 2) echo " 3 - Sortear\n";

    echo " 4 - Sair\n";

    $opcao = readline(" Qual opção você deseja escolher ?\n ");

    switch ($opcao) {
        case 1:
            $contador = 0;
            while($contador < 6){
                $numeros[] = readline(" Insira um numero para sorteio \n");
                $contador++;
            };
            echo "\n";
            break;
        case 2:
            echo" Números Adicionados \n";
            foreach ($numeros as $numero) {
                echo " - " . $numero. "\n";
            }
            echo "\n";
            break;
        case 3:
            $indice = array_rand($numeros);
            echo " Numero sorteado " . $numeros[$indice]. "\n";
            unset($numeros[$indice]);
            echo"\n";

    }
} while ($opcao != 4);
echo " Voce escolher em SAIR, até a proxima !\n ";
