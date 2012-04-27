<?php
    include("Lugar.php");
    include("Usuario.php");
    include("Couch.php");
    $Municipio = $_POST['element_1'];
    $nSobrenombre = $_POST['element_2'];

    echo $Municipio;
    echo $nSobrenombre;
    $lugar = new Lugar($Municipio, $Municipio, 0);
    $lugar->addSobrenombre($nSobrenombre);

    //@header("Location: intPerfil.php") ;

?>
