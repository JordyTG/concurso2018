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
        <h3>PERFIL DESARROLLADOR</h3>
        
         <table border="1">
            <tr>
                <th>NUMERO DE ORDEN</th>
                <th>FECHA INGRESO</th>
                <th>NOMBRE CLIENTE</th>
                <th>DESARROLLADOR</th>
                <th>RESUMEN DE ACTIVIDADES</th>
                <th>PRIORIDAD</th>
                <th>ESTADO</th>
            </tr>
            <?php
            include_once '../model/entidades/Cliente.php';
    //verificamos si existe en sesion el listado de productos:
            if (isset($_SESSION['listado'])) {
                $listado = unserialize($_SESSION['listado']);
                foreach ($listado as $r) {
                    echo "<tr>";
                    echo "<td>" . $r->getCedula() . "</td>";
                    echo "<td>" . $r->getApellidos() . "</td>";
                    echo "<td>" . $r->getNombres() . "</td>";
                    echo "<td>" . $r->getGenero() . "</td>";
                    echo "<td>" . $r->getDireccion() . "</td>";
                    echo "<td>" . $r->getTelefono() . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "No se han cargado datos.";
            }
            ?>
        </table>
    </body>
</html>
