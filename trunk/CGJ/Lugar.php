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
            //$res = Couch::get("/cgj/"+$doc);
            $arr = array('sobrenombre' => $nuevoSombrenombre);
            Couch::put("/test/123", json_encode($arr));
	}
        
        public function getSobrenombres(){
            //Tipo 0=Municipio
            //Tipo 1=Localidad
            $doc="Localidades_"+$this->Municipio;
            if($this->Tipo==0)
                $doc="Municipios";
            
            //Base de datos
           $response=Couch::get("/cgj/Municipios");
            //var_dump($response);
            
           
           $lugares=$response[$doc];
            
              
            foreach($lugares as $lugar){
                echo $lugar["Nombre"];
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