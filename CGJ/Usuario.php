<?php
class Usuario {
    public $nombre;
    public $usuario;
    public $password;
    public $municipio;
    public $privilegio;
    
    public function __construct($nombre, $usuario, $password, $municipio, $privilegio){
        $this->nombre=$nombre;
        $this->usuario=$usuario;
        $this->password=$password;
        $this->municipio=$municipio;
        $this->privilegio=$privilegio;
    }
    public function alta(Usuario $usu){
            $response=Couch::get("/cgj/Usuarios");
            $usuarios=$response["Usuarios"];
            $nuevousuario=array("nombre" => $usu->nombre, "usuario" => $usu->usuario,
                "password" => $usu->password, "municipio" => $usu->municipio, "privilegio" => $this->privilegio);
            array_push($usuarios,$nuevousuario);
            $response["Usuarios"]=$usuarios;
            Couch::put("/cgj/Usuarios", json_encode($response));
    }
    public function  baja(Usuario $usu){
           $response=Couch::get("/cgj/Usuarios");
            $usuarios=$response["Usuarios"];
            $contador=0;
            foreach($usuarios as $u){
                if($u['nombre']==$usu->nombre){
                    unset($usuarios[$contador]);
                    print_r($usuarios);
                }
                $contador=$contador+1;
            }
            $response["Usuarios"]=$usuarios;
            Couch::put("/cgj/Usuarios", json_encode($response));
    }
    public function cambio(Usuario $usuario,$usu,$pass){
        $response=Couch::get("/cgj/Usuarios");
        $usuarios=$response["Usuarios"];
        $contador=0;
        foreach($usuarios as $u){
            if($u['nombre']==$usu&&$u['password']==$pass){
                $nuevoUsuario=array("nombre"=>$usuario->nombre,
                "usuario"=>$usuario->usuario,"password"=>$usuario->password,
                "municipio"=>$usuario->municipio,"privilegio"=>$usuario->privilegio);
                $usuarios[$contador]=$nuevoUsuario;
                break;
            }
            $contador=$contador+1;
        }
        $response["Usuarios"]=$usuarios;
        Couch::put("/cgj/Usuarios", json_encode($response));
    }

 

function  getMunicipios(){
            $response=Couch::get("/cgj/Municipios");
            //return $response["Municipios"];
            $lLugares =$response["Municipios"];
            //echo $lLugares;
            $locales=array();
            foreach($lLugares as $lugar){
                array_push($locales,$lugar["Nombre"]);
            }
            return $locales;
        }
        
        
function  getUsuarios(){
            $response=Couch::get("/cgj/Usuarios");
            $usuarios =$response["Usuarios"];
            
            $regreso=array();
            foreach($usuarios as $usuario){
                array_push($regreso,$usuario["usuario"]);
            }
            return $regreso;
        }
        
        function  showUsuario($user){
            $response=Couch::get("/cgj/Usuarios");
            $usuarios =$response["Usuarios"];
            
            foreach($usuarios as $usuario){
                if($user==$usuario["usuario"])
                    return $usuario;
            }
            return -1;
        }

  public function getLocalidades($municipio){
       $response=Couch::get("/cgj/Localidades_".$municipio);
     return $response["Localidades"];
}

}
?>
