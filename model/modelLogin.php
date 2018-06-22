<?php

include_once './Database.php';
include_once './entidades/Login.php';

/**
 * Description of modelLogin
 *
 * @author DELL
 */
class modelLogin {
    //put your code here.
    public function Validacion($usuario, $cotrasenia){
        $pdo = Database::connect();
        $sql = "CONSULTA";
        $consulta = $pdo->prepare($sql);
        $consulta->execute(array($usuario,$cotrasenia));
        $res = $consulta->fetch(PDO::FETCH_ASSOC);
        $login = new Login();
        $login->setIdusuario($res['id_usuario']);
        $login->setRolusuario($res['rol_usuario']);
        $login->setName($res['name']);
        $login->setPassword(['password']);
        Database::disconnect();

    }
}
