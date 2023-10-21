<!-- Feito por Welliton Giori Silva -->
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
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/premiumStyle.css">
    <title>Assinatura</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="img/Logo.png" alt="">
        </div>
        <div class="form">
            <form action="Php/assinarPremium.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Assinatura</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome Completo</label>
                        <input id="nome" type="text" name="nome" value="<?php echo $usuario['name']; ?>" readonly>
                    </div>

                    <div class="input-box">
                        <label for="cpf">Cpf</label>
                        <input id="cpf" type="text" name="cpf" value="<?php echo $usuario['cpf']; ?>" readonly>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" value="<?php echo $usuario['email']; ?>" readonly>
                    </div>

                    <div class="input-box">
                        <label for="celular">Celular</label>
                        <input id="celular" type="tel" name="celular" value="<?php echo $usuario['contato']; ?>" readonly>
                    </div>

                    <div class="input-box">
                        <label for="dataNascimento">Data de Nascimento</label>
                        <input id="dataNascimento" name="dataNascimento" type="date" value="<?php echo $usuario['nascimento']; ?>" readonly>
                    </div>

                    <div class="input-box">
                        <label for="assinatura">Assinatura</label>
                        <select name="assinatura" id="assinatura">
                            <option value="" hidden>Tipo de Assinatura</option>
                            <option value="bronze">Bronze</option>
                            <option value="gold">Gold</option>
                            <option value="platinum">Platinum</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <label for="tempo">Tempo</label>
                        <select name="tempo" id="tempo">
                            <option value="" hidden>Tempo de Assinatura</option>
                            <option value="mensal">Mensal</option>
                            <option value="semestral">Semestral</option>
                            <option value="anual">Anual</option>
                        </select>
                    </div>
                    
                    <div class="input-box">
                        <label for="pagamento">Pagamento</label>
                        <select name="pagamento" id="pagamento">
                            <option value="" hidden>Forma de Pagamento</option>
                            <option value="credito">Crédito</option>
                            <option value="debito">Débito</option>
                            <option value="pix">Pix</option>
                            <option value="boleto">Boleto</option>
                        </select>
                    </div>
                </div>

                <div class="continue-button">
                    <button onclick="validarCPF()" type="submit">Continuar</button>
                    <button class="btVoltar"><a href="index.php">Voltar</a></button>
                </div>
            </form>
        </div>
    </div>

    <script src="Js/script.js"></script>
    <script src="Js/Mascara.js"></script>
    <script>
        new FormMask(document.querySelector("#cpf"), "___.___.___-__", "_", [".", "-"])
        new FormMask(document.querySelector("#celular"), "(__)_____-____", "_", ["(", ")", "-"])
    </script>
</body>

</html>