<?php
//Conexión a la base de datos
$usuario = "root";
$contraseña = "";
$servidor = "localhost";
$basededatos = "users_db";

$connexion = mysqli_connect ($servidor, $usuario, $contraseña, $basededatos) or 
        die ("No se puede conectar con la base de datos\n");
