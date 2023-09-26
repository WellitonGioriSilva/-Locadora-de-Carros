<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "locacar");
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

?>