<?php

    include "includes/topo.php";
    include "includes/conecta.php";
    require "includes/autentica.php";
    include "includes/cabecalho.php";


?>


<body>

  <section>
    <div class="banner-itens">
      <ul class="banner__titulo-itens">
        <li>Uma casa sem livros</li>
        <li>é como um corpo sem alma</li>
          <p>– Cícero</p>
      </ul>
    </div>
  </section>


  <section>
      <br>
      <br>
      <h2 class="titulo_secao">Livros Disponíveis</h2>
      <br>

<!--      Tabela com livros disponíveis-->
        <table class="livros_disponíveis">
            <thead>
            <tr>
                <td class="titulo_tabela">Título do livro</td>
                <td class="titulo_tabela">Descrição</td>
                <td class="titulo_tabela">Edição</td>
<!--                <td class="titulo_tabela">Disponibilidade</td>-->
                <td class="titulo_tabela">-</td>
            </tr>
            </thead>

            <tbody>


            <?php
            $sql = "SELECT titulo_item, descricao_item, preco_item, usuario_id FROM cadastro_novos_itens WHERE usuario_id IS NULL";

            $res = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($res))
            {
                echo
                    "<tr>
                        <td>" . $row['titulo_item'] . "</td>
                        <td>" . $row['descricao_item'] . "</td>
                        <td>" . $row['preco_item'] . "</td>
                        <td><a href='06_pegar_emprestado.php' class='itens-disponiveis_detalhes'>Pegar emprestado</a></td>
                    </tr>";
            }
            ?>
            </tbody>
        </table>


<!--      Tabela com livros que já foram emprestados e estão indisponíveis-->
      <br>
      <h2 class="titulo_secao">Livros Indisponíveis no Momento</h2>
      <br>
      <table class="livros_disponíveis">
          <thead>
          <tr>
              <td class="titulo_tabela">Título do livro</td>
              <td class="titulo_tabela">Descrição</td>
              <td class="titulo_tabela">Edição</td>
              <td class="titulo_tabela">Data prevista para devolução</td>
              <td class="titulo_tabela">Emprestado para quem?</td>
              <td class="titulo_tabela">Contato</td>
          </tr>
          </thead>

          <tbody>


          <?php
          $sql = "SELECT c.titulo_item, c.descricao_item, c.preco_item, c.usuario_id, c.dtdev, u.nome, u.email
                    FROM cadastro_novos_itens as c
                    JOIN usuarios as u 
                    WHERE u.id = c.usuario_id and c.usuario_id IS NOT NULL ";


          $res = mysqli_query($conn, $sql);

          while ($row = mysqli_fetch_assoc($res))
          {
              echo
                  "<tr>
                        <td>" . $row['titulo_item'] . "</td>
                        <td>" . $row['descricao_item'] . "</td>
                        <td>" . $row['preco_item'] . "</td>
                        <td>" . $row['dtdev'] . "</td>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['email'] . "</td>
                    </tr>";
          }
          ?>
          </tbody>
      </table>

  </section>

<?php

include "includes/rodape.php";

?>