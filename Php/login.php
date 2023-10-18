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
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM cliente WHERE nome_cli ='$nome' AND senha_cli ='$senha';";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['usuario'] = array('name' => $row['nome_cli'], 'cpf' => $row['cpf_cli']);
            header("Location: ../index.html");
            exit();
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