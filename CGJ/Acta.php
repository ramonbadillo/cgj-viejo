<?php

class Acta{
    public $No;
    public $Curp;
    public $Nooficialia;
    public $Nolibro;
    public $Localidad;
    public $Fechaderegistro;
    public $Municipio;
    public $Entidadfederativa;
    public $Nombre;
    public $Papellido;
    public $Sapellido;
    public $Fden;
    public $Lugardenacimiento;
    public $Nodecertifdenacimiento;
    public $Fueregistrado;
    public $Comparecio;
    public $Nombrep;
    public $Nacionalidadp;
    public $Edadp;
    public $Domiciliop;
    public $Origenp;
    public $Edocivilp;
    public $Ocupacionp;
    public $Nombrem;
    public $Nacionalidadm;
    public $Edadm;
    public $Domiciliom;
    public $Origenm;
    public $Edocivilm;
    public $Ocupacionm;
    public $Abuelop;
    public $Edadap;
    public $Nacionalidadap;
    public $Abuelap;
    public $Edadaap;
    public $Nacionalidadaap;
    public $Domiciliosap;
    public $Abuelom;
    public $Edadam;
    public $Nacionalidadam;
    public $Abuelam;
    public $Edadaam;
    public $Nacionalidadaam;
    public $Domiciliosam;
    public $T1nombre;
    public $T1origen;
    public $T1nacionalidad;
    public $T1edad;
    public $T1domicilio;
    public $T2nombre;
    public $T2origen;
    public $T2nacionalidad;
    public $T2edad;
    public $T2domicilio;
    public $T3nombre;
    public $T3parentesco;
    public $T3edad;
    public $T3domicilio;
    public $T3edocivil;
    public $Firmapadre;
    public $Firmamadre;
    public $Firmat3;
    public $Firmat1;
    public $Firmat2;
    public $Huella;
    public $Coficial;
    public $Conombre;
    public $Cofirma;
    public $Sellorc;
    public $Anotaciones;
    public $Nacimiento;
    public $Ordendparto;
    public $Dondeseatendioelparto;
    public $Quienatendioelparto;
    public $Nohijosnacidosv;
    public $Nohijosvivenhogar;
    public $Unionmadre;
    public $Escolaridadm;
    public $Trabajom;
    public $Posiciontrabajom;
    public $Escolaridadp;
    public $Trabajop;
    public $Posiciontrabajop;
    public $Vivo;

