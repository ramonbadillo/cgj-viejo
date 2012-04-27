<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    //include("Lugar.php");
    include("Usuario.php");
    include("Couch.php");
   
    $usuario = $_POST['Usuario'];
    $nombre = $_POST['Nombre'];
    $municipio = $_POST['mun'];
    $pass = $_POST['uPass'];
    $pass2=$_POST['uPass2'];
    $privilegio = $_POST['privilegio'];
    
    $nombrehidden = $_POST['NombreHidden'];
    $passhidden = $_POST['PassHidden'];
    
    if($usuario=="" || $nombre=="" || $municipio=="" || $pass=="" || $privilegio==""){
        include_once("Registro.html");
        echo "<script>alert('Datos Vacios');</script>";    
    }
    else if($pass!=$pass2){
        include_once("Registro.html");
        echo "<script>alert('Las contraseñas no coinciden');</script>";    
    }
    else{
        $user = new Usuario($nombre, $usuario, $pass,$municipio,$privilegio);
            $user->cambio($user,$nombrehidden,$passhidden);
            include_once("Registro.html");
            echo "<script>alert('Usuario modificado correctamente');</script>";    
    }
   
    
?>
