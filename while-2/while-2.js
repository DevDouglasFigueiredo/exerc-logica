let soma1 = parseInt(prompt("digite um numero para somar"))
let soma2 = parseInt(prompt("Agora, digite outro numero para somar"))
let total = soma1 + soma2
alert(total)

let decisao = prompt("vc quer realizar outra soma? (Sim/Não)")
while(decisao == "Sim" || !(decisao == "Não")){
   while(decisao =="Sim"){
    soma1 = parseInt(prompt("digite um numero para somar"))
    soma2 = parseInt(prompt("Agora ,digite outro numero para somar"))
    total = soma1 + soma2
    alert(total)
    decisao = prompt("vc quer realizar outra soma? (Sim/Não)")
  if(decisao =="Não"){
    alert("ate a proxima!!!")
    exit()
  }
}
    alert("digite sim ou nao")
    decisao = prompt("vc quer realizar outra soma? (Sim/Não)")
   }

alert("ate a proxima!!!")