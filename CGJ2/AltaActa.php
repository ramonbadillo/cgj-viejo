<?php
    include("Lugar.php");
    include("Usuario.php");
    include("Couch.php");
    include("Acta.php");

    //$Municipio=$_POST['Municipio'];
    $Municipio="Valparaiso";

    //print_r($_POST);
    //foreach($_POST as $variable){
    //    echo $variable."/";
    //}
    //echo $_POST['Trabajom'];
    
$No=$_POST['No'];
$Curp=$_POST['Curp'];
$Nombre=$_POST['Nombre'];
$Fden=$_POST['Fden'];
$Hora=$_POST['Hora'];
$Lugardenacimiento=$_POST['Lugardenacimiento'];
$Comparecio=$_POST['Comparecio'];
$Nombrep=$_POST['Nombrep'];
$Escoloaridadp=$_POST['Escoloaridadp'];
$Origenp=$_POST['Origenp'];
$Trabajop=$_POST['Trabajop'];
$Edadp=$_POST['Edadp'];
$Ocupacionp=$_POST['Ocupacionp'];
$PosTrabajop=$_POST['PosTrabajop'];
$Domiciliop=$_POST['Domiciliop'];
$Edocivilp=$_POST['Edocivilp'];
$Nombrem=$_POST['Nombrem'];
$Escolaridadm=$_POST['Escolaridadm'];
$Origenm=$_POST['Origenm'];
$Trabajom=$_POST['Trabajom'];
$Edadm=$_POST['Edadm'];
$Ocupacionm=$_POST['Ocupacionm'];
$PosTrabajom=$_POST['PosTrabajom'];
$Domiciom=$_POST['Domiciom'];
$Edocivilm=$_POST['Edocivilm'];
$Abuelop=$_POST['Abuelop'];
$Edadp=$_POST['Edadp'];
$Nacionalidadap=$_POST['Nacionalidadap'];
$Abuelap=$_POST['Abuelap'];
$Edadaap=$_POST['Edadaap'];
$Nacionalidadaap=$_POST['Nacionalidadaap'];
$Comiciliosap=$_POST['Comiciliosap'];
$Abuelom=$_POST['Abuelom'];
$Edadam=$_POST['Edadam'];
$Nacionalidadam=$_POST['Nacionalidadam'];
$Abuelam=$_POST['Abuelam'];
$Edadaam=$_POST['Edadaam'];
$Nacionalidadaam=$_POST['Nacionaliadadaam'];
$Domiciliosam=$_POST['Domiciliosam'];
$T1nombre=$_POST['T1nombre'];
$T1edad=$_POST['T1edad'];
$T1Nacionalidad=$_POST['T1Nacionalidad'];
$T1domicilio=$_POST['T1domicilio'];
$T2nombre=$_POST['T2nombre'];
$T2Edad=$_POST['T2Edad'];
$T2nacionalidad=$_POST['T2nacionalidad'];
$T2domicilio=$_POST['T2domicilio'];
$T3Nombre=$_POST['T3Nombre'];
$T3edad=$_POST['T3edad'];
$T3nacionalidad=$_POST['T3nacionalidad'];
$T3domicilio=$_POST['T3domicilio'];
$nombDist=$_POST['nombDist'];
$edadDist=$_POST['edadDist'];
$nacDist=$_POST['nacDist'];
$DomDist=$_POST['DomDist'];
$Nooficialia=$_POST['Nooficialia'];
$Nolibro=$_POST['Nolibro'];
$Fechaderegistro=$_POST['Fechaderegistro'];
$Localidad=$_POST['Localidad'];




    $acta = new Acta($No,$Curp,$Nooficialia,$Nolibro,$Localidad,$Fechaderegistro,$Municipio,"Zacatecas",$Nombre,
    "","",$Fden,$Lugardenacimiento,"","",$Comparecio,$Nombrep,"",
    $Edadp,$Domiciliop,$Origenp,$Edocivilp,$Ocupacionp,$Nombrem,"",$Edadm,"",$Origenm,$Edocivilm,
    $Ocupacionm,$Abuelop,"",$Nacionalidadap,$Abuelap,$Edadaap,$Nacionalidadaap,"",$Abuelom,$Edadam,
    "",$Abuelam,$Edadaam,$Nacionalidadaam,$Domiciliosam,$T1nombre,"",$T1Nacionalidad,$T1edad,
    $T1domicilio,$T2nombre,"",$T2nacionalidad,$T2Edad,$T2domicilio,$T3Nombre,"",$T3edad,$T3domicilio,
    "","","","","","","","","","","",
    "","","","","","","",
    "","","","","",$Trabajop,"","Si");
//$Vivo
    $acta->alta($Municipio);

?>
