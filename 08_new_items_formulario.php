<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {

        include "includes/conecta.php";

        //    $id = $_POST['id'];
        $titulo_item = $_POST['titulo_item'];
        $descricao_item = $_POST['descricao_item'];
        $preco_item = $_POST['preco_item'];

        //Monta o SQL para inserir os dados do formulário do MySQL
        $sql = "INSERT INTO cadastro_novos_itens (titulo_item, descricao_item, preco_item)
                        VALUES 
                        ('$titulo_item', '$descricao_item', '$preco_item')";

        //Envia código do SQL para o MySQL
        $res = mysqli_query($conn, $sql);

        if($res) {
            header("Location: 05_itens.php");
        } else {
            echo "ERRO AO INSERIR!";
        }

    }

    if(isset($_FILES['foto_item'])) {

    }

?>