<?php



    $conn = mysqli_connect('localhost', 'root', '', 'atp');

    if(!$conn)
    {
        die("ERRO: Não conseguiu conectar ao MySQL. " . mysqli_connect_error());
    }

?>