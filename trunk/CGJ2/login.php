 <?php
        include("Couch.php");
        include("Lugar.php");
		include("Inicio.php");
		include("Usuario.php");
		include("Acta.php");
		session_start();
		$us = Inicio::Login($_POST['login'],$_POST['pass']);
		//print_r($us);
		if($us != -1){
			//echo "entro";
			//print_r($us);
			
			//print_r($us->nombre);
			$_SESSION['nombre'] = $us->nombre;
			$_SESSION['id'] = $us->usuario;
			$_SESSION['pass'] = $us->password;
			$_SESSION['municipio'] = $us->municipio;
			$_SESSION['priv'] = $us->privilegio;
			header( @'Location: listActa.php' ) ;
			
		}else{
			echo "no entro";
			header( @'Location: index.php' ) ;
		}
?>