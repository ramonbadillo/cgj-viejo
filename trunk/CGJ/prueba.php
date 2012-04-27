<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include("Usuario.php");
include("Couch.php");
include("Acta.php");

//$user=new Usuario("","","","","");
  //      $a=$user->getUsuarios();
    //    print_r($a);

//$a=Acta::findActaPrivi("Valparaiso", "Bailador");
//rint_r($a);



  $user = new Usuario("saul", "vi", "12","sombrerete",1);
            $user->cambio($user,"Pedro","12");

?>
