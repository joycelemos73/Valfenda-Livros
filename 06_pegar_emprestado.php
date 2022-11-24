<?php

    include "includes/conecta.php";
    require "includes/autentica.php";
    include "includes/topo.php";
    include 'includes/barra_lateral.php';
    include "includes/cabecalho.php";

?>

<body>

  <section class="barra-lateral-navegacao">
      <?php include "includes/nav_lateral.php"?>
    
    <article class="descricao-pagina">
        <h1>Pegar emprestado</h1>
        <p>Aqui você poderá pegar UM item emprestado e ver a data para devolução</p>

        <br>
        <form class="formulario-cadastrar-item" action="06_pegar_emprestado_formulario.php" method="post" >

            <label for="pegarEmprestado" >Pegar Emprestado</label>
            <select id="pegarEmprestado" name="pegarEmprestado">
                <option>Selecione</option>
                <?php

                $sql = "SELECT id, titulo_item FROM cadastro_novos_itens WHERE usuario_id IS NULL";

                $res = mysqli_query($conn, $sql);

                if($res) {
                    while ($row = mysqli_fetch_assoc($res)) {

                        echo "<option value='".$row['id']."'>".$row['titulo_item']."</option>";
                    }
                }

                ?>
            </select>
            <br>
            <br>
            <br>
            <label for="dtdev">Data para devolução</label>
            <input type="date" name="dtdev" value="" />


            <div class="botao-confirmar-emprestimo">
                <button type="submit" value="Confirmar empréstimo" class="confirmar-emprestimos">Confirmar empréstimo</button>
            </div>

        </form>
    </article>
  </section>

<?php

include "includes/rodape.php";

?>