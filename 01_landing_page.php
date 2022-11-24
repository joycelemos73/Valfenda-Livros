<?php

    include "includes/topo.php";

?>

<body>
  <header>
    <div class="barra-menu">
    <img class="logo-branca" src="logo-principal.png" alt="Logo da Valfenda Livros">
      <ul class="links-menu">
        <li class="item-menu"><a href="01_landing_page.php">Home</a></li>
        <li class="item-menu"><a href="02_sign-up.php">Livros</a></li>
        <li class="item-menu"><a href="02_sign-up.php">Entrar</a></li>
      </ul>
    </div>
  </header>

  <section>
    <div class="banner-itens">
      <ul class="banner__titulo-itens">
        <li>Acesso à literatura</li>
        <li>para todos</li>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum hac facilisi sem vestibulum, molestie sit pulvinar.</p>

      <a href="02_sign-up.php" class="botao-criar-conta-banner">Criar conta</a>
      </ul>
    </div>
  </section>

  
  
  <section class="blocos">
    <div class="bloco__descricao">
      <h2 class="descricao__titulo">O brasileiro tem uma média anual de 4,96 livro por habitante</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum hac facilisi sem vestibulum, molestie sit pulvinar.</p>
    </div>
    <img  src="brasil.png" alt="Desenho do mapa do Brasil" class="blocos__img">
  </section>
  
  <section>
      <div class="blocos_imagem_background">
    <img src="reading.png" class="blocos__img">
    <div class="bloco__descricao">
      <h2 class="descricao__titulo">O Brasil perdeu 4,6 milhões de leitores nos últimos quatro anos</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum hac facilisi sem vestibulum, molestie sit pulvinar.</p>
      <a href="02_sign-up.php" class="botao-criar-conta">Criar conta</a>
    </div>
      </div>
  </section>
  
  <section class="blocos">
    <div class="bloco__descricao">
      <h2 class="descricao__titulo">Compre menos, escolha melhor, e faça durar. O planeta vai agradecer.</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ipsum hac facilisi sem vestibulum, molestie sit pulvinar.</p>
    </div>
    <img  src="borrow.png" alt="Desenho do planeta Terra rodeado por uma folha de planta" class="blocos__img">
  </section>

  <section class="newsletter">
    <div class="contato__descricao">
      <h2 class="contato__titulo">Se cadastre em nossa newsletter</h2>
      <p class="contato__texto">E receba dicas e novidades sobre livros</p>
    </div>
    <form>
      <input
        type="text"
        id="first-name"
        class="standardinput"
        required
        placeholder="Primeiro nome"/>

      <input
        type="text"
        id="second-name"
        class="standardinput"
        required
        placeholder="Último nome"/>

      <input
        type="email"
        id="email"
        class="standardinput"
        required
        placeholder="Email"
      />
      <input type="submit" value="Inscrever" class="signup-newsletter" />
    </form>
  </section>

<?php

    include "includes/rodape.php";

?>
