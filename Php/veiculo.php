<?php
session_start();

if (isset($_POST['modelo']) && isset($_POST['valor'])) {
    $_SESSION['veiculo'] = array('modelo' => $_POST['modelo'], 'valor' => $_POST['valor']);
    header("Location: ../formCadastrarReserva.php");
    exit();
} else {

}
?>