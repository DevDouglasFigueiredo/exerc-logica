let escolha = prompt("Escolha sua opção:\n 1)\n 2)\n 3)\n 4)\n 5)\n")
 
while(escolha !== "5"){
  alert("opçao errada, tente novamente")
  escolha = prompt("Escolha sua opção:\n 1)\n 2)\n 3)\n 4)\n 5)\n")
  if(escolha == "5"){
    alert("parabens, vc encerrou o jogo")
  }
}