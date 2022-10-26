let saldoAtual = parseInt(prompt("Qual seu saldo em sua conta corrente disponivel ?"))

let acao = prompt(" Voce tem atualmente R$" + saldoAtual + "\n1-) Sacar\n 2-) Depositar\n 3-) Sair")

while (acao == "1" || acao == "2") {

  while (acao == "1") {
    let sacar = parseInt(prompt("Qual valor vc deseja sacar ? "))

    if (saldoAtual < sacar) {

      alert(" Você nao tem saldo suficiente")
      acao = prompt(" Voce tem atualmente R$" + saldoAtual + "\n1-) Sacar\n 2-) Depositar\n 3-) Sair")
      
    } else {
      let resultadoSaque = parseInt(saldoAtual - sacar)

      alert("voce fez um saque no valor de R$" + sacar + "\n agora vc tem disponivel em sua conta o valor de:\n R$" + resultadoSaque)
      saldoAtual = resultadoSaque
      acao = prompt(" Voce tem atualmente " + saldoAtual + "\n1-) Sacar\n 2-) Depositar\n 3-) Sair")
    }
  }

  while (acao == "2") {
    let deposito = parseInt(prompt("Qual valor vc deseja depositar ? "))
    let resultadoDeposito = parseInt(deposito + saldoAtual)
    alert("voce fez um deposito no valor de R$" + deposito + "\n agora vc tem disponivel em sua conta o valor de:\n R$" + resultadoDeposito)
    saldoAtual = resultadoDeposito
    acao = prompt(" Voce tem atualmente R$" + saldoAtual + "\n1-) Sacar\n 2-) Depositar\n 3-) Sair")
  }
}
alert("ate a proxima !!!")