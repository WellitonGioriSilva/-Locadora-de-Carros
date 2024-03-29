function validarCPF(cpf) {
  cpf = document.querySelector("#numerocpf");
  cpf.value = cpf.value.replace(/\.|-/g, "");

  if (cpf.value.length != 11 ||
    cpf.value === "11111111111" ||
    cpf.value === "22222222222" ||
    cpf.value === "33333333333" ||
    cpf.value === "44444444444" ||
    cpf.value === "55555555555" ||
    cpf.value === "66666666666" ||
    cpf.value === "77777777777" ||
    cpf.value === "88888888888" ||
    cpf.value === "99999999999" ||
    cpf.validarCPF === "00000000000"
  ) {
    alert("Cpf inválido!!!");
  } else {
    // Digito 1
    var soma = 0;
    var peso = 10;

    for (var i = 0; i < 9; i++) {
      soma += cpf.value[i] * peso;
      peso--;
    }

    var digitoUm = soma % 11;

    if (digitoUm < 2) {
      digitoUm = 0;
    } else {
      digitoUm = 11 - digitoUm;
    }

    // Digito 2
    soma = 0;
    peso = 11;

    for (var i = 0; i < 10; i++) {
      soma += cpf.value[i] * peso;
      peso--;
    }

    var digitoDois = soma % 11;

    if (digitoDois < 2) {
      digitoDois = 0;
    } else {
      digitoDois = 11 - digitoDois;
    }

    // Validação
    if (cpf.value[9] == digitoUm && cpf.value[10] == digitoDois) {
      cpf.value =
        cpf.value.substring(0, 3) +
        "." +
        cpf.value.substring(3, 6) +
        "." +
        cpf.value.substring(6, 9) +
        "-" +
        cpf.value.substring(9, 11);
      document.getElementById("numerocpf").value = cpf.value;
    } else {
      alert("Cpf inválido!!!");
    }
  }
}
