<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cadastro-pet';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($conexao -> connect_errno)
{
    echo "erro";
}

else
{
    echo "Conexção  conectado com sucesso";
}

?>
