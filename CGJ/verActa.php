<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
        include("Couch.php");
        include("Lugar.php");
		include("Inicio.php");
		include("Usuario.php");
		include("Acta.php");

		session_start();
		$Numero=$_GET['num'];
		$Curp=$_GET['curp'];
		$Nombre=$_GET['nombre'];
                if($_SESSION['priv']==0){
                    $a=Acta::findActa($_SESSION['municipio'],$Numero,$Curp,$Nombre);
                }else{
                    
                    $a=Acta::findActa($_GET['municipio'],$Numero,$Curp,$Nombre);
                }
                if($a == -1){
                    header( @'Location: listActa.php' ) ;
                }

                else{
                    foreach($a as $Acta){
?>

<title>Acta de Nacimiento</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="style2.css" rel="stylesheet" type="text/css" />
<link href="prettyForms.css" rel="stylesheet" type="text/css" />
<style type="text/css">
img, div, h1, ul, input, select, textarea, span, a {
	behavior: url(iepngfix.htc);
	background-image: none;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666;
}
</style> 
<script type="text/javascript" src="iepngfix_tilebg.js"></script>  

	<script type="text/javascript">
	function showFormData(frm){
		message="The values of the form are: \n-------------------------------------\n";
		message+="text area = \t" + frm.textarea.value + "\n\n";
		message+="textbox = \t" + frm.textbox.value + "\n\n";
		message+="select box = \t" + frm.selectMenu[frm.selectMenu.selectedIndex].innerHTML + "\n\n";
		message+="checkboxes = \t" + frm.checkbox1.checked + ", " + frm.checkbox2.checked + ", " + frm.checkbox3.checked + "\n\n";
		if(frm.radioButtons[0].checked){
			message+="radio buttons = \t" + frm.radioButtons[0].value + "\n\n";
		}else if(frm.radioButtons[1].checked){
			message+="radio buttons = \t" + frm.radioButtons[1].value + "\n\n";
		}else if(frm.radioButtons[2].checked){
			message+="radio buttons = \t" + frm.radioButtons[2].value + "\n\n";
		}
		window.alert(message);
		return false;
	}
	
	function doSomething(){
		showText = document.getElementById("signalEvent");
		showText.innerHTML = "You triggered an event";
		setTimeout("showText.innerHTML = '&nbsp;'",1000)
	}
	
	</script>
	<script type="text/javascript" src="prettyForms.js"></script>


<script language="javascript" type="text/javascript">
function checkAll(){
	for (var i=0;i<document.forms[0].elements.length;i++)
	{
		var e=document.forms[0].elements[i];
		if ((e.name != 'allbox') && (e.type=='checkbox'))
		{
			e.checked=document.forms[0].allbox.checked;
		}
	}
}
</script>
</head>

<body onload="prettyForms()">
<div id="wraper">
  <div id="main">
  <input type="image" name="logoMex" id="logoMex" src="images/logo_Blanco.png" />
  <label>CGJ</label></label>
  <div id="menu">
    <div class="hdrwrpr">
		  <ul id="topnav">
		    <li class="nav_press">
<a href="#" class="nav_item">DASHBOARD</a>
<div class="menu">
<ul class="sub_nav">
<li><a href="#">Elements</a></li>
<li><a href="#">Moderators</a></li>
<li><a href="#">Options</a></li>
<li><a href="#">Languages</a></li>
</ul>
<ul class="sub_nav">
<li><a href="#">Nullam massa nunc</a></li>
<li><a href="#">llamcorper vel</a></li>
<li><a href="#">Proin posuere</a></li>
<li><a href="#">Nullam ac quam</a></li>
</ul>
<div class="clear">&nbsp;</div>
</div>
</li>
<li class="unsub">
<a href="#" class="nav_item">MENUS</a>
</li>
<li class="nav_press">
<a href="#" class="nav_item">PAGES</a>
<div class="menu2">
<ul class="sub_nav">
<li><a href="#">About us</a></li>
<li><a href="#">Servises</a></li>
<li><a href="#">Options</a></li>
<li><a href="#">Portfolio</a></li>
</ul>
<ul class="sub_nav">
<li><a href="#">massa nunc</a></li>
<li><a href="#">llamcorper Nulla</a></li>
<li><a href="#">Proin posuere</a></li>
<li><a href="#">Nullam ac quam</a></li>
</ul>
<div class="clear">&nbsp;</div>
</div>
</li>
<li class="unsub">
<a href="#" class="nav_item">ARCHIVES</a>
</li>
<li class="unsub">
<a href="#" class="nav_item">THEMES</a>
</li>

</ul>
</div>
</div>
  <div id="toppanel">
   <div id="settings">
    <ul>
     <li><a href="#">My Account</a></li>
     <li><div class="steBlank">|</div></li>
     <li><a href="#">Settings</a></li>
     <li><div class="steBlank">|</div></li>
     <li><a href="#">Log Out</a></li>
    </ul>
   </div>
   <div id="pagenavigation">
    <ul>
     <li><a href="#">breadcrumbs</a></li>
     <li><div class="pnspace">></div></li>
     <li><a href="#" class="currentpage">current&nbsp;page</a></li>
    </ul>
    </div>
   <div id="userinfo"> </div>
   
   <form id="form_1"  method="POST" action="AltaActa.php" >
   <h1>Registro de Acta</h1>
   <p>&nbsp;</p>
   <div id="leftInput">
     <div id="smallInput">
       <h2>No.:</h2>
     <input disabled="disabled" value="<?php echo $Acta["no"]; ?>" name="No" type="text"  />
    </div>
    <div id="mediumInput">
     <h2>CURP</h2>
     <input disabled="disabled" value="<?php echo $Acta["curp"]; ?>" name="Curp" type="text" />
    </div>
    <div id="largeInput">
     <h2>Nombre del registrado:</h2>
     <input disabled="disabled" value="<?php echo $Acta["nombre"]; ?>" name="Nombre" type="text" />
    </div>
    <div id="mediumInput">
      <h2>Fecha de Nacimiento</h2>
     <input disabled="disabled" value="<?php print_r($Acta["fden"]); ?>" name="Fden" type="text" />
    </div>
    
    <div id="largeInput">
     <h2>Lugar de Nacimiento</h2>
     <input disabled="disabled" value="<?php print_r($Acta["lugardenacimiento"]); ?>" name="Lugardenacimiento" type="text" />
    </div>
 </div>
   <div id="rightInput">
      <div id="comboboxPanel">
          Sexo: 
          <input disabled="disabled" value="<?php print_r($Acta["papellido"]); ?>" name="Sexo" type="text" />
      
          
     </div>
   <div id="comboboxPanel">
          Presentado: 
          <input disabled="disabled" value="<?php print_r($Acta["vivo"]); ?>" name="Vivo" type="text" />
          
     </div>      
             
     
     <div id="comboboxPanel">
          Compareció: 
          
          <input disabled="disabled" value="<?php print_r($Acta["comparecio"]); ?>" name="Comparecio" type="text" />
            
            
          
     </div>
   </div>
   <div id="bottomPanel">
   <div id="leftpanel">
    <p>&nbsp;</p>
    <h3>Datos de los Padres</h3>
        <div id="largeInput">
          <h2>Nombre del PADRE:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["nombrep"]); ?>" name="Nombrep" type="text" />
        </div>
        <div id="comboboxPanel">
      <p>Escolaridad</p>
      <input disabled="disabled" value="<?php print_r($Acta["escolaridadp"]); ?>" name="Escolaridadp" type="text" />
          
      </div>
        <div id="largeInput">
          <h2>Origen:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["origenp"]); ?>" name="Origenp" type="text" />
        </div>
        <div id="comboboxPanel">
      <p>Trabajo</p>
      <input disabled="disabled" value="<?php print_r($Acta["trabajop"]); ?>" name="Trabajop" type="text" />
          
      </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["edadp"]); ?>" name="Edadp" type="text" />
    </div>
    <div id="mediumInput">
     <h2>OcupaciÓn</h2>
     <input disabled="disabled" value="<?php print_r($Acta["ocupacionp"]); ?>" name="Ocupacionp" type="text" />
    </div>
    <div id="comboboxPanel">
      <p>Posición en su trabajo</p>
      <input disabled="disabled" value="<?php print_r($Acta["posiciontrabajop"]); ?>" name="PosTrabajop" type="text" />
      
          
      </div>
      <div id="mediumInput">
     <h2>Domicilio</h2>
     <input disabled="disabled" value="<?php print_r($Acta["domiciliop"]); ?>" name="Domiciliop" type="text" />
    </div>
    <div id="comboboxPanel">
      <p>Estado Civil</p>
      <input disabled="disabled" value="<?php print_r($Acta["edocivilp"]); ?>" name="Edocivilp" type="text" />
          
      </div>
    
    <div id="">
    
    <legend></legend>

        <p>&nbsp;</p>
        <div id="largeInput">
          <h2>Nombre de la MADRE:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["nombrem"]); ?>" name="Nombrem" type="text" />
        </div>
        <div id="comboboxPanel">
      <p>Escolaridad</p>
      <input disabled="disabled" value="<?php print_r($Acta["escolaridadm"]); ?>" name="Escolaridadm" type="text" />
      
          
      </div>
        <div id="largeInput">
          <h2>Origen:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["origenm"]); ?>" name="Origenm" type="text" />
        </div>
        <div id="comboboxPanel">
      <p>Trabajo      </p>
      <input disabled="disabled" value="<?php print_r($Acta["trabajom"]); ?>" name="Trabajom" type="text" />
      </div>
        <div id="smallInput">
       <h2>Edad
         <input disabled="disabled" value="<?php print_r($Acta["edadm"]); ?>" name="Edadm" type="text" />
       </h2>
      </div>
    <div id="mediumInput">
     <h2>OcupaciÓn</h2>
     <input disabled="disabled" value="<?php print_r($Acta["ocupacionm"]); ?>" name="Ocupacionm" type="text" />
    </div>
    <div id="comboboxPanel">
      <p>Posición en su trabajo</p>
      <input disabled="disabled" value="<?php print_r($Acta["posiciontrabajom"]); ?>" name="PosTrabajom" type="text" />
          
      </div>
      <div id="mediumInput">
     <h2>Domicilio</h2>
     <input disabled="disabled" value="<?php print_r($Acta["domiciliom"]); ?>" name="Domiciom" type="text" />
    </div>
    <div id="comboboxPanel">
      <p>Estado Civil</p>
      <input disabled="disabled" value="<?php print_r($Acta["edocivilm"]); ?>" name="Edocivilm" type="text" />
          
      </div>
    
    <div id="">
    <legend></legend>

        <p>&nbsp;</p>
      
      
   
   </div>
   
   <div id="bottomcontant">
     <div id="bottomHead">
     <h3>Abuelos</h3>
     <p>
     <div id="largeInput">
          <h2>Abuelo Paterno:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["abuelop"]); ?>" name="Abuelop" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["edadap"]); ?>" name="Edadp" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["nacionalidadap"]); ?>" name="Nacionalidadap" type="text" />
    </div>

     <div id="largeInput">
          <h2>AbuelA Paterna:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["abuelap"]); ?>" name="Abuelap" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["edadaap"]); ?>" name="Edadaap" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["nacionalidadaap"]); ?>" name="Nacionalidadaap" type="text" />
    </div>
        <div id="largeInput">
          <h2>Domicilio:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["domiciliosap"]); ?>" name="Comiciliosap" type="text" />
        </div>
    </p>
    
    <p>
     <div id="largeInput">
          <h2>Abuelo MaTerno:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["abuelom"]); ?>" name="Abuelom" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["edadam"]); ?>" name="Edadam" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["nacionalidadam"]); ?>" name="Nacionalidadam" type="text" />
    </div>

     <div id="largeInput">
          <h2>AbuelA Materna:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["abuelam"]); ?>" name="Abuelam" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["edadaam"]); ?>" name="Edadaam" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["nacionalidadaam"]); ?>" name="Nacionaliadadaam" type="text" />
    </div>
        <div id="largeInput">
          <h2>Domicilio:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["domiciliosam"]); ?>" name="Domiciliosam" type="text" />
        </div>
    </p>
    
    <p>
    <h3>Testigos</h3>
    </p>
     <p>
     <div id="largeInput">
          <h2>Nombre:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["t1nombre"]); ?>" name="T1nombre" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["t1edad"]); ?>" name="T1edad" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["t1nacionalidad"]); ?>" name="T1Nacionalidad" type="text" />
    </div>
    
    <div id="largeInput">
          <h2>Domicilio:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["t1domicilio"]); ?>" name="T1domicilio" type="text" />
        </div>

     <div id="largeInput">
          <h2>Nombre:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["t2nombre"]); ?>" name="T2nombre" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["t2edad"]); ?>" name="T2Edad" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["t2nacionalidad"]); ?>" name="T2nacionalidad" type="text" />
    </div>
        <div id="largeInput">
          <h2>Domicilio:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["t2domicilio"]); ?>" name="T2domicilio" type="text" />
        </div>
        <div id="largeInput">
          <h2>Nombre:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["t3nombre"]); ?>" name="T3Nombre" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input disabled="disabled" value="<?php print_r($Acta["t3edad"]); ?>" name="T3edad" type="text" />
    </div>
    
        <div id="largeInput">
          <h2>Domicilio:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["t3domicilio"]); ?>" name="T3domicilio" type="text" />
        </div>
    </p>
    
    
    
    
    </div>
    <h3>OTROS DATOS</h3>
     <p>
     <div id="smallInput">
       <h2>Numero Oficialia:</h2>
     <input disabled="disabled" value="<?php print_r($Acta["nooficialia"]); ?>" id="Nooficialia" name="Nooficialia" type="text" />
  </div>
    <div id="smallInput">
       <h2>Numero Libro:</h2>
     <input disabled="disabled" value="<?php print_r($Acta["nolibro"]); ?>" name="Nolibro" type="text" />
    </div>
    <div id="smallInput">
       <h2>Fecha de Registro:</h2>
     <input disabled="disabled" value="<?php print_r($Acta["fechaderegistro"]); ?>" name="Fechaderegistro" type="text" />
    </div>
    
    <div id="largeInput">
          <h2>Localidad:</h2>
          <input disabled="disabled" value="<?php print_r($Acta["localidad"]); ?>" name="Localidad" type="text" />
        </div>
    </p>
    
    
    </div>
    <input type="image" name="aceptar" id="aceptar" src="images/aceptar.jpg" />
    <div id="leftInput">
    </form>
         


       <?php }}?>
     
     </div>
   
 </div>
  
<div id="footWrap">
 <div id="footPanel">
  <a href="#">Bluemoon <span>Tech</span></a>
  <p>© Copyright  All rights reserved </p>
  <p>Designed By: <a href="http://www.templateworld.com">TemplateWorld</a></p>
 </div>
</div>

<script  type="text/javascript">

checked=false;
function checkedAll (frm1) {
	var aa= document.getElementById('frm1');
	 if (checked == false)
          {
           checked = true
          }
        else
          {
          checked = false
          }
	for (var i =0; i < aa.elements.length; i++) 
	{
	 aa.elements[i].checked = checked;
	}
      }
</script>

</body>
</html>
