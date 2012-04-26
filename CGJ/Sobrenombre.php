<?php
class Sobrenombre {

    //$a=Sobrenombre::buscarNombre("Municipios", "s31");
//            echo $a;

    public static function buscarNombre($lugar,$nombre){
          $response=Couch::get("/cgj/".$lugar);
           $lugares=$response["Municipios"];
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
