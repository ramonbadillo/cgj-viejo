<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CGJ - Anadir Sobrenombre Localidad</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="style2.css" rel="stylesheet" type="text/css" />
<link href="prettyForms.css" rel="stylesheet" type="text/css" />

<?php 
	include("Lugar.php");
	include("Usuario.php");
	include("Couch.php");
			//include("Lugar.php");
?>

<style type="text/css">
img, div, h1, ul, input, select, textarea, span, a {
	behavior: url(iepngfix.htc);
	background-image: none;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
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
   <h1>Anadir Sobrenombre Municipio</h1>
   <p>&nbsp;</p>
   <div id="leftInput">
   <form id="form1" class="appnitro"  method="post" enctype="multipart/form-data" action="AltaMunicipioSobrenombre.php" >
     
     
         <p>
           <label for="Id">Municipio:</label>
           
           <select class="element select medium" id="element_1" name="element_1"> 
             
             <?php 
			
			$lugar = new Lugar("Sombrerete", "Sombrerete", 0);
			$localidades=$lugar->getMunicipios();
			foreach($localidades as $localidad){
				//for($i=0;$i<10;$i++){
			?>
             
             <option value="<?php echo $localidad?>"> <?php echo $localidad?></option>
             <?php }?>
             
           </select>
         </p>
         <p>
           <label for="Usuario">Nuevo Sobrenombre : </label>
           <input id="element_2" name="element_2" class="element text" size="60" maxlength="" value="" type="text">
           
           
           </p>
         <p>
           
           <input type="image" name="aceptar" id="aceptar" src="images/aceptar.jpg" />
         </p>
   </form>
     
    </div>
    
    
    
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
