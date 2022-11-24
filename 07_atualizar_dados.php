<?php

    include "includes/conecta.php";
    require "includes/autentica.php";
    include "includes/topo.php";
    include 'includes/barra_lateral.php';
    include "includes/cabecalho.php";

    //Obtém valor enviado via GET
    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = $id";

    //Envia a consulta para obter dados do usuário atual
    $res = mysqli_query($conn, $sql);
    //Armazena os dados obtidos
    $row = mysqli_fetch_assoc($res);

    $nome = $row['nome'];
    $endereco = $row['endereco'];
    $cpf = $row['cpf'];
    $email = $row['email'];
    $senha = $row['senha'];


?>


<body class="body_cadastros">

  <section class="barra-lateral-navegacao">
      <?php include "includes/nav_lateral.php"?>


      <article class="descricao-pagina">
      <h1>Atualizar dados</h1>
      <p>Aqui você poderá alterar seus dados cadastrais como endereço de entrega, dados do seu cartão de crédito e telefone</p>


        <form class=formulario-perfil action="02_sign-up_formulario.php" method="post">

            <input type="hidden" name="id" value="<?php echo $id ?>" />

          <label for="nome">Nome completo<label>
          <input type="text" id="nome" name="nome" value="<?php echo $nome ?>" class="input-padrao-perfil"/>

          <label for="endereco">Endereço<label>
          <input type="text" id="endereco" name="endereco" value="<?php echo $endereco ?>" class="input-padrao-perfil"/>

          <label for="cpf">CPF<label>
          <input type="number" id="cpf" name="cpf" value="<?php echo $cpf ?>" class="input-padrao-perfil"/>

          <label for="email">Email<label>
          <input type="email" id="email" name="email" value="<?php echo $email ?>" class="input-padrao-perfil"/>

          <label for="senha">Senha<label>
          <input type="password" id="senha" name="senha" value="<?php echo $senha ?>" class="input-padrao-perfil"/>

          <div class="botoes-pronto">
            <input type="submit" value="Pronto!" class="pronto" />
          </div>
        </form>

    </article>
  </section>

  </body>
  </html>