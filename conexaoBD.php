<?php
    #variaveis de dados fixos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "amigos";
    $conexao = new mysqli($servername, $username, $password, $dbname);

    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
    }
?>