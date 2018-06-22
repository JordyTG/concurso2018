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
        <div align="center">
        <?php
        session_start();
        if(isset($_SESSION['msj'])){
            echo $_SESSION['msj'];
        }
        ?>
        <form action="../controller/controller.php">
            <input type="text" name="usuario" value="" placeholder="Usuario"></br>
            <input type="password" name="contrasenia" value="" placeholder="Password"></br>
            <select name="tipoUsuario">
                <option>Jefe del Proyecto</option>
                <option>Desarrollador</option>
                <option>Dueño del Proyecto</option>
            </select>
            <input type="submit" name="opcion" value="ingreso">
        </form>
        </div>
    </body>
</html>
