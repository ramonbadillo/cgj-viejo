<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Usuario</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="style2.css" rel="stylesheet" type="text/css" />
<link href="prettyForms.css" rel="stylesheet" type="text/css" />
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
         <div id="leftInput">
	<h3>Seleccionar Usuario</h3>
     <form id="form1" name="form1" method="post" action="#">
    <select>
     <?php 
		include("Usuario.php");
		include("Couch.php");

		$user=new Usuario("","","","","");
        $a=$user->getUsuarios();
        print_r($a);
		 foreach($a as $u){?>
     <option><?php echo $u["usuario"] ?></option>
     <?php } ?>
   </select>
   <input type="button" value="Llenar campos">
   </form>
   
   <?php
   $id=$_POST['Id'];
   

   ?>
 </br><h2>Editar Usuario</h2>

        <form id="form1" name="form1" method="post" action="altaUsuario.php">
   <table width="200" border="0">
     <tr>
       <td><label for="Id">No. <br />
         Usuario:</label></td>
       <td><input type="text" name="Id" id="Id" /></td>
       <td></label></td>
       <td></td>
     </tr>
     <tr>
       <td>         <label for="Usuario">Usuario: </label></td>
       <td><input name="Usuario" type="text" id="Usuario2" size="40" /></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
     </tr>
     <tr>
       <td>     <label for="Nombre">Nombre: </label></td>
       <td><input name="Nombre" type="text" id="Usuario" size="40" /></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
     </tr>
     <tr>
       <td>     <label for="mun">Municipio</label></td>
       <td><input type="text" name="mun" id="mun" /></td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
     </tr>
     <tr>
       <td>       <label for="uPass">Contraseña: </label></td>
       <td><input type="password" name="uPass" id="uPass2" /></td>
       <td>       <label for="uPass">Repetir <br />
        Contraseña: </label></td>
       <td><input type="password" name="uPass2" id="uPass3" /></td>
     </tr>
     <tr>
       <td>       <label for="uPass">Privilegio: </label></td>
       <td><input type="text" name="privilegio" id="uPass" /></td>
       <td>         <input type="image" name="aceptar" id="aceptar" src="images/aceptar.jpg" /></td>
       <td>&nbsp;</td>
     </tr>
   </table>
   <p>&nbsp;</p>
   <div id="leftInput"></div>
   <div id="leftInput"></div>
     <div id="leftInput"></div>
     <div id="leftInput"></div>
     <div id="leftInput">

      </form>
     
    </div>
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
