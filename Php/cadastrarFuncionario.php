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
        
        $nome = $_POST["namefunc"];
        $cpf = $_POST["numerocpf"];
        $email = $_POST["emailfunc"];
        $celular = $_POST["contadofunc"];
        $genero = $_POST["arselect"];
        $data = $_POST["datanascimento"];

        $sql = "INSERT INTO funcionario VALUES (null, '$nome', '$cpf', '$email', '$celular', '$genero', '$data');";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../index.php");
            exit();
        } else {
            header("Location: ../formCadastrarFuncionario.html");
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