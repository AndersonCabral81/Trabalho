<?php

    session_start();

    $localhost = "localhost";
    $user = "root";
    $passw = "";
    $banco = "geral";

    global $pdo;

    try {
        $pdo = new PDO("mysql:dbname=".$banco.";host=".$localhost,$user,$passw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "To conectado, testando";
    } catch (PDOException $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }


?>