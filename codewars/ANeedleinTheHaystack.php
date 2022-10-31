<?php

// Você pode encontrar a agulha no palheiro?

// Escreva uma função findNeedle()que receba um arraymonte de lixo, mas que contenha um"needle"

// Depois que sua função encontrar a agulha, ela deve retornar uma mensagem (como uma string) que diz:

// "found the needle at position "mais o indexencontrou a agulha, então:

// Exemplo (Entrada --> Saída)

// ["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"] --> "found the needle at position 5" 
// Nota: Em COBOL, deve retornar "found the needle at position 6"

function findNeedle($haystack) {
    
  return "found the needle at position " . array_search("needle", $haystack);
  
}