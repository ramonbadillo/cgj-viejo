<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
     <input name="No" type="text" />
    </div>
    <div id="mediumInput">
     <h2>CURP</h2>
     <input name="Curp" type="text" />
    </div>
    <div id="largeInput">
     <h2>Nombre del registrado:</h2>
     <input name="Nombre" type="text" />
    </div>
    <div id="mediumInput">
      <h2>Fecha de Nacimiento</h2>
     <input name="Fden" type="text" />
    </div>
    
    <div id="largeInput">
     <h2>Lugar de Nacimiento</h2>
     <input name="Lugardenacimiento" type="text" />
    </div>
 </div>
 
   <div id="rightInput">
   <div id="comboboxPanel">
          Sexo: 
            <select name="Sexo" onchange="doSomething()">
              <option value="Hombre">Hombre</option>
              <option value="Mujer">Mujer</option>
            </select>
          
     </div>
   <div id="comboboxPanel">
          Presentado: 
            <select name="Vivo" onchange="doSomething()">
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          
     </div>

     
     <div id="comboboxPanel">
          Compareció: 
            <select name="Comparecio" onchange="doSomething()">
              <option value="El Padre">El Padre</option>
              <option value="La Madre">La Madre</option>
              <option value="Ambos">Ambos</option>
              <option value="Otro...">Otro...</option>
            </select>
          
     </div>
   </div>
   <div id="bottomPanel">
   <div id="leftpanel">
    <p>&nbsp;</p>
    <h3>Datos de los Padres</h3>
        <div id="largeInput">
          <h2>Nombre del PADRE:</h2>
          <input name="Nombrep" type="text" />
        </div>
        <div id="comboboxPanel">
      <p>Escolaridad</p>
          <select name="Escoloaridadp" onchange="doSomething()">
            <option value="Sin Escolaridad">Sin Escolaridad</option>
            <option value="1 a 3 Años de Primaria">1 a 3 Años de Primaria</option>
            <option value="4 a 5 Años de Primaria">4 a 5 Años de Primaria</option>
            <option value="Primaria Completa">Primaria Completa</option>
            <option value="Secundaria">Secundaria</option>
            <option value="Preparatoria">Preparatoria</option
            ><option value="Profesional">Profesional</option>
            <option>Otra...</option>
            
          </select>
      </div>
        <div id="largeInput">
          <h2>Origen:</h2>
          <input name="Origenp" type="text" />
        </div>
        <div id="comboboxPanel">
      <p>Trabajo</p>
          <select name="Trabajop" onchange="doSomething()">
            <option value="No trabaja">No trabaja</option>
            <option value="Trabaja sector Agropecuario">Trabaja sector Agropecuario</option>
            <option value="Alguna otra actividad">Alguna otra actividad</option>
          </select>
      </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input name="Edadp" type="text" />
    </div>
    <div id="mediumInput">
     <h2>OcupaciÓn</h2>
     <input name="Ocupacionp" type="text" />
    </div>
    <div id="comboboxPanel">
      <p>Posición en su trabajo</p>
          <select name="PosTrabajop" onchange="doSomething()">
            <option value="Obrero">Obrero</option>
            <option value="Jornalero o Peón">Jornalero o Peón</option>
            <option value="Empleado">Empleado</option>
            <option value="Patrón o Empresario">Patrón o Empresario</option>
            <option value="Miembro de Cooperativa">Miembro de Cooperativa</option>
            <option value="Trabajador no remunerado">Trabajador no remunerado</option>
            <option value="Trabajador en la via publica">Trabajador en la via publica</option>
            <option value="o en su vivienda">o en su vivienda</option>
            <option value="o en su estrablecimiento">o en su estrablecimiento</option>
        </select>
      </div>
      <div id="mediumInput">
     <h2>Domicilio</h2>
     <input name="Domiciliop" type="text" />
    </div>
    <div id="comboboxPanel">
      <p>Estado Civil</p>
          <select name="Edocivilp" onchange="doSomething()">
            <option value="Casado">Casado</option>
            <option value="Viudo">Viudo</option>
            <option value="Divorciado">Divorciado</option>
            <option value="Unión libre">Unión libre</option>
        </select>
      </div>
    
    <div id="">
    
    <legend></legend>

        <p>&nbsp;</p>
        <div id="largeInput">
          <h2>Nombre de la MADRE:</h2>
          <input name="Nombrem" type="text" />
        </div>
        <div id="comboboxPanel">
      <p>Escolaridad</p>
          <select name="Escolaridadm" onchange="doSomething()">
            <option value="Sin Escolaridad">Sin Escolaridad</option>
            <option value="1 a 3 Años de Primaria">1 a 3 Años de Primaria</option>
            <option value="4 a 5 Años de Primaria">4 a 5 Años de Primaria</option>
            <option value="Primaria Completa">Primaria Completa</option>
            <option value="Secundaria">Secundaria</option>
            <option value="Preparatoria">Preparatoria</option>
           	<option value="Profesional">Profesional</option>
            <option value="Otra...">Otra...</option>
            
          </select>
      </div>
        <div id="largeInput">
          <h2>Origen:</h2>
          <input name="Origenm" type="text" />
        </div>
        <div id="comboboxPanel">
      <p>Trabajo</p>
          <select name="Trabajom" onchange="doSomething()">
            <option value="No trabaja">No trabaja</option>
            <option value="Trabaja sector Agropecuario">Trabaja sector Agropecuario</option>
            <option value="Alguna otra actividad">Alguna otra actividad</option>
          </select>
      </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input name="Edadm" type="text" />
    </div>
    <div id="mediumInput">
     <h2>OcupaciÓn</h2>
     <input name="Ocupacionm" type="text" />
    </div>
    <div id="comboboxPanel">
      <p>Posición en su trabajo</p>
          <select name="PosTrabajom" onchange="doSomething()">
            <option value="Obrero">Obrero</option>
            <option value="Jornalero o Peón">Jornalero o Peón</option>
            <option value="Empleado">Empleado</option>
            <option value="Patrón o Empresario">Patrón o Empresario</option>
            <option value="Miembro de Cooperativa">Miembro de Cooperativa</option>
            <option value="Trabajador no remunerado">Trabajador no remunerado</option>
            <option value="Trabajador en la via publica">Trabajador en la via publica</option>
            <option value="o en su vivienda">o en su vivienda</option>
            <option value="o en su estrablecimiento">o en su estrablecimiento</option>
        </select>
      </div>
      <div id="mediumInput">
     <h2>Domicilio</h2>
     <input name="Domiciom" type="text" />
    </div>
    <div id="comboboxPanel">
      <p>Estado Civil</p>
          <select name="Edocivilm" onchange="doSomething()">
            <option value="Casado">Casado</option>
            <option value="Viudo">Viudo</option>
            <option value="Divorciado">Divorciado</option>
            <option value="Unión libre">Unión libre</option>
        </select>
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
          <input name="Abuelop" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input name="Edadp" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input name="Nacionalidadap" type="text" />
    </div>

     <div id="largeInput">
          <h2>AbuelA Paterna:</h2>
          <input name="Abuelap" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input name="Edadaap" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input name="Nacionalidadaap" type="text" />
    </div>
        <div id="largeInput">
          <h2>Domicilio:</h2>
          <input name="Comiciliosap" type="text" />
        </div>
    </p>
    
    <p>
     <div id="largeInput">
          <h2>Abuelo MaTerno:</h2>
          <input name="Abuelom" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input name="Edadam" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input name="Nacionalidadam" type="text" />
    </div>

     <div id="largeInput">
          <h2>AbuelA Materna:</h2>
          <input name="Abuelam" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input name="Edadaam" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input name="Nacionaliadadaam" type="text" />
    </div>
        <div id="largeInput">
          <h2>Domicilio:</h2>
          <input name="Domiciliosam" type="text" />
        </div>
    </p>
    
    <p>
    <h3>Testigos</h3>
    </p>
     <p>
     <div id="largeInput">
          <h2>Nombre:</h2>
          <input name="T1nombre" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input name="T1edad" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input name="T1Nacionalidad" type="text" />
    </div>
    
    <div id="largeInput">
          <h2>Domicilio:</h2>
          <input name="T1domicilio" type="text" />
        </div>

     <div id="largeInput">
          <h2>Nombre:</h2>
          <input name="T2nombre" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input name="T2Edad" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input name="T2nacionalidad" type="text" />
    </div>
        <div id="largeInput">
          <h2>Domicilio:</h2>
          <input name="T2domicilio" type="text" />
        </div>
        <div id="largeInput">
          <h2>Nombre:</h2>
          <input name="T3Nombre" type="text" />
        </div>
        <div id="smallInput">
       <h2>Edad</h2>
     <input name="T3edad" type="text" />
    </div>
    <div id="smallInput">
       <h2>Nacionalidad</h2>
     <input name="T3nacionalidad" type="text" />
    </div>
        <div id="largeInput">
          <h2>Domicilio:</h2>
          <input name="T3domicilio" type="text" />
        </div>
    </p>
    
   
    
    
    </div>
    <h3>OTROS DATOS</h3>
     <p>
     <div id="smallInput">
       <h2>Numero Oficialia:</h2>
     <input id="Nooficialia" name="Nooficialia" type="text" />
  </div>
    <div id="smallInput">
       <h2>Numero Libro:</h2>
     <input name="Nolibro" type="text" />
    </div>
    <div id="smallInput">
       <h2>Fecha de Registro:</h2>
     <input name="Fechaderegistro" type="text" />
    </div>
    
    <div id="largeInput">
          <h2>Localidad:</h2>
          <input name="Localidad" type="text" />
        </div>
    </p>
    
    
    
    </div>
    <input type="image" name="aceptar" id="aceptar" src="images/aceptar.jpg" />
    <div id="leftInput">
    </form>
         
       
     
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
