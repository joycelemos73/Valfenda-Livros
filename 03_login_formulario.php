<?php

    $login = $_POST['email'];
    $senha = $_POST['senha'];

    //Conecta com a base de dados
    include "includes/conecta.php";

    $sql = "SELECT * FROM usuarios WHERE email = '$login' AND senha = '$senha'";
    $res = mysqli_query($conn, $sql);


    //Obtém quantidade de registros encontrados
    $qtdeRegistros = mysqli_num_rows($res);

    //Encontrou login e senha compatíveis
    if($qtdeRegistros > 0){

        //Inicia a sessão
        session_start();

        //Obtém dados do usuário
        $row = mysqli_fetch_assoc($res);

        //Armazena informações do usuário na sessão
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row['nome'];

        header("Location: 04_pagina_inicial_logada.php");
    }
    else {
        header("Location: 03_login.php?erro=1");
    }
?>