<?php
// index.php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>AM Games</title>

  <!-- CSS principal -->
  <link rel="stylesheet" href="style.css">

  <!-- Tema Claro/Escuro -->
  <link id="tema-css" rel="stylesheet" href="css/tema_claro.css">
</head>

<body>

  <!-- NAVBAR (links agora apontam para .php) -->
  <nav class="navbar">
    <div class="logo">🎮 AM Games</div>
    <div class="links">
      <a href="index.php">Início</a>
      <a href="list.php">Catálogo</a>
      <a href="contato.php">Contato</a>
      <a href="equipe.php">Equipe</a>
    </div>
  </nav>

  <!-- HERO / BANNER -->
  <header class="hero">
    <h1>Bem-vindo à AM Games!</h1>
    <p>Seu portal definitivo dos clássicos que marcaram gerações.</p>
    <button class="cta-btn" onclick="window.location.href='list.php'">
      📚 Ver Catálogo Completo
    </button>
  </header>

  <!-- BOTÃO DE TEMA -->
  <button id="botao-tema" class="botao-tema">🌗 Alternar Tema</button>

  <!-- JS (mantive suas rotinas) -->
  <script src="js/tema.js"></script>

  <main class="conteudo">

  <h2>🎮 Destaques da Semana</h2>

  <div class="grid-jogos">

    <!-- Jogo 1 -->
    <div class="card-pequeno">
      <img src="img1/mario-1.jpg" alt="Super Mario" class="thumb-mini">
      <h3>Super Mario Bros</h3>
      <p>O clássico que marcou gerações!</p>
    </div>

    <!-- Jogo 2 -->
    <div class="card-pequeno">
      <img src="img1/sonic-1.jpg" alt="Sonic" class="thumb-mini">
      <h3>Sonic The Hedgehog</h3>
      <p>A velocidade azul mais famosa do mundo.</p>
    </div>

    <!-- Jogo 3 -->
    <div class="card-pequeno">
      <img src="img1/street-fighter.jpg" alt="Street Fighter" class="thumb-mini">
      <h3>Street Fighter II</h3>
      <p>Lutas épicas que marcaram época.</p>
    </div>

    <!-- Jogo 4 -->
    <div class="card-pequeno">
      <img src="img1/donkey-kong.jpg" alt="Donkey Kong" class="thumb-mini">
      <h3>Donkey Kong Country</h3>
      <p>Aventuras nostálgicas na selva!</p>
    </div>

  </div>

</main>

</body>
</html>
