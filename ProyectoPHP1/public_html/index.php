<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <head>
        <title>Social Galery</title>
        <link rel="stylesheet" type="text/css" href="./css/miestilo.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <header>
        <h1>Social Galery</h1>
        <?php
        include 'header.php';
        ?>
    </header><br>
        <!Formulario-->
            <form action="galeria.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <th class="tabla1"><input type="file" name="foto" id="foto"></th>
                    </tr>
                    <tr>
                        <th class="tabla1"><label for="titol">Introduir títol</label>
                        <input name="titol" type="text" id="titol" /></th>
                    </tr>
                    <tr>
                        <th class="tabla1"><button class="button" type="submit">Enviar</button></th>
                    </tr> 
                </table>
            </form>
        <br>
        <br>
        <table>
            <thead>
                <tr class="texto">
                    <th>
                        <?php
                        //Conectamos a la base de datos
                        require_once 'conexion.php';
                        
                        $userb=$_SESSION['nombre'];
                        //Buscamos el titulo y la imagen para mostrar
                        $sql = mysqli_query($connexion, "SELECT * FROM gallery G LEFT JOIN users U ON G.id_user = U.id WHERE U.user='$userb' ;");

                        //Mostramos los datos de la consulta
                        while ($res = mysqli_fetch_array($sql)) {
                            echo $res["name"] . "<br>";
                            echo '<img src="' . $res["path"] . '"width="600" heigth="600"><br>';
                        }
                        $mysqli_close = mysqli_close($connexion);
                        ?>
                    </th>
                </tr>
            </thead>
            <tr>
            </tr>
            </table>
                
        
    

