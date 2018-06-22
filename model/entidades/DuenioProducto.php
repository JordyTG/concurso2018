<?php

class DuenioProducto {
   private $numero_orden;
    private $fecha_ingreso;
    private $nombre_cliente;
    private $desarrollador_asignado;
    private $resumen_activ; 
    private $prioridad_orden;
    private $estado_orden;
    
    function getNumero_orden() {
        return $this->numero_orden;
    }

    function getFecha_ingreso() {
        return $this->fecha_ingreso;
    }

    function getNombre_cliente() {
        return $this->nombre_cliente;
    }

    function getDesarrollador_asignado() {
        return $this->desarrollador_asignado;
    }

    function getResumen_activ() {
        return $this->resumen_activ;
    }

    function getPrioridad_orden() {
        return $this->prioridad_orden;
    }

    function getEstado_orden() {
        return $this->estado_orden;
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

    function setDesarrollador_asignado($desarrollador_asignado) {
        $this->desarrollador_asignado = $desarrollador_asignado;
    }

    function setResumen_activ($resumen_activ) {
        $this->resumen_activ = $resumen_activ;
    }

    function setPrioridad_orden($prioridad_orden) {
        $this->prioridad_orden = $prioridad_orden;
    }

    function setEstado_orden($estado_orden) {
        $this->estado_orden = $estado_orden;
    }
}
