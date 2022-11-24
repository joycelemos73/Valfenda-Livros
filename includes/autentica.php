<?php

    //(Re)iniciar sessão
    session_start();

    //Se NÃO foi criada uma sessão autenticada
    //Se NÃO existe o valor ID guardado na sessão
    if(!isset($_SESSION['id']))
    {
            header("Location: 03_login.php?autentica=1");
    }


?>