    public function __construct($no, $cURP, $noOficialia, $noLibro, $localidad, $fechaDeRegistro, $municipio, $entidadFederativa,
            $nombre, $pApellido, $sApellido, $fdeN, $lugarDeNacimiento, $noDeCertifDeNacimiento, $fueRegistrado, $comparecio,
            $NombreP, $nacionalidadP, $edadP, $domicilioP, $origenP, $edoCivilP, $ocupacionP, $nombreM, $nacionalidadM, $edadM,
            $domicilioM, $origenM, $edoCivilM, $ocupacionM, $abueloP, $edadAP, $nacionalidadAP, $abuelaP, $edadAaP, $nacionalidadAaP,
            $domiciliosAP, $abueloM, $edadAM, $nacionalidadAM, $abuelaM, $edadAaM, $nacionalidadAaM, $domiciliosAM, $t1Nombre,
            $t1Origen, $t1Nacionalidad, $t1Edad, $t1Domicilio, $t2Nombre, $t2Origen, $t2Nacionalidad, $t2Edad, $t2Domicilio,
            $t3Nombre, $t3Parentesco, $t3Edad, $t3Domicilio, $t3EdoCivil, $firmaPadre, $firmaMadre, $firmaT3, $firmaT1, $firmaT2,
            $huella, $cOficial, $cONombre, $cOFirma, $selloRC, $anotaciones, $nacimiento, $ordenDParto, $dondeSeAtendioElParto,
            $quienAtendioElParto, $noHijosNacidosV, $noHijosVivenHogar, $unionMadre, $escolaridadM, $trabajoM, $posicionTrabajoM,
            $escolaridadP, $trabajoP, $posicionTrabajoP, $vivo){
        $this->No=$no;
        $this->Curp=$curp;
        $this->Nooficialia=$nooficialia;
        $this->Nolibro=$nolibro;
        $this->Localidad=$localidad;
        $this->Fechaderegistro=$fechaderegistro;
        $this->Municipio=$municipio;
        $this->Entidadfederativa=$entidadfederativa;
        $this->Nombre=$nombre;
        $this->Papellido=$papellido;
        $this->Sapellido=$sapellido;
        $this->Fden=$fden;
        $this->Lugardenacimiento=$lugardenacimiento;
        $this->Nodecertifdenacimiento=$nodecertifdenacimiento;
        $this->Fueregistrado=$fueregistrado;
        $this->Comparecio=$comparecio;
        $this->Nombrep=$nombrep;
        $this->Nacionalidadp=$nacionalidadp;
        $this->Edadp=$edadp;
        $this->Domiciliop=$domiciliop;
        $this->Origenp=$origenp;
        $this->Edocivilp=$edocivilp;
        $this->Ocupacionp=$ocupacionp;
        $this->Nombrem=$nombrem;
        $this->Nacionalidadm=$nacionalidadm;
        $this->Edadm=$edadm;
        $this->Domiciliom=$domiciliom;
        $this->Origenm=$origenm;
        $this->Edocivilm=$edocivilm;
        $this->Ocupacionm=$ocupacionm;
        $this->Abuelop=$abuelop;
        $this->Edadap=$edadap;
        $this->Nacionalidadap=$nacionalidadap;
        $this->Abuelap=$abuelap;
        $this->Edadaap=$edadaap;
        $this->Nacionalidadaap=$nacionalidadaap;
        $this->Domiciliosap=$domiciliosap;
        $this->Abuelom=$abuelom;
        $this->Edadam=$edadam;
        $this->Nacionalidadam=$nacionalidadam;
        $this->Abuelam=$abuelam;
        $this->Edadaam=$edadaam;
        $this->Nacionalidadaam=$nacionalidadaam;
        $this->Domiciliosam=$domiciliosam;
        $this->T1nombre=$t1nombre;
        $this->T1origen=$t1origen;
        $this->T1nacionalidad=$t1nacionalidad;
        $this->T1edad=$t1edad;
        $this->T1domicilio=$t1domicilio;
        $this->T2nombre=$t2nombre;
        $this->T2origen=$t2origen;
        $this->T2nacionalidad=$t2nacionalidad;
        $this->T2edad=$t2edad;
        $this->T2domicilio=$t2domicilio;
        $this->T3nombre=$t3nombre;
        $this->T3parentesco=$t3parentesco;
        $this->T3edad=$t3edad;
        $this->T3domicilio=$t3domicilio;
        $this->T3edocivil=$t3edocivil;
        $this->Firmapadre=$firmapadre;
        $this->Firmamadre=$firmamadre;
        $this->Firmat3=$firmat3;
        $this->Firmat1=$firmat1;
        $this->Firmat2=$firmat2;
        $this->Huella=$huella;
        $this->Coficial=$coficial;
        $this->Conombre=$conombre;
        $this->Cofirma=$cofirma;
        $this->Sellorc=$sellorc;
        $this->Anotaciones=$anotaciones;
        $this->Nacimiento=$nacimiento;
        $this->Ordendparto=$ordendparto;
        $this->Dondeseatendioelparto=$dondeseatendioelparto;
        $this->Quienatendioelparto=$quienatendioelparto;
        $this->Nohijosnacidosv=$nohijosnacidosv;
        $this->Nohijosvivenhogar=$nohijosvivenhogar;
        $this->Unionmadre=$unionmadre;
        $this->Escolaridadm=$escolaridadm;
        $this->Trabajom=$trabajom;
        $this->Posiciontrabajom=$posiciontrabajom;
        $this->Escolaridadp=$escolaridadp;
        $this->Trabajop=$trabajop;
        $this->Posiciontrabajop=$posiciontrabajop;
        $this->Vivo=$vivo;

    }

