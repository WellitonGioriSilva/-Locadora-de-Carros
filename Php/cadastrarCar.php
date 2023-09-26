<!DOCTYPE html>
<html lang="pt-br">
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
        
        $nome = $_POST["nome"];
        $quant_portas = $_POST["portasselect"];
        $ar = $_POST["arselect"];
        $trava = $_POST["travaselect"];
        $airbag = $_POST["airbagselect"];
        $direcao = $_POST["direcaoselect"];
        $freio = $_POST["freioselect"];
        $cambio = $_POST["cambioselect"];
        $porta_malas = $_POST["malaselect"];
        $quant_pessoas = $_POST["pessoasselect"];
        $tracao = $_POST["tracaoselect"];
        $placa = $_POST["placa"];
        $valor = $_POST["valoraluguel"];

        $sql = "INSERT INTO veiculo VALUES (null, '$nome', '$quant_portas', '$ar', '$trava', '$airbag', '$direcao', '$freio', '$cambio', '$porta_malas', '$quant_pessoas', '$tracao', '$placa', '$valor');";

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