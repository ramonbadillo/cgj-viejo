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
        
	
	public function addSobrenombre($nuevoSombrenombre){
            //Tipo 0=Municipio
            //Tipo 1=Localidad
            $doc="Localidades_"+$this->Municipio;
            if($this->Tipo==0)
                $doc="Municipios";
            
            //Base de datos
            $response=Couch::get("/cgj/Municipios");
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
            Couch::put("/cgj/Municipios", json_encode($response));
                         
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
        //tipo 0=municipio
        //tipo 1=localidad
        $doc='Localidades_'+@municipio;
      if($this->Tipo==0)
        $doc='Municipios';
       // $server = new Couch("localhost", "5984");
        //$res = server.get("/cgj/"+doc);
        //$a = res.body;
        //$lugarjson=a;
        //$json=JSON.parse(a);
        //$lugares= json[doc];
      //lugares.each do |luga|
      //    if luga['Nombre']==@nombre
        //    sobrenombres=luga['Sobrenombres']
          //  sobrenombres.delete(sobrenombre)
            //j=json.to_json
            //server.put("/cgj/"+doc, j)
            //return false
          //return false
        }
}
?>