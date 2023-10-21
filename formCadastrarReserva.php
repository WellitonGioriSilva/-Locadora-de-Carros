 <!-- Feito por Felipe dos Santos Torejiani-->
 <?php
session_start();
//require_once('Php/dados_usuario.php');

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario']) && !is_array($_SESSION['usuario'])) {
    header("Location: formLogarUsuario.html"); // Redireciona para a página de login se não estiver logado
    exit();
}

// Obter informações do usuário
$usuario = $_SESSION['usuario'];
$veiculo = $_SESSION['veiculo'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/styleCadastrarReserva.css">
    <title>Cadastrar Reserva</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="Img/Logo.png" alt="">
        </div>
        <div class="form">
            <form action="Php/cadastrarReserva.php" method="post">
                <div class="input-group">
                    <br>
                    <div class="form-header">
                        <div class="title">
                            <h1>Reserva de Veículos</h1>
                        </div>
                    </div>

                    <div class="input-box">
                        <label for="condutorname">Condutor</label>
                        <input id="condutorname" name="condutorname" type="text" value="<?php echo $usuario['name']; ?>" readonly/>
                    </div>

                    <div class="input-box">
                        <label for="contato">Contato</label>
                        <input id="contato" name="contato" type="text" value="<?php echo $usuario['contato']; ?>" readonly>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="numerocpf" name="cpf" type="text" value="<?php echo $usuario['cpf']; ?>" readonly>
                    </div>

                    <div class="input-box">
                        <label for="cnh">CNH</label>
                        <input id="cnh" name="cnh" type="text" placeholder="Digite sua CNH" required minlength="9"
                            maxlength="11">
                    </div>

                    <div class="input-box">
                        <label for="valor">Valor Reserva</label>
                        <input id="valor" name="valor" type="text" value="<?php echo $veiculo['valor']; ?>" readonly>
                    </div>

                    <div class="input-box">
                        <label for="modeloCar">Modelo Carro</label>
                        <input id="modeloCar" name="modeloCar" type="text" value="<?php echo $veiculo['modelo']; ?>" readonly>
                    </div>

                    <div class="input-box">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" name="cidade" type="text" placeholder="Digite a localização" required
                            minlength="2" maxlength="60">
                    </div>

                    <div class="input-box">
                        <label for="dataInicio">Data Inicio Reserva</label>
                        <input id="dataInicio" name="dataInicio" type="date" required>
                    </div>

                    <div class="input-box">
                        <label for="dataDevolucao">Data Devolução Reserva</label>
                        <input id="dataDevolucao" name="dataDevolucao" type="date" required>
                    </div>

                    <script src="Js/Mascara.js"></script>

                    <script>
                        new FormMask(document.querySelector("#numerocpf"), "___.___.___-__", "_", [".", "-"])
                        new FormMask(document.querySelector("#contato"), "(__)_____-____", "_", ["(", ")", "-"])
                    </script>

                </div>

                <div class="continue-button">
                    <button onclick="validarCPF()" type="submit">Cadastrar</button>
                    <button class="btVoltar"><a href="index.php">Voltar</a></button>
                </div>
            </form>
        </div>
    </div>
    <script src="Js/script.js"></script>
</body>

</html>