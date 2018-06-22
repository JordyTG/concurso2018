<?php

class DuenioProducto {
    private $numero_orden;
    private $fecha_ingreso;
    private $nombre_cliente;
    private $resumen_activ;
    
    function getNumero_orden() {
        return $this->numero_orden;
    }

    function getFecha_ingreso() {
        return $this->fecha_ingreso;
    }

    function getNombre_cliente() {
        return $this->nombre_cliente;
    }

    function getResumen_activ() {
        return $this->resumen_activ;
    }

    function setNumero_orden($numero_orden) {
        $this->numero_orden = $numero_orden;
    }

    function setFecha_ingreso($fecha_ingreso) {
        $this->fecha_ingreso = $fecha_ingreso;
    }

    function setNombre_cliente($nombre_cliente) {
        $this->nombre_cliente = $nombre_cliente;
    }

    function setResumen_activ($resumen_activ) {
        $this->resumen_activ = $resumen_activ;
    }


    
    
}
