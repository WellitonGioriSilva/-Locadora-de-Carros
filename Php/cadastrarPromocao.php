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
        
        $nomeVeiculo = $_POST["veiculo"];
        $valorAtual = $_POST["valorAtual"];
        $valorPromocional = $_POST["valorPromocional"];
        $tipoPromocao = $_POST["tipo"];
        $tipoVeiculo= $_POST["tipoVeiculo"];
        $data_inic_promocao = $_POST["inicio"];
        $data_fin_promocao = $_POST["final"];

        $sql = "INSERT INTO promocao VALUES (null, '$nomeVeiculo', '$valorAtual', '$valorPromocional', '$data_inic_promocao', '$data_fin_promocao', '$tipoVeiculo', '$tipoPromocao');";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../index.php");
            exit();
        } else {
            header("Location: ../formCadastrarPromocao.html");
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
    
</body>
</html>