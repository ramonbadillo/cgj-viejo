<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Lugar{
	
	//variables globales
	public $Nombre;
	public  $Municipio;
	public  $Tipo;
        public $Sobrenombres;
	
	//constructor
	public function __construct($nombre, $municipio, $tipo) {
		$this->Nombre=$nombre;
		$this->Municipio=$municipio;
		$this->Tipo=$tipo;
                $this->Sobrenombres=self::getSobrenombres();
	}


        function  getMunicipios(){
            $response=Couch::get("/cgj/Municipios");
            //return $response["Municipios"];
            $lLugares =$response["Municipios"];
            //echo $lLugares;
            $locales=array();
            foreach($lLugares as $lugar){
                array_push($locales,$lugar["Nombre"]);
            }
            return $locales;
        }
	
	public function addSobrenombre($nuevoSombrenombre){
            //Tipo 0=Municipio
            //Tipo 1=Localidad
            $doc="Localidades_".$this->Municipio;
            if($this->Tipo==0)
                $doc="Municipios";
            
            //Base de datos
            $response=Couch::get("/cgj/".$doc);
            $lugares=$response[$doc];
            $contador=0;
            foreach($lugares as $lugar){
                if($lugar["Nombre"]==$this->Nombre){
                    //Sobreescribimos el arraysobrenombres
                    array_push($lugar["Sobrenombres"], $nuevoSombrenombre);
                    //Sobreescribimos el array lugares
                    $lugares[$contador]=$lugar;
                }
                $contador=$contador+1;
            }
            $response[$doc]=$lugares;
            Couch::put("/cgj/".$doc, json_encode($response));
                         
}
        
        public function getSobrenombres(){
            //Tipo 0=Municipio
            //Tipo 1=Localidad
            $doc="Localidades_"+$this->Municipio;
            if($this->Tipo==0)
                $doc="Municipios";
            
            //Base de datos
           $response=Couch::get("/cgj/Municipios");
           $lugares=$response[$doc];
           
              
            foreach($lugares as $lugar){
                if($lugar["Nombre"]==$this->Nombre)
                    return $lugar["Sobrenombres"];
            }
                         
           
   
        }
        public function bajaSobrenombre($sobrenombre){
            //Tipo 0=Municipio
            //Tipo 1=Localidad
            $doc="Localidades_"+$this->Municipio;
            if($this->Tipo==0)
                $doc="Municipios";
            
            //Base de datos
            $response=Couch::get("/cgj/Municipios");
            $lugares=$response[$doc];
            $c=0;
            foreach($lugares as $lugar){
                if($lugar["Nombre"]==$this->Municipio){
                    //COntador para el otro array
                    $contador=0;
                    foreach($lugar["Sobrenombres"] as $sobre){
                        echo $sobre;
                        if($sobre==$sobrenombre){
                            echo "entro";
                            unset($lugar["Sobrenombres"][$contador]);
                        }
                        $contador=$contador+1;
                    }
                    $lugares[$c]=$lugar;
                }
                $c=$c+1;
            }
            $response[$doc]=$lugares;
            print_r($lugares);
            Couch::put("/cgj/Municipios", json_encode($response));
}
}
?>