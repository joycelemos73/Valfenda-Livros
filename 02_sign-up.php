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

  <main class="tela-inicial-signup">
    <section class="signup">

     <form class=formulario-signup action="02_sign-up_formulario.php" method="post">
      <h2>Cadastre-se</h2>

      <label for="nome">Nome completo<label>
      <input type="text" id="nome" name="nome" class="input-padrao" required placeholder="Digite aqui o seu nome completo"/>

      <label for="endereco">Endereço<label>
      <input type="text" id="endereco" name="endereco" class="input-padrao" required placeholder="Digite aqui o seu endereço completo"/>

      <label for="cpf">CPF<label>
      <input type="number" id="cpf" name="cpf" class="input-padrao" required placeholder="Digite aqui o seu número de CPF"/>

      <label for="email">Email<label>
      <input type="email" id="email" name="email" class="input-padrao" required placeholder="seuemail@dominio.com" />

      <label for="senha">Senha<label>
      <input type="password" id="senha" name="senha" class="input-padrao" required placeholder="Digite aqui a senha que quer criar"/>

      <div class="botoes-signup">
      <input type="submit" value="Criar conta" class="botao-criar-conta" />
      <p>Já é cadastrado?</p>
      <a href="03_login.php">Faça seu login</a>
      </div>
     </form>
    </section>
  </main>
</body>

</html>