<?php
//criar variaveis de conexão
$servidor = "localhost";
$usuario = "bruno" ;
$senha = "123qwe.";
$bd = "bdescola";

//criar a conexão
// msqli_connect (Hostname,user,password,db)
$con = mysqli_connect ($servidor,$usuario,$senha,$bd);

//var_dump ($con);

if ($con) {
echo "Conectou ao DB";
} else {
    echo "Falha de conexão com DB";
}
