<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="../controller/controllerLogin.php">
            <input type="hidden" value="ingreso" name="opcion">
            <h3> Ingrese las Credenciales</h3>
            <h3> Ingrese el Usuario</h3>
            <input type="text" name="usuario"  placeholder="usuario" pattern="^[a-zA-Z0-9_.-]*$">
            <h3> Ingrse la Contraseña</h3>
            <input type="password" name="contrasenia"  placeholder="contraseña" minlength="8"><br>
            <br><button type="submit">Ingresar</button> 
        </form>
    </body>
</html>
