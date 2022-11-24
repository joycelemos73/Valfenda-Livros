<?php

    require "includes/autentica.php";
    include "includes/topo.php";
    include 'includes/barra_lateral.php';
    include "includes/cabecalho.php";

?>


<body class="body_cadastros">

  <section class="barra-lateral-navegacao">
      <?php include "includes/nav_lateral.php"?>


      <article class="descricao-pagina">
      <h1>Cadastrar novos itens</h1>
      <p>Aqui você poderá cadastrar novos itens que você queira emprestar para outras pessoas</p>

        <form enctype="multipart/form-data" class=formulario-cadastrar-item action="08_new_items_formulario.php" method="post">

            <label for="descricao-item">Título do Livro<label>
            <input type="text" id="titulo_item" name="titulo_item" class="input-padrao-perfil" required placeholder="Título do Livro"/>

            <label for="descricao-item">Descrição do Livro<label>
            <input type="text" id="descricao_item" name="descricao_item" class="input-padrao-perfil" required placeholder="Descrição do Livro"/>
    
              <label for="valor">Edição<label>
              <input type="text" id="preco_item" name="preco_item" class="input-padrao-perfil" required placeholder="Edição e editora do livro"/>

          <div class="botoes-pronto">
              <button type="submit" class="pronto">Pronto! </button>
          </div>
        </form>

    </article>
  </section>

  </body>
  </html>