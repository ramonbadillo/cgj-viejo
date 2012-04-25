<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title></title>
    </head>
    <body>
        <?php
        //$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
        include("Couch.php");
        include("Lugar.php");
        $lugar = new Lugar("Sombrerete", "Sombrerete", 0);
       //--Couch::put("/test",null);
        //--Couch::put("/test/123",  json_encode($arr));
        //Couch::put("/test", null);
        //Couch::delete("/test/");
        //Couch::get("/cgj/");
        $lugar->getSobrenombres();
        //$lugar->addSobrenombre("Rancho");
        //print_r($lugar);
?>
    </body>
</html>
