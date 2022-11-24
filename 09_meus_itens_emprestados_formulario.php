<?php


    include "includes/conecta.php";
    include "includes/autentica.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {

        $id = $_SESSION['id'];
        $item = $_POST['devolverLivro'];
        $dtdev = $_POST['dtdev'];

        //Monta o SQL para inserir os dados do formulário do MySQL
        $sql = "UPDATE cadastro_novos_itens SET usuario_id=NULL, dtdev=NULL WHERE usuario_id='$id'";


        //Envia código do SQL para o MySQL
        $res = mysqli_query($conn, $sql);

        if($res) {
            header("Location: 05_itens.php");
        } else {
            echo "ERRO AO INSERIR!";
        }

    }

?>
