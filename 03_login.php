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

  <main class=tela-inicial-login>
    <section class="signup">

     <form class=formulario-signup action="03_login_formulario.php" method="post">
      <h2>Login</h2>

         <?php

         //Se foi enviado parâmetro de erro / Se não autenticou:
         if(isset($_GET['erro']))
         {
             echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
         }

         if(isset($_GET['autentica']))
         {
             echo '<p style="text-align:center;color:red">Você não tem permissão de acesso. Faça seu login.</p>';
         }

         ?>

      <label for="email">Email<label>
      <input type="email" id="email" name="email" class="input-padrao" required placeholder="seuemail@dominio.com" />

      <label for="senha">Senha<label>
      <input type="password" id="senha" name="senha" class="input-padrao" required placeholder="Digite aqui a sua senha"/>

      <div class="botoes-signup">
      <input type="submit" value="Entrar" class="botao-criar-conta" />
      <p>Não é cadastrado?</p>
      <a href="02_sign-up.php">Crie sua conta</a>
      </div>
     </form>
    </section>
  </main>