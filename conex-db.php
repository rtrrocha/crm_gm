<?php

$server = "localhost";  //Servidor
$db = "";         //Nome da Base de Dados
$user = "root";         //Usuário da Base de Dados
$pass = "";    //Senha do usuário da Base de Dados, se sua base não tiver senha deixe apenas com "";

$conn = new mysqli($server, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>