 <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="./css/miestilo.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <header><h1><center>Social Gallery</center></h1></header><br>
    <div style="text-align: right;">
        <a href="home.php">Login</a>
    </div> 
        <!Formulario-->
        <form id='login' action='registros.proc.php.' method='post' accept-charset='UTF-8'>
                <table>
                    <tr>
                        <th colspan="2">Registro</th>
                    </tr>
                    <tr>
                        <th><label for='username' >Introduce un nombre de usuario</label></th>
                        <th><input type='text' placeholder="Introduce el usuario" name='username' id='username'  maxlength="50" required/></th>
                    </tr>
                    <tr>
                        <th><label for='password' >Contraseña:</label></th>
                        <th><input type='password' placeholder="Introduce contraseña" name='password' id='password' maxlength="50" required/></th>
                    </tr>
                    <tr>
                        <th><label for='password_verify' >Verificar Contraseña:</label></th>
                        <th><input type='password' placeholder="Introduce de nuevo la contraseña" name='password_verify' id='password_verify' maxlength="50" required/></th>
                    </tr>
                    <tr>
                        <th colspan="2"><button class="button" type="submit">Registrarse</button></th>
                    </tr>
                </table>
        </form>