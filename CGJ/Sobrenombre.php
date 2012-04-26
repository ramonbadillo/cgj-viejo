<?php
class Sobrenombre {

    //$a=Sobrenombre::buscarNombre("Municipios o Localidades_Municipio","Municipios o Localidades", "s31");
//            echo $a;

    public static function buscarNombre($doc,$lugar,$nombre){

            $response=Couch::get("/cgj/".$doc);
           $lugares=$response[$lugar];
           foreach($lugares as $lugar){
               $sobrenombres= $lugar["Sobrenombres"];
               foreach($sobrenombres as $sobrenombre){
                   if($sobrenombre==$nombre)
                           return $lugar["Nombre"];
               }
           }
           return -1;
    }
}
?>
