<?php
    include("Lugar.php");
    include("Usuario.php");
    include("Couch.php");
    include("Acta.php");

    session_start();
    $Municipio=$_SESSION['municipio'];

    
$No=$_POST['No'];
$Curp=$_POST['Curp'];
$Nombre=$_POST['Nombre'];
$Fden=$_POST['Fden'];
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
$Edadap=$_POST['Edadap'];
$Nacionalidadap=$_POST['Nacionalidadap'];
$Abuelap=$_POST['Abuelap'];
$Edadaap=$_POST['Edadaap'];
$Nacionalidadaap=$_POST['Nacionalidadaap'];
$Domiciliosap=$_POST['Domiciliosap'];
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
$T3domicilio=$_POST['T3domicilio'];

$Nooficialia=$_POST['Nooficialia'];
$Nolibro=$_POST['Nolibro'];
$Fechaderegistro=$_POST['Fechaderegistro'];
$Localidad=$_POST['Localidad'];

$Vivo=$_POST['Vivo'];
$Sexo=$_POST['Sexo'];

//$x=array("Apozol","Apulco","Atolinga","Benito_Juarez","Calera","Cañitas_de_Felipe_Pescador","Cuauhtémoc","Chalchihuites","Fresnillo","Trinidad_García_de_la_Cadena",
//        "Genaro_Codina","General_Enrique_Estrada","General_Francisco_R._Murguía","El_Plateado_de_Joaquín_Amaro","General_Pánfilo_Natera",
//        "Huanusco","Jalpa","Jeréz","Jiménez_del_Teul","Juan_Aldama","Juchipila","Loreto","Luis_Moya","Mazapil","Melchor_Ocampo","Mezquital_del_Oro",
//        "Miguel_Auza","Momax","Monte_Escobedo","Morelos","Moyahua_de_Estrada","Nochistlán_de_Mejía","Noria_de_Ángeles","Ojocaliente","Pánuco","Pinos",
//        "Río_Grande","Sain_Alto","El_Salvador","Santa_María_de_la_Paz","Sombrerete","Susticacán","Tabasco","Tepechitlán","Tepetongo",
//        "Teúl_de_González_Ortega","Tlaltenango_de_Sánchez_Román","Trancoso","Valparaiso","Vetagrande","Villa_de_Cos","Villa_García","Villa_González_Ortega",
//        "Villa_Hidalgo","Teúl_de_González_Ortega","Villanueva","Zacatecas");

//faltantes
//"Trinidad_García_de_la_Cadena","General_Francisco_R._Murguía","General_Pánfilo_Natera",,"Jiménez_del_Teul","El_Plateado_de_Joaquín_Amaro",
//Jeréz","Nochistlán_de_Mejía","Noria_de_Ángeles","Pánuco","Teúl_de_González_Ortega","Villa_González_Ortega","Villa_García","Tlaltenango_de_Sánchez_Román"
//"Teúl_de_González_Ortega","Tepechitlán","Santa_María_de_la_Paz"
//$x=array(
//        "Trancoso","Valparaiso","Vetagrande","Villa_de_Cos",
//        "Villa_Hidalgo","Villanueva","Zacatecas");
//
//
//
//$lugar = new Lugar("Sombrerete", "Sombrerete", 0);
//			$localidades=$lugar->getMunicipios();
//                    $acta = new Acta($No,$Curp,$Nooficialia,$Nolibro,$Localidad,$Fechaderegistro,$localidad,"Zacatecas",$Nombre,
//
//    $Sexo,"",$Fden,$Lugardenacimiento,"","",$Comparecio,$Nombrep,"",
//    $Edadp,$Domiciliop,$Origenp,$Edocivilp,$Ocupacionp,$Nombrem,"",$Edadm,$Domiciom,$Origenm,$Edocivilm,
//    $Ocupacionm,$Abuelop,$Edadap,$Nacionalidadap,$Abuelap,$Edadaap,$Nacionalidadaap,$Domiciliosap,$Abuelom,$Edadam,
//    $Nacionalidadam,$Abuelam,$Edadaam,$Nacionalidadaam,$Domiciliosam,$T1nombre,"",$T1Nacionalidad,$T1edad,
//    $T1domicilio,$T2nombre,"",$T2nacionalidad,$T2Edad,$T2domicilio,$T3Nombre,"",$T3edad,$T3domicilio,
//    "","","","","","","","","","","",
//    "","","","","","","",
//    $Escolaridadm,$Trabajom,$Trabajom,$PosTrabajom,$Escoloaridadp,$Trabajop,$PosTrabajop,$Vivo);
//			foreach($x as $prob){
//                            $acta->alta($prob);
//
//
//
//
//
//
//                        }
//

    $acta = new Acta($No,$Curp,$Nooficialia,$Nolibro,$Localidad,$Fechaderegistro,$Municipio,"Zacatecas",$Nombre,
    //papellido es $Sexo
    $Sexo,"",$Fden,$Lugardenacimiento,"","",$Comparecio,$Nombrep,"",
    $Edadp,$Domiciliop,$Origenp,$Edocivilp,$Ocupacionp,$Nombrem,"",$Edadm,$Domiciom,$Origenm,$Edocivilm,
    $Ocupacionm,$Abuelop,$Edadap,$Nacionalidadap,$Abuelap,$Edadaap,$Nacionalidadaap,$Domiciliosap,$Abuelom,$Edadam,
    $Nacionalidadam,$Abuelam,$Edadaam,$Nacionalidadaam,$Domiciliosam,$T1nombre,"",$T1Nacionalidad,$T1edad,
    $T1domicilio,$T2nombre,"",$T2nacionalidad,$T2Edad,$T2domicilio,$T3Nombre,"",$T3edad,$T3domicilio,
    "","","","","","","","","","","",
    "","","","","","","",
    $Escolaridadm,$Trabajom,$Trabajom,$PosTrabajom,$Escoloaridadp,$Trabajop,$PosTrabajop,$Vivo);
//$Vivo

     $acta->alta($Municipio);
    @header("Location:listActa.php") ;
?>