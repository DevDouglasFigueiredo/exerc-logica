<?php

// It's pretty straightforward. Your goal is to create a function that removes the first and last characters of a string. You're given one parameter, the original string. You don't have to worry with strings with less than two characters.

// É bem direto. Seu objetivo é criar uma função que remova o primeiro e o último caractere de uma string. Você recebe um parâmetro, a string original. Você não precisa se preocupar com strings com menos de dois caracteres.

function remove_char ($s)
{
    return substr($s, 1, -1);
}

echo remove_char("Douglas");