    public function alta($Municipio){
      
        $response=Couch::get("/cgj/Actas"+$Municipio);
        //aa=JSON.parse(a)
        $actas=$response["Actas"];
        $actanueva = array( 'No'=>@No, 'CURP'=>@Curp, 'noOficialia'=>@Nooficialia, 'noLibro'=>@Nolibro, 'localidad'=>@Localidad,
            'fechaDeRegistro'=>@Fechaderegistro, 'municipio'=>@Municipio, 'entidadFederativa'=>@Entidadfederativa, 'Nombre'=>@Nombre,
            'pApellido'=>@Papellido, 'sApellido'=>@Sapellido, 'FdeN'=>@Fden, 'lugarDeNacimiento'=>@Lugardenacimiento,
            'noDeCertifDeNacimiento'=>@Nodecertifdenacimiento, 'fueRegistrado'=>@Fueregistrado, 'Comparecio'=>@Comparecio,
            'NombreP'=>@Nombrep, 'NacionalidadP'=>@Nacionalidadp, 'EdadP'=>@Edadp, 'DomiciolioP'=>@Domiciliop, 'OrigenP'=>@Origenp,
            'EdoCivilP'=>@Edocivilp, 'OcupacionP'=>@Ocupacionp, 'NombreM'=>@Nombrem, 'NacionalidadM'=>@Nacionalidadm, 'EdadM'=>@Edadm,
            'DomiciolioM'=>@Domiciliom, 'OrigenM'=>@Origenm, 'EdoCivilM'=>@Edocivilm, 'OcupacionM'=>@Ocupacionm, 'abueloP'=>@Abuelop,
            'edadAP'=>@Edadap, 'nacionalidadAP'=>@Nacionalidadap, 'abuelaP'=>@Abuelap, 'edadAaP'=>@Edadaap, 'nacionalidadAaP'=>@Nacionalidadaap,
            'DomiciliosAP'=>@Domiciliosap, 'abueloM'=>@Abuelom, 'edadAM'=>@Edadam, 'nacionalidadAM'=>@Nacionalidadam, 'abuelaM'=>@Abuelam,
            'edadAaM'=>@Edadaam, 'nacionalidadAaM'=>@Nacionalidadaam, 'DomiciliosAM'=>@Domiciliosam, 'T1Nombre'=>@T1nombre, 'T1Origen'=>@T1origen,
            'T1Nacionalidad'=>@T1nacionalidad, 'T1Edad'=>@T1edad, 'T1Domicilio'=>@T1domicilio, 'T2Nombre'=>@T2nombre, 'T2Origen'=>@T2origen,
            'T2Nacionalidad'=>@T2nacionalidad, 'T2Edad'=>@T2edad, 'T2Domicilio'=>@T2domicilio, 'T3Nombre'=>@T3nombre,
            'T3Parentesco'=>@T3parentesco, 'T3Edad'=>@T3edad, 'T3Domicilio'=>@T3domicilio, 'T3EdoCivil'=>@T3edocivil, 'firmaPadre'=>@Firmapadre,
            'firmaMadre'=>@Firmamadre, 'firmaT3'=>@Firmat3, 'firmaT1'=>@Firmat1, 'firmaT2'=>@Firmat2, 'Huella'=>@Huella, 'COficial'=>@Coficial,
            'CONombre'=>@Conombre, 'COFirma'=>@Cofirma, 'SelloRC'=>@Sellorc, 'Anotaciones'=>@Anotaciones, 'Nacimiento'=>@Nacimiento,
            'OrdenDParto'=>@Ordendparto, 'DondeSeAtendioElParto'=>@Dondeseatendioelparto, 'QuienAtendioElParto'=>@Quienatendioelparto,
            'NoHijosNacidosV'=>@Nohijosnacidosv, 'NoHijosVivenHogar'=>@Nohijosvivenhogar, 'UnionMadre'=>@Unionmadre, 'EscolaridadM'=>@Escolaridadm,
            'TrabajoM'=>@Trabajom, 'PosicionTrabajoM'=>@Posiciontrabajom, 'EscolaridadP'=>@Escolaridadp, 'TrabajoP'=>@Trabajop,
            'PosicionTrabajoP'=>@Posiciontrabajop, 'vivo'=>@Vivo);
        
        --Couch::put("/cgj/Actas"+$Municipio,  json_encode($actanueva));
        
    }
    
