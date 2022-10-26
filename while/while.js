let nomeTurista = prompt("Qual seu nome turista ? ")
let cidades = ""
let contagem = 0 

let jaVisitouAlgumaCidade = prompt(nomeTurista + ", vc ja visitou alguma cidade de SC ? (Sim/Não)")

while(jaVisitouAlgumaCidade === "sim"){
  let qualCidade = prompt("Qual cidade vc conheceu ? ")
  cidades += " - " + qualCidade + " \n "
  contagem ++
  jaVisitouAlgumaCidade = prompt(nomeTurista + ", vc visitou alguma outra cidade de SC ? (Sim/Não)")
  
}

alert(
  "Turista: " + nomeTurista +
  "\nQuantidade de cidades visitadas: " + contagem +
  "\nCidades visitadas:\n" + cidades
)