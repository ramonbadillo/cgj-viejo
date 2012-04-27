<?php
include("CouchSimple.php");
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    class Couch{
	
        private $opciones;
        private $couch;
        public static function delete($uri){
         
            $opciones['host'] = "localhost"; 
            $options['port'] = 5984; 
            
            $couch = new CouchSimple($options); // See if we can make a connection
            $resp = $couch->send("DELETE", $uri); 
            //var_dump($resp); // string(12) "{"ok":true}"
        }
        
        public static function get($uri){
         
            $opciones['host'] = "localhost"; 
            $options['port'] = 5984; 
            
            $couch = new CouchSimple($options); // See if we can make a connection
            // Get back document
            $resp = $couch->send("GET", $uri); 
            //var_dump($resp);
            $regreso=json_decode($resp,true);
            return $regreso;
            
        }
        
         public static function put($uri,$jason){
         
            $opciones['host'] = "localhost"; 
            $options['port'] = 5984; 
            
            $couch = new CouchSimple($options); // See if we can make a connection
            
            // Create
             $resp = $couch->send("PUT", $uri, $jason); 
            //var_dump($resp); // string(47) "{"_id":"123","_rev":"2039697587","data":"Foo"}"
        }
        

    }
  
?>