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
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        $assinatura = $_POST["assinatura"];
        $tempo = $_POST["tempo"];
        $pagamento = $_POST["pagamento"];
        $celular = $_POST["celular"];
        $data = $_POST["dataNascimento"];

        $sql = "INSERT INTO cliente_premium VALUES (null, '$nome', '$cpf', '$email', '$assinatura', '$tempo', '$pagamento', '$celular', '$data');";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../index.php");
            exit();
        } else {
            header("Location: ../assinarPremium.php");
            exit();
        }
    
        //$conn->close();
    }
    else{
        echo "Erro Dados";
    }
    ?>
</body>
</html>