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

    //C FA1
    //c E0
    //C F1


    public function __construct($no,$curp,$nooficialia,$nolibro,$localidad,$fechaderegistro,$municipio,$entidadfederativa,$nombre,$papellido,$sapellido,$fden,
            $lugardenacimiento,$nodecertifdenacimiento,$fueregistrado,$comparecio,$nombrep,$nacionalidadp,$edadp,$domiciliop,$origenp,$edocivilp,$ocupacionp,
            $nombrem,$nacionalidadm,$edadm,$domiciliom,$origenm,$edocivilm,$ocupacionm,$abuelop,$edadap,$nacionalidadap,$abuelap,$edadaap,$nacionalidadaap,
            $domiciliosap,$abuelom,$edadam,$nacionalidadam,$abuelam,$edadaam,$nacionalidadaam,$domiciliosam,$t1nombre,$t1origen,$t1nacionalidad,$t1edad,
            $t1domicilio,$t2nombre,$t2origen,$t2nacionalidad,$t2edad,$t2domicilio,$t3nombre,$t3parentesco,$t3edad,$t3domicilio,$t3edocivil,$firmapadre,
            $firmamadre,$firmat3,$firmat1,$firmat2,$huella,$coficial,$conombre,$cofirma,$sellorc,$anotaciones,$nacimiento,$ordendparto,$dondeseatendioelparto,
            $quienatendioelparto,$nohijosnacidosv,$nohijosvivenhogar,$unionmadre,$escolaridadm,$trabajom,$posiciontrabajom,$escolaridadp,$trabajop,
            $posiciontrabajop,$vivo){

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

        $response=Couch::get("/cgj/Actas_".$Municipio);

        $actas=$response["Actas"];
        
        $actanueva = array(  'no'=>$this->No, 'curp'=>$this->Curp, 'nooficialia'=>$this->Nooficialia, 'nolibro'=>$this->Nolibro,
            'localidad'=>$this->Localidad, 'fechaderegistro'=>$this->Fechaderegistro, 'municipio'=>$this->Municipio,
            'entidadfederativa'=>$this->Entidadfederativa, 'nombre'=>$this->Nombre, 'papellido'=>$this->Papellido,
            'sapellido'=>$this->Sapellido, 'fden'=>$this->Fden, 'lugardenacimiento'=>$this->Lugardenacimiento,
            'nodecertifdenacimiento'=>$this->Nodecertifdenacimiento, 'fueregistrado'=>$this->Fueregistrado,
            'comparecio'=>$this->Comparecio, 'nombrep'=>$this->Nombrep, 'nacionalidadp'=>$this->Nacionalidadp,'edadp'=>$this->Edadp,
            'domiciliop'=>$this->Domiciliop, 'origenp'=>$this->Origenp, 'edocivilp'=>$this->Edocivilp, 'ocupacionp'=>$this->Ocupacionp,
            'nombrem'=>$this->Nombrem, 'nacionalidadm'=>$this->Nacionalidadm, 'edadm'=>$this->Edadm, 'domiciliom'=>$this->Domiciliom,
            'origenm'=>$this->Origenm, 'edocivilm'=>$this->Edocivilm, 'ocupacionm'=>$this->Ocupacionm, 'abuelop'=>$this->Abuelop,
            'edadap'=>$this->Edadap, 'nacionalidadap'=>$this->Nacionalidadap, 'abuelap'=>$this->Abuelap, 'edadaap'=>$this->Edadaap,
            'nacionalidadaap'=>$this->Nacionalidadaap, 'domiciliosap'=>$this->Domiciliosap, 'abuelom'=>$this->Abuelom,
            'edadam'=>$this->Edadam, 'nacionalidadam'=>$this->Nacionalidadam, 'abuelam'=>$this->Abuelam, 'edadaam'=>$this->Edadaam,
            'nacionalidadaam'=>$this->Nacionalidadaam, 'domiciliosam'=>$this->Domiciliosam, 't1nombre'=>$this->T1nombre,
            't1origen'=>$this->T1origen, 't1nacionalidad'=>$this->T1nacionalidad, 't1edad'=>$this->T1edad,
            't1domicilio'=>$this->T1domicilio, 't2nombre'=>$this->T2nombre, 't2origen'=>$this->T2origen,
            't2nacionalidad'=>$this->T2nacionalidad, 't2edad'=>$this->T2edad, 't2domicilio'=>$this->T2domicilio,
            't3nombre'=>$this->T3nombre, 't3parentesco'=>$this->T3parentesco, 't3edad'=>$this->T3edad,
            't3domicilio'=>$this->T3domicilio, 't3edocivil'=>$this->T3edocivil, 'firmapadre'=>$this->Firmapadre,
            'firmamadre'=>$this->Firmamadre, 'firmat3'=>$this->Firmat3, 'firmat1'=>$this->Firmat1, 'firmat2'=>$this->Firmat2,
            'huella'=>$this->Huella, 'coficial'=>$this->Coficial, 'conombre'=>$this->Conombre, 'cofirma'=>$this->Cofirma,
            'sellorc'=>$this->Sellorc, 'anotaciones'=>$this->Anotaciones, 'nacimiento'=>$this->Nacimiento,
            'ordendparto'=>$this->Ordendparto, 'dondeseatendioelparto'=>$this->Dondeseatendioelparto,
            'quienatendioelparto'=>$this->Quienatendioelparto, 'nohijosnacidosv'=>$this->Nohijosnacidosv,
            'nohijosvivenhogar'=>$this->Nohijosvivenhogar, 'unionmadre'=>$this->Unionmadre, 'escolaridadm'=>$this->Escolaridadm,
            'trabajom'=>$this->Trabajom, 'posiciontrabajom'=>$this->Posiciontrabajom, 'escolaridadp'=>$this->Escolaridadp,
            'trabajop'=>$this->Trabajop, 'posiciontrabajop'=>$this->Posiciontrabajop, 'vivo'=>$this->Vivo);
        
        array_push($actas,$actanueva);
        $response["Actas"]=$actas;
        Couch::put("/cgj/Actas_".$Municipio,json_encode($response));
        
    }
    
    public function cambio($Municipio){
        $response=Couch::get("/cgj/Actas_".$Municipio);
        $actas=$response["Actas"];
        
        foreach ($actas as $acta){
            if($acta['no']==$this->No && $acta['curp']==$this->Curp){
                $acta['no']=$this->No;
                $acta['curp']=$this->Curp;
                $acta['nooficialia']=$this->Nooficialia;
                $acta['nolibro']=$this->Nolibro;
                $acta['localidad']=$this->Localidad;
                $acta['fechaderegistro']=$this->Fechaderegistro;
                $acta['municipio']=$this->Municipio;
                $acta['entidadfederativa']=$this->Entidadfederativa;
                $acta['nombre']=$this->Nombre;
                $acta['papellido']=$this->Papellido;
                $acta['sapellido']=$this->Sapellido;
                $acta['fden']=$this->Fden;
                $acta['lugardenacimiento']=$this->Lugardenacimiento;
                $acta['nodecertifdenacimiento']=$this->Nodecertifdenacimiento;
                $acta['fueregistrado']=$this->Fueregistrado;
                $acta['comparecio']=$this->Comparecio;
                $acta['nombrep']=$this->Nombrep;
                $acta['nacionalidadp']=$this->Nacionalidadp;
                $acta['edadp']=$this->Edadp;
                $acta['domiciliop']=$this->Domiciliop;
                $acta['origenp']=$this->Origenp;
                $acta['edocivilp']=$this->Edocivilp;
                $acta['ocupacionp']=$this->Ocupacionp;
                $acta['nombrem']=$this->Nombrem;
                $acta['nacionalidadm']=$this->Nacionalidadm;
                $acta['edadm']=$this->Edadm;
                $acta['domiciliom']=$this->Domiciliom;
                $acta['origenm']=$this->Origenm;
                $acta['edocivilm']=$this->Edocivilm;
                $acta['ocupacionm']=$this->Ocupacionm;
                $acta['abuelop']=$this->Abuelop;
                $acta['edadap']=$this->Edadap;
                $acta['nacionalidadap']=$this->Nacionalidadap;
                $acta['abuelap']=$this->Abuelap;
                $acta['edadaap']=$this->Edadaap;
                $acta['nacionalidadaap']=$this->Nacionalidadaap;
                $acta['domiciliosap']=$this->Domiciliosap;
                $acta['abuelom']=$this->Abuelom;
                $acta['edadam']=$this->Edadam;
                $acta['nacionalidadam']=$this->Nacionalidadam;
                $acta['abuelam']=$this->Abuelam;
                $acta['edadaam']=$this->Edadaam;
                $acta['nacionalidadaam']=$this->Nacionalidadaam;
                $acta['domiciliosam']=$this->Domiciliosam;
                $acta['t1nombre']=$this->T1nombre;
                $acta['t1origen']=$this->T1origen;
                $acta['t1nacionalidad']=$this->T1nacionalidad;
                $acta['t1edad']=$this->T1edad;
                $acta['t1domicilio']=$this->T1domicilio;
                $acta['t2nombre']=$this->T2nombre;
                $acta['t2origen']=$this->T2origen;
                $acta['t2nacionalidad']=$this->T2nacionalidad;
                $acta['t2edad']=$this->T2edad;
                $acta['t2domicilio']=$this->T2domicilio;
                $acta['t3nombre']=$this->T3nombre;
                $acta['t3parentesco']=$this->T3parentesco;
                $acta['t3edad']=$this->T3edad;
                $acta['t3domicilio']=$this->T3domicilio;
                $acta['t3edocivil']=$this->T3edocivil;
                $acta['firmapadre']=$this->Firmapadre;
                $acta['firmamadre']=$this->Firmamadre;
                $acta['firmat3']=$this->Firmat3;
                $acta['firmat1']=$this->Firmat1;
                $acta['firmat2']=$this->Firmat2;
                $acta['huella']=$this->Huella;
                $acta['coficial']=$this->Coficial;
                $acta['conombre']=$this->Conombre;
                $acta['cofirma']=$this->Cofirma;
                $acta['sellorc']=$this->Sellorc;
                $acta['anotaciones']=$this->Anotaciones;
                $acta['nacimiento']=$this->Nacimiento;
                $acta['ordendparto']=$this->Ordendparto;
                $acta['dondeseatendioelparto']=$this->Dondeseatendioelparto;
                $acta['quienatendioelparto']=$this->Quienatendioelparto;
                $acta['nohijosnacidosv']=$this->Nohijosnacidosv;
                $acta['nohijosvivenhogar']=$this->Nohijosvivenhogar;
                $acta['unionmadre']=$this->Unionmadre;
                $acta['escolaridadm']=$this->Escolaridadm;
                $acta['trabajom']=$this->Trabajom;
                $acta['posiciontrabajom']=$this->Posiciontrabajom;
                $acta['escolaridadp']=$this->Escolaridadp;
                $acta['trabajop']=$this->Trabajop;
                $acta['posiciontrabajop']=$this->Posiciontrabajop;
                $acta['vivo']=$this->Vivo;

                array_push($actas,$actanueva);
                $response["Actas"]=$actas;
                
            }
        }
            
           
        Couch::put("/cgj/Actas_".$Municipio,json_encode($response));
        
    }
}
?>
