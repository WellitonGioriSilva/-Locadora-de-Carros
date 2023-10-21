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
        
        $nome = $_POST["name"];
        $dataNascimento = $_POST["data"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $celular = $_POST["celular"];
        $email= $_POST["email"];
        $nacionalidade = $_POST["nacionalidade"];
        $senha = $_POST["senha"];
        $genero = $_POST["genero"];

        $sql = "INSERT INTO cliente VALUES (null, '$nome', '$cpf', '$rg', '$email', '$celular', '$nacionalidade', '$senha', '$genero', '$dataNascimento');";

        if ($conn->query($sql) === TRUE) {
            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
            echo '<script src="../Js/Alertas.js"></script>'; // Inclua o arquivo JavaScript
            echo '<script>';
            echo 'sucesso("Usuário cadastrado.");'; // Chame a função JavaScript
            echo '</script>';
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