<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    session_start();
    include_once '../model/Model.php';
    if(isset($_SESSION['userconcurso'])){
        $USER= unserialize($_SESSION['userconcurso']);
        $ROL= $_SESSION['rolconcurso'];
   
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a><?php
            if(isset($_SESSION['msj'])){
                echo $_SESSION['msj'];
            }
        ?></a>    
        
        <?php if($ROL=="Jefe de Proyecto"){?>
        <h1>PAGINA JEFE </h1></br>
        <h2><?php echo $USER->getName()?></h2>
        
        <!--  CODIGO  -->    
        
        <a href="../controller/controller.php?opcion=salir">SALIR</a>
        <?php }?>
        
        
        
        
        
        
        <?php if($ROL=="Desarrollador"){?>
        <h1>PAGINA DESARROLLADOR </h1></br>
        <h2><?php echo $USER->getName()?></h2>
        
        <!--  CODIGO  -->    
        
        <a href="../controller/controller.php?opcion=salir">SALIR</a>
        <?php }?>
        
        
        
        
        
        
        
        
        <?php if($ROL=="Dueño del Proyecto"){?>
        <h1>PAGINA DUEÑO </h1></br>
        <h2><?php echo $USER->getName()?></h2>
        
        <!--  CODIGO  -->    
        
        <a href="../controller/controller.php?opcion=salir">SALIR</a>
        <?php }?>
            
    </body>
</html>
<?php
    }else{
        header("location: Login.php");
    }
?>