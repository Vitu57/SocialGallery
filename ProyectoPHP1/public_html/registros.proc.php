<?php
include 'conexion.php';

//Declarar variables
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
$hash = md5($password);
$password_verify = $_REQUEST["password_verify"];
$hash_verify = md5($password_verify);
$id_user = rand (1 ,99);

//Comprobar si el usuario existe en la base de datos
if (isset($_REQUEST["username"])) {
    $q = mysqli_query($connexion, "SELECT * FROM users WHERE user = '$username'");
    $row_cnt = mysqli_num_rows($q);
}else{
    echo"<script type=\"text/javascript\">alert('Introduce un nombre de usuario'); window.location='index.php';</script>";
}

//Insertamos el registro del usuario
if ($hash == $hash_verify){
    if ($row_cnt == 0) {
        $sql = "INSERT INTO users (id, user, password) VALUES ('$id_user', '$username', '$hash')";
    }else{
        echo"<script type=\"text/javascript\">alert('Este nombre de usuario ya esta en uso'); window.location='index.php';</script>";
    }
}else{
    echo"<script type=\"text/javascript\">alert('la contraseña no coincide'); window.location='index.php';</script>";
}

if (mysqli_query($connexion, $sql)) {
    echo 'Registrado correctamente'.'<br>';
    echo "<a href='home.php'>Volver al login</a>&nbsp;&nbsp;";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connexion);
}

//Cerramos conexion a la base de datos
$mysqli_close = mysqli_close($connexion);