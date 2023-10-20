// PROJETO |LARA BEATRIZ DE ABREU ALVES
function validarValor(valor){
    valor = document.querySelector("#valorAtual");
    valorPromo = document.querySelector("#valorPromocional");
    if(parseInt(valor.value) < 1000){
        valor.value = "Valor mínimo é de R$ 1.000,00";
        valor.style = "color:red";
    }
    if(parseInt(valor.value) > 4500){
        valor.value = "Valor máximo é de R$ 4.500,00";
        document.getElementById("valor").style = "color:red";
    }

    if(parseInt(valorPromo.value) < 500){
        valorPromo.value = "Valor mínimo é de R$ 500,00";
        valorPromo.style = "color:red";
    }
    if(parseInt(valor.value) > 2500){
        valorPromo.value = "Valor máximo é de R$ 2.500,00";
        valorPromo.style = "color:red";
    }
}

function voltarColor(){
    document.getElementById("valor").style = "color:black";
}



function voltarColor(){
    document.getElementById("valorPromocional").style = "color:black";
}