<?php
/*
 Você foi contratado para desenvolver um programa  para gerenciar sorteio de nomes, onde o usuario poderá inserir varios nomes em uma lista e solicitar o sorteio de 1 desse nomes.

 O programa deve seguir as retrições abaixo:
 - O Programa deverá ter um menu para que o usuario escolha se deve adicionar, listar, sortear e sair.
 - A opção listar só poderá ser exibida caso a lista contenha ao menos um nome.
 - A opção sortear só poderá ser exibida caso  a lista  contenha ao menos dois nomes.
 - O programa deverá sortear apenas um nome por vez e deve remover os nomes ja sorteados da lista.

*/

$nomes = [];

do {
    echo " 1 - Adicionar\n";
    if (count($nomes) >= 1) echo " 2 - Listar\n";
    if (count($nomes) >= 2) echo " 3 - Sortear\n";
    echo " 4 - Sair\n";
    echo "\n";

    $opcao = readline("\n- Qual opção você deseja escolher ? \n");
    echo "\n";

    switch ($opcao) {
        case 1:
            $nomes[] = readline(" \nDigite um nome para adicionar\n ");
            echo "\n";
            break;
        case 2:
            foreach ($nomes as $nome) {
                echo " - " . $nome . "\n";
            }
            echo "\n";
            break;
        case 3:
            // sorteio dos elementos do array
            $indice = array_rand($nomes);

            // nome sorteado
            echo " Nome sorteado: " . $nomes[$indice] . "\n";

            // remove os elementos do array ja sorteados
            unset($nomes[$indice]);
            echo "\n";
            break;
    }
} while ($opcao != 4);
echo " Você decidiu SAIR do sistema, até a proxima!\n";
