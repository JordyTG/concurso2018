<?php
session_start();
include_once 'Model.php';
$Model=new Model();
switch ($opcion){
    case "ingreso":
        $usuario = $_REQUEST['usuario'];
        $contrasenia = $_REQUEST['contrasenia'];
        if(empty($usuario) or empty($contrasenia)){
            header('Location:../view/index.php');
        }
        $tipoUsuario=$_REQUEST['tipoUsuario'];
            if(isset($_SESSION['msj'])){
                unset($_SESSION['msj']);
            }
        $usuario=$Model->getUsuario($usuario,$contrasenia);
        if($usuario==null){
            $_SESSION['msj']="Usuario No Encontrado";
            header('Location: ../view/login.php');
        }
        $_SESSION['user']= serialize($usuario);
        header('Location:../view/index.php');    
        break;
    default :
        header('Location:../view/index.php');
}
