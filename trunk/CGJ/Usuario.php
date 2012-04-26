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
            foreach($usuarios as $u){
                if($u['nombre']==$usu->nombre){
                    unset($usuarios[$u]);

                    $usuarios=array_values($usuarios);
                    echo "y======".$usuarios;
                }
                else
                echo "no";
                $response["Usuarios"]=$usuarios;
                Couch::delete("/cgj/Usuarios", json_encode($response));
            }
    }
    public function cambio(Usuario $usuario,$usu,$pass){
         $response=Couch::get("/cgj/Usuarios");
            $usuarios=$response["Usuarios"];
            foreach($usuarios as $u){
                if($u['nombre']==$usu && $u['password']==$pass){
                    $u['nombre']=$usuario->nombre;

                }
                $response["Usuarios"]=$usuarios;
                Couch::put("/cgj/Usuarios", json_encode($response));
            }
    }

    public function altaActa(Acta $acta,$municipio){
        $acta->alta($municipio);
    }

    public function bajaActa($no,$curp,$municipio){
    }
    public function cambioActa(Acta $acta,$municipio){
    }
  public function crearActa(Acta $acta){
}

function  getMunicipios(){
     $response=Couch::get("/cgj/Municipios");
     return $response["Municipios"];
}

  public function getLocalidades($municipio){
       $response=Couch::get("/cgj/Localidades_".$municipio);
     return $response["Localidades"];
}

}
?>