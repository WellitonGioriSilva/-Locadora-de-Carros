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
    <link rel="stylesheet" href="Css/styleHome.css">
    <script src="https://kit.fontawesome.com/c0362920ae.js" crossorigin="anonymous"></script>  
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
            <a href="#">Home</a>
            <img src="Img/default-logo.png" alt="">
        </nav>
    </header>
    <main>
        <div class="title1"><h2>Veículos em Destaque</h2></div>
        <div class="container" style="margin-top: 10px;">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Img/audi-veich.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 style="color: #ffbe00;">AUDI R8</h5>
                      <p style="color: #ffbe00;">Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Img/mercedez-veich.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 style="color: #ffbe00;">Mercedez C180</h5>
                      <p style="color: #ffbe00;">Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Img/jeep- veich.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5 style="color: #ffbe00;">Jeep Compass</h5>
                      <p style="color: #ffbe00;">Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div> 
        </div>
    </main>
    <footer>
        <div class=""><h1 class="title1">AVALIAÇÕES</h1></div>

        <div>
            <div class="card1">
                <div class="iconPessoa">
                    <img src="Img/Pessoa.png" alt="">
                </div>
                <div class="textAval">
                    <h1>Welliton Giori Silva</h1>
                    <p>Na volta de uma viajem em familia, nosso voo começou a ser remarcado e quando nos demos conta, paramos em Curitiba. Sem a loja DEFAULT do aeroporto e o atendimento dos colaboradores, não sei como faríamos para voltar para casa.</p>    
                </div>
            </div>
            
            <div class="card1">
                <div class="iconPessoa">
                    <img src="Img/Pessoa.png" alt="">
                </div>
                <div class="textAval">
                    <h1>Welliton Giori Silva</h1>
                    <p>Na volta de uma viajem em familia, nosso voo começou a ser remarcado e quando nos demos conta, paramos em Curitiba. Sem a loja DEFAULT do aeroporto e o atendimento dos colaboradores, não sei como faríamos para voltar para casa.</p>    
                </div>
            </div>
            
            <div class="card1">
                <div class="iconPessoa">
                    <img src="Img/Pessoa.png" alt="">
                </div>
                <div class="textAval">
                    <h1>Welliton Giori Silva</h1>
                    <p>Na volta de uma viajem em familia, nosso voo começou a ser remarcado e quando nos demos conta, paramos em Curitiba. Sem a loja DEFAULT do aeroporto e o atendimento dos colaboradores, não sei como faríamos para voltar para casa.</p>    
                </div>
            </div>
        </div>
    </footer>
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>