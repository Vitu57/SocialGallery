<?php
//Conectar con base de datos
require_once 'conexion.php';
//Declarar variables y encriptar contraseña
$usuario = $_REQUEST["username"];
$pass = $_REQUEST["password"];
$hash = md5($pass);

if (isset($_REQUEST["username"])) {
    $q = mysqli_query($connexion, "SELECT * FROM users WHERE user = '$usuario' AND password = '$hash'");
    $row_cnt = mysqli_num_rows($q);

//Comprobar que el usuario está registrado
    if (!empty($q) && $row_cnt == 1) {
        session_start();
        $_SESSION['nombre'] = $usuario;
        header("Location: index.php");
    } else {
        header("Location: home.php");
    }
    $close = mysqli_close($connexion);
}else{
     header("Location: home.php");   
}
