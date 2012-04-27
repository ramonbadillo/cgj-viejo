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

$a=Acta::findActaPrivi("Valparaiso", "Bailador");
print_r($a);
?>
