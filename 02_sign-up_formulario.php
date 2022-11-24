<?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        include "includes/conecta.php";

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //Se ID estiver vazio, então é INSERT
        if (empty($id)) {

            //Monta o SQL para inserir os dados do formulário do MySQL
            $sql = "INSERT INTO usuarios (nome, endereco, cpf, email, senha)
                                VALUES 
                                ('$nome', '$endereco', '$cpf', '$email', '$senha')";

            //Envia código do SQL para o MySQL
            $res = mysqli_query($conn, $sql);

            //Se inseriu com sucesso
            if($res) {
                header("Location: 04_pagina_inicial_logada.php");
            } else{
                echo "ERRO AO INSERIR!";
            }
        } else {
            $sql = "UPDATE usuarios SET
                        nome  = '$nome',
                        endereco = '$endereco',
                        cpf = '$cpf',
                        email = '$email',
                        senha = '$senha'
                    WHERE id = $id";
            //Envia código do SQL para o MySQL
            $res = mysqli_query($conn, $sql);

            //Se atualizou com sucesso
            if($res) {
                header("Location: 08_new_items.php");
            } else {
                echo "ERRO AO INSERIR!";
            }
        }

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

    }



?>