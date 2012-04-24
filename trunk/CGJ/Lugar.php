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
        
	
	public static function addSobrenombre($nuevoSombrenombre){
            //Tipo 0=Municipio
            //Tipo 1=Localidad
            $doc="Localidades_"+$this->Municipio;
            if($tipo==0)
                $doc="Municipios";
            
            //Base de datos
            $server=new Couch("localhost","5984");
            $res = $server.get("/cgj/"+doc);
            $a = res.body;
            $aa=JSON.parse(a);
            //$lugares= aa[doc];
            //lugares.each do |luga|
            //if (luga['Nombre']==@nombre)
            //sobrenombres=luga['Sobrenombres']
            //sobrenombres<<nuevosobrenombre
            //json=aa.to_json
            server.put("/cgj/"+doc, json);
		return self;
	}
        
        public static function getSobrenombres(){
            //Tipo 0=Municipio
            //Tipo 1=Localidad
            $doc="Localidades_"+$this->Municipio;
            if($tipo==0)
                $doc="Municipios";
            
            //Base de datos
            $server=new Couch("localhost","5984");
            $res = $server.get("/cgj/"+doc);
            $a = res.body;
            $lugarJson=JSON.parse(a);
            
            // lugares= json[doc]
      //lugares.each do |luga|
        //  if luga['Nombre']==@nombre
          //  return luga['Sobrenombres']
          //end
          //return 'No se encontró'
     // end
        }
        public static function bajSobrenombre($sobrenombre){
        //tipo 0=municipio
        //tipo 1=localidad
        $doc='Localidades_'+@municipio;
      if($tipo==0)
        $doc='Municipios';
        $server = new Couch("localhost", "5984");
        $res = server.get("/cgj/"+doc);
        $a = res.body;
        $lugarjson=a;
        $json=JSON.parse(a);
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