<?php

    require "includes/autentica.php";
    include "includes/topo.php";
    include "includes/conecta.php";
    include 'includes/barra_lateral.php';
    include "includes/cabecalho.php";

?>

<body>

  <section class="barra-lateral-navegacao">
      <?php include "includes/nav_lateral.php"?>


      <article class="descricao-pagina">
      <h1>Devolver</h1>
      <p>Aqui você poderá ver devolver os itens que pegou emprestado</p>
            <table class="meus_itens_emprestados-tabela">
              <thead>
                <tr>
                  <td>Livro emprestado</td>
                  <td>Data limite para devolução</td>
                  <td> - </td>
                </tr>
              </thead>

              <tbody>

                    <?php

                    $id = $_SESSION['id'];

                    $sql = "SELECT c.titulo_item, c.dtdev
                    FROM cadastro_novos_itens as c
                    JOIN usuarios as u 
                    WHERE u.id = c.usuario_id and c.usuario_id = $id";

                    $res = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($res)) {
                        echo
                            "<tr>
                          <td>" . $row['titulo_item'] . "</td>
                          <td>" . $row['dtdev'] . "</td>
                          <td>
                              <form action='09_meus_itens_emprestados_formulario.php' method='post'>
                                  <button 
                                      type='submit' 
                                      class='itens-disponiveis_detalhes' 
                                      id='devolverLivro' 
                                      name='devolverLivro'>
                                      Devolver
                                  </button>
                              </form>
                          </td>
                      </tr>";
                    }
                  ?>

              </tbody>
            </table>
    </article>
  </section>

</body>
</html>