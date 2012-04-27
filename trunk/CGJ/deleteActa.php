<?php
    include("Couch.php");
    include("Lugar.php");
    include("Inicio.php");
    include("Usuario.php");
    include("Acta.php");
    session_start();

    $a = new Acta($_GET['num'],$_GET['curp'],"","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","","");
    Acta::delete($_SESSION['municipio']);
    
?>
