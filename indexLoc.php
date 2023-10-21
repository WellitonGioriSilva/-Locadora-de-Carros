<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['usuario']) && !is_array($_SESSION['usuario'])) {
    header("Location: formLogarUsuario.html"); // Redireciona para a página de login se não estiver logado
    exit();
}
else{

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/styleLoc.css">
    <script src="https://kit.fontawesome.com/c0362920ae.js" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
      /* Estilo para ocultar o combobox inicialmente */
      #buttons-login, #login1 {
        display: none;
      }
    </style>
    <title>Localiza</title>
</head>
<body>
    <header>
        <nav class="topnav">
            <a onclick="abrirComboBox()" class="user-icon"><i class="fa-solid fa-circle-user"></i></a>
            <div id="buttons-login">
              <div>
                <a href="formLogarUsuario.html">Entrar</a>
                <a href="formCadastrarUsuario.html">Cadastre-se</a>
              </div>
            </div>
            <div id="login1">
              <div>
                <a href="">Perfil</a>
                <a href="" onclick="limparLogin()">Sair</a>
              </div>
            </div>
            <a href="indexCadastros.html">Forms</a>
            <a href="#">Localização</a>
            <a href="assinarPremium.php">Assinatura</a>
            <a href="indexQuemSomos.html">Quem Somos?</a>
            <a href="indexOferta.html">Ofertas</a>
            <a href="indexFrota.php">Frota</a>
            <a href="index.php">Home</a>
            <img src="Img/default-logo.png" alt="">
        </nav>
    </header>
    <main>
        <div class="title1"><h2>Localização</h2></div>
        <div id="map"></div>
    </main>
    <script>
      function abrirComboBox() {
        var combobox = document.getElementById('buttons-login');
        var combobox1 = document.getElementById('login1');
        var enablad = "<?php echo $usuario['name']; ?>";
        if(enablad != null){
            if (combobox1.style.display === 'none') {
                combobox1.style.display = 'block';
            } else {
                combobox1.style.display = 'none';
            }
        }
        else{
            if (combobox.style.display === 'none') {
                combobox.style.display = 'block';
            } else {
                combobox.style.display = 'none';
            }
        }
      }

        function limparLogin() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'Php/limparLogin.php', true);  // Arquivo PHP que limpará o login
            xhr.send();
        }

        var map = L.map('map').setView([-10.8778, -61.9515], 13); // Define as coordenadas iniciais e o nível de zoom

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 19,
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-10.8778, -61.9515]).addTo(map) // Adiciona um marcador ao mapa
          .bindPopup('Localização aqui!').openPopup();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>