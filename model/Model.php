<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author JordyTG
 */

include_once 'entidades/Login.php';
include_once 'Database.php';

class Model {
    public function getUsuario($name, $password){
        //Obtenemos la informacion del producto especifico:
        $pdo = Database::connect();
        //Utilizamos parametros para la consulta:
        $sql = "select * from usuario where name=? and password=?";
        $consulta = $pdo->prepare($sql);
        //Ejecutamos y pasamos los parametros para la consulta:
        $consulta->execute(array($name, $password));
        //Extraemos el registro especifico:
        $dato = $consulta->fetch(PDO::FETCH_ASSOC);
        //Transformamos el registro obtenido a objeto:
        if($dato==null){
            $user=null;    
        }else{
            $user = new Login($dato['id_usuario'],$dato['rol_usuario'],$dato[''],$dato['name'],$dato['password']);
        }
        Database::disconnect();
        return $user;
    }
    
    public function getAdministradores(){
        //obtenemos la informacion de la bdd:
        $pdo = Database::connect();
        $sql = "select * from administrador";
        $resultado = $pdo->query($sql);
        //transformamos los registros en objetos de tipo Factura:
        $listado = array();
        foreach ($resultado as $dato){//$codProducto, $stock, $descripcion, $precioUnit, $idProveedor, $tipoProducto
            $administrador = new Administrador($dato['IDADMINISTRADOR'],$dato['CEDULA'],$dato['NOMBREADMINISTRADOR'],$dato['FECHANACIMIENTO'],$dato['CIUDADNACIMIENTO'],$dato['DIRECCION'],$dato['TELEFONO'],$dato['ESTADO'],$dato['ROL'],$dato['EMAIL'],$dato['PASSWORD']);
            array_push($listado, $administrador);
        }
        Database::disconnect();
        //retornamos el listado resultante:
        return $listado;
    }
    
    
    ///////////////////////////////EXECUTE UPDATES ->EJEMPLO////
    public function insertarAdministrador($CEDULA, $NOMBREADMINISTRADOR, $FECHANACIMIENTO, $CIUDADNACIMIENTO, $DIRECCION, $TELEFONO, $ESTADO, $ROL,$EMAIL,$PASSWORD){
        $pdo = Database::connect();
        $sql = "insert into Administrador (CEDULA, NOMBREADMINISTRADOR, FECHANACIMIENTO, CIUDADNACIMIENTO, DIRECCION, TELEFONO, ESTADO, ROL,EMAIL,PASSWORD) values(?,?,?,?,?,?,?,?,?,?)";
        $consulta=$pdo->prepare($sql);
        //Ejecutamos y pasamos los parametros:
        try{
            $consulta->execute(array($CEDULA, $NOMBREADMINISTRADOR, $FECHANACIMIENTO, $CIUDADNACIMIENTO, $DIRECCION, $TELEFONO, $ESTADO, $ROL,$EMAIL,$PASSWORD));
        }  catch (PDOException $e){
            Database::disconnect();
            throw new Exception($e->getMessage());
        }
        Database::disconnect();
    }
    ///////////////////////////////////////////////////////////
    
}
