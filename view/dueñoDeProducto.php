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
        <h3>PERFIL DUEÑO DE PROYECTO</h3>
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
            include_once '../model/entidades/DuenioProducto.php';
    //verificamos si existe en sesion el listado de productos:
            if (isset($_SESSION['listado'])) {
                $listado = unserialize($_SESSION['listado']);
                foreach ($listado as $r) {
                    echo "<tr>";
                    echo "<td>" . $r->getNumero_orden() . "</td>";
                    echo "<td>" . $r->getFecha_ingreso() . "</td>";
                    echo "<td>" . $r->ggetNombre_cliente() . "</td>";
                    echo "<td>" . $r->getDesarrollador_asignado() . "</td>";
                    echo "<td>" . $r->etResumen_activ() . "</td>";
                    echo "<td>" . $r->getPrioridad_orden()  . "</td>";
                     echo "<td>" . $r->getEstado_orden()   . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "No se han cargado datos.";
            }
            ?>
        </table>
    </body>
</html>
