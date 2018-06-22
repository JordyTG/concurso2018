<?php
session_start();
include_once '../model/Model.php';
$Model=new Model();
switch ($opcion){
    case "ingreso":
        $usuario = $_REQUEST['usuario'];
        $contrasenia = $_REQUEST['contrasenia'];
        print "---"-$contrasenia."-----------".$usuario;
        
        $user=$Model->getUsuario($usuario,$contrasenia);
        
        $rol=$user->getRolusuario();
//        if(isset($_SESSION['msj'])){
//                unset($_SESSION['msj']);
//        }
        $_SESSION['userconcurso']= serialize($user);
        $_SESSION['rolconcurso']= $rol;
        header('Location:../view/index.php');    
        break;
    case "salir":
        unset($_SESSION['userconcurso']);
        header('Location: ../view/index.php');
        break;
    default :
        header('Location:../view/index.php');
}
