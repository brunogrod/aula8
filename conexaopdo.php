<?php

$server = "localhost";
$user   = "bruno";
$pass   = "123qwe.";
$bd     = "bdcurso";

try {
    $con = new PDO("mysql:host=$server;dbname=$bd",$user,$pass);
    $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado ao banco de dados com sucesso";
} catch (PDOException $e) {
    echo "Erro ao connectar o Banco de dados:" .$e ->getMessage ();
}

