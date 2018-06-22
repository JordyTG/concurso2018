<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author JordyTG
 */
class Usuario {
    private $numero_orden, $id_usuario, $fecha_ingreso, $nombre_cliente, $desarrollador_asignado, $resumen_activ, $prioridad_orden, $estado_orden;
    function __construct($numero_orden, $id_usuario, $fecha_ingreso, $nombre_cliente, $desarrollador_asignado, $resumen_activ, $prioridad_orden, $estado_orden) {
        $this->numero_orden = $numero_orden;
        $this->id_usuario = $id_usuario;
        $this->fecha_ingreso = $fecha_ingreso;
        $this->nombre_cliente = $nombre_cliente;
        $this->desarrollador_asignado = $desarrollador_asignado;
        $this->resumen_activ = $resumen_activ;
        $this->prioridad_orden = $prioridad_orden;
        $this->estado_orden = $estado_orden;
    }

    function getNumero_orden() {
        return $this->numero_orden;
    }

    function getId_usuario() {
        return $this->id_usuario;
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


}
