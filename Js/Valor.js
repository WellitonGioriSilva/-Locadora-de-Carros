function validarValorCar(valor){
    valor = document.querySelector("#valoraluguel");
    
    if(parseInt(valor.value) < 50){
        document.getElementById("valoraluguel").value = "Valor mínimo é de R$ 50,00";
        document.getElementById("valoraluguel").style = "color:red";
    }
    if(parseInt(valor.value) > 2000){
        document.getElementById("valoraluguel").value = "Valor máximo é de R$ 2000,00";
        document.getElementById("valoraluguel").style = "color:red";
    }
}

function voltarColor(){
    document.getElementById("valoraluguel").style = "color:black";
}