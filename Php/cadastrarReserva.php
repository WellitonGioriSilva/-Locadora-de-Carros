<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserção de Dados</title>
</head>
<body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        require_once('conexao.php');
        
        $condutor = $_POST["condutorname"];
        $contato = $_POST["contato"];
        $cpf = $_POST["cpf"];
        $cnh = $_POST["cnh"];
        $valor_reserva = $_POST["valor"];
        $modelo_carro= $_POST["modeloCar"];
        $cidade = $_POST["cidade"];
        $data_inic_reserva = $_POST["dataInicio"];
        $data_dev_reserva = $_POST["dataDevolucao"];

        $sql = "INSERT INTO reserva VALUES (null, '$condutor', '$contato', '$cpf', '$cnh', '$valor_reserva', '$modelo_carro', '$cidade', '$data_inic_reserva', '$data_dev_reserva');";

        if ($conn->query($sql) === TRUE) {
            echo"Dados inseridos com sucesso!";
        } else {
            echo"Erro na inserção: " . $conn->error;
        }
    
        $conn->close();
    }
    else{
        echo "Erro Dados";
    }
    ?>
</body>
</html>
    
</body>
</html>