    public function cambio($Municipio){
        $response=Couch::get("/cgj/Actas"+$Municipio);
        $actas=$response["Actas"];
        
        foreach ($actas as $acta)
            if($acta['No']==$no&&$acta['CURP']==$cURP){
                $acta['No']=$No;
                $acta['CURP']=$Curp;
                $acta['noOficialia']=$Nooficialia;
                $acta['noLibro']=$Nolibro;
                $acta['localidad']=$Localidad;
                $acta['fechaDeRegistro']=$Fechaderegistro;
                $acta['municipio']=$Municipio;
                $acta['entidadFederativa']=$Entidadfederativa;
                $acta['Nombre']=$Nombre;
                $acta['pApellido']=$Papellido;
                $acta['sApellido']=$Sapellido;
                $acta['FdeN']=$Fden;
                $acta['lugarDeNacimiento']=$Lugardenacimiento;
                $acta['noDeCertifDeNacimiento']=$Nodecertifdenacimiento;
                $acta['fueRegistrado']=$Fueregistrado;
                $acta['Comparecio']=$Comparecio;
                $acta['NombreP']=$Nombrep;
                $acta['NacionalidadP']=$Nacionalidadp;
                $acta['EdadP']=$Edadp;
                $acta['DomiciolioP']=$Domiciliop;
                $acta['OrigenP']=$Origenp;
                $acta['EdoCivilP']=$Edocivilp;
                $acta['OcupacionP']=$Ocupacionp;
                $acta['NombreM']=$Nombrem;
                $acta['NacionalidadM']=$Nacionalidadm;
                $acta['EdadM']=$Edadm;
                $acta['DomiciolioM']=$Domiciliom;
                $acta['OrigenM']=$Origenm;
                $acta['EdoCivilM']=$Edocivilm;
                $acta['OcupacionM']=$Ocupacionm;
                $acta['abueloP']=$Abuelop;
                $acta['edadAP']=$Edadap;
                $acta['nacionalidadAP']=$Nacionalidadap;
                $acta['abuelaP']=$Abuelap;
                $acta['edadAaP']=$Edadaap;
                $acta['nacionalidadAaP']=$Nacionalidadaap;
                $acta['DomiciliosAP']=$Domiciliosap;
                $acta['abueloM']=$Abuelom;
                $acta['edadAM']=$Edadam;
                $acta['nacionalidadAM']=$Nacionalidadam;
                $acta['abuelaM']=$Abuelam;
                $acta['edadAaM']=$Edadaam;
                $acta['nacionalidadAaM']=$Nacionalidadaam;
                $acta['DomiciliosAM']=$Domiciliosam;
                $acta['T1Nombre']=$T1nombre;
                $acta['T1Origen']=$T1origen;
                $acta['T1Nacionalidad']=$T1nacionalidad;
                $acta['T1Edad']=$T1edad;
                $acta['T1Domicilio']=$T1domicilio;
                $acta['T2Nombre']=$T2nombre;
                $acta['T2Origen']=$T2origen;
                $acta['T2Nacionalidad']=$T2nacionalidad;
                $acta['T2Edad']=$T2edad;
                $acta['T2Domicilio']=$T2domicilio;
                $acta['T3Nombre']=$T3nombre;
                $acta['T3Parentesco']=$T3parentesco;
                $acta['T3Edad']=$T3edad;
                $acta['T3Domicilio']=$T3domicilio;
                $acta['T3EdoCivil']=$T3edocivil;
                $acta['firmaPadre']=$Firmapadre;
                $acta['firmaMadre']=$Firmamadre;
                $acta['firmaT3']=$Firmat3;
                $acta['firmaT1']=$Firmat1;
                $acta['firmaT2']=$Firmat2;
                $acta['Huella']=$Huella;
                $acta['COficial']=$Coficial;
                $acta['CONombre']=$Conombre;
                $acta['COFirma']=$Cofirma;
                $acta['SelloRC']=$Sellorc;
                $acta['Anotaciones']=$Anotaciones;
                $acta['Nacimiento']=$Nacimiento;
                $acta['OrdenDParto']=$Ordendparto;
                $acta['DondeSeAtendioElParto']=$Dondeseatendioelparto;
                $acta['QuienAtendioElParto']=$Quienatendioelparto;
                $acta['NoHijosNacidosV']=$Nohijosnacidosv;
                $acta['NoHijosVivenHogar']=$Nohijosvivenhogar;
                $acta['UnionMadre']=$Unionmadre;
                $acta['EscolaridadM']=$Escolaridadm;
                $acta['TrabajoM']=$Trabajom;
                $acta['PosicionTrabajoM']=$Posiciontrabajom;
                $acta['EscolaridadP']=$Escolaridadp;
                $acta['TrabajoP']=$Trabajop;
                $acta['PosicionTrabajoP']=$Posiciontrabajop;
                $acta['vivo']=$Vivo;
                
            }
           
        --Couch::put("/cgj/Actas"+$Municipio,  json_encode($acta));
        
    }
}
?>
