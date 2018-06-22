<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author DELL
 */
class Login {
    private $idusuario;
    private $rolusuario;
    private $name;
    private $password;
    
    function getIdusuario() {
        return $this->idusuario;
    }

    function getRolusuario() {
        return $this->rolusuario;
    }

    function getName() {
        return $this->name;
    }

    function getPassword() {
        return $this->password;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setRolusuario($rolusuario) {
        $this->rolusuario = $rolusuario;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setPassword($password) {
        $this->password = $password;
    }


}
