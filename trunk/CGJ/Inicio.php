<?php
class Inicio {
    //put your code here
    public $usuario;
    public function __construct(){
    }

    public static function Login($usuario,$password){
        // $response=Couch::get("");
        // echo $response;
        // $docs='["Municipios","Usuarios"]';
        // $replicate=array("source"=>"http://127.0.0.1:5984/cgj","target"=>"http://127.0.0.1:5984/nueva",
        //                 "create_target"=>true,"continuous"=>false);
        // array_push($response, $replicate);
        // Couch::post("/_replicate", json_encode($replicate));
        $response=Couch::get("/cgj/Usuarios");
        $usuarios=$response["Usuarios"];
        foreach($usuarios as $nombres){
            if($nombres["usuario"]==$usuario&&$nombres["password"]==$password){
                $u=new Usuario($nombres['nombre'],$nombres['usuario'],$nombres['password'],$nombres['municipio'],$nombres['privilegio']);
                return $u;
            }
        }
        return -1;
        
    }
}
?>
