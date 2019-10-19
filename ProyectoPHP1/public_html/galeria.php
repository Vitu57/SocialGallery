<?php
//Declaramos variables y extraemos extension del archivo
include 'conexion.php';
include 'header.php';
$ruta = $_FILES["foto"]["name"];
$foto = $_FILES["foto"]["name"];
$extension = explode(".", $foto);
$t = $extension[1];
$titol = $_REQUEST["titol"];
$destino = "imagenes/".$foto;
copy($ruta,$destino);
$id_al = rand ( 1, 99);
$data = date("m.d.y");

//Verificacion de la conexión al servidor
if (!$connexion) {
      die("Conexión fallida: " . mysqli_connect_error());
}

//Comprobar si el registro esta en la base de datos
$sql_exist="Select * from gallery where path='imagenes/$foto'";
$resultado=mysqli_query($connexion, $sql_exist);
$row_result = mysqli_num_rows($resultado);

//Medidas de la imagen
list($width, $height) = getimagesize("$destino");

//Coger el id del usuario
$nombre_user= $_SESSION['nombre'];
$sql_user = mysqli_query($connexion, "SELECT id FROM users WHERE user='$nombre_user'");
while ($res = mysqli_fetch_array($sql_user)) {
    $id_user = $res["id"];
}

//Insertar la información en la base de datos filtrando extension, tamaño y si existe en la base de datos
if ($t == 'png' || $t == 'jpg' || $t == 'gif' || $t == 'jpeg') {
    if ($width < 1920 || $height < 1080) {
        if ($row_result == 0) {
            $sql = "INSERT INTO gallery (id, name, path, dateimg, id_user) VALUES ('$id_al', '$titol', '$destino', '$data', '$id_user')";
        } else {
            echo"<script type=\"text/javascript\">alert('Esta imagen ya existe en la base de datos'); window.location='index.php';</script>";
        }
    } else {
        echo"<script type=\"text/javascript\">alert('La imagen es muy grande (1920x1080 max)'); window.location='index.php';</script>";
    }
} else {
    echo"<script type=\"text/javascript\">alert('Solo permite jpg, jpeg, png o gif'); window.location='index.php';</script>";
}
if (mysqli_query($connexion, $sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connexion);
}

//Cerramos conexion a la base de datos
$mysqli_close = mysqli_close($connexion);