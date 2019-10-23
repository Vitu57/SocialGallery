<!DOCTYPE html>

    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="./css/miestilo.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <script type="text/javascript" src="codigo.js">
    </script>
    <header><h1><center>Login</center></h1></header><br>
    <div style="text-align: right;">
        <?php
            echo "<a href='registros.php'>Registrarse</a>&nbsp;&nbsp;";
        ?>
    </div> 
    <p id="alerta" class="alerta" style='text-align: center' ></p>
        <!Formulario-->
            <form id='login' action='login.proc.php' method='post' accept-charset='UTF-8' onsubmit = "return ValidacionLogin()">
                <table>
                    <tr>
                        <th colspan="2">Login</th>
                    </tr>
                    <tr>
                        <th><label for='username' >Nombre de Usuario:</label></th>
                        <th><input type='text' placeholder="Introduce el usuario" name='username' id='username'  maxlength="50"/></th>
                    </tr>
                    <tr>
                        <th><label for='password' >Contraseña:</label></th>
                        <th><input type='password' placeholder="Introduce contraseña" name='password' id='password' maxlength="50"/></th>
                    </tr>
                    <tr>
                        <th colspan="2"><button class="button" type="submit">Entrar</button></th></th>
                    </tr>
                </table>
            </form>
            

