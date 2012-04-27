<?php
    include("Acta.php");
    include("Couch.php");
    include("Lugar.php");
    include("Inicio.php");
    include("Usuario.php");
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listado de las Actas</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="style2.css" rel="stylesheet" type="text/css" />
<link href="prettyForms.css" rel="stylesheet" type="text/css" />
<style type="text/css">
img, div, h1, ul, input, select, textarea, span, a { behavior: url(iepngfix.htc) }
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
  <label>CGJ</label>
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
    <div id="searchpanel">
    <form name="input" action="filtro.php" method="get">
     <input name="search" type="text" />
     <input type="image" name="aceptar" id="aceptar" src="images/aceptar.jpg" />
     </form>
    </div>
   </div>
   <div id="pagenavigation">
    <ul>
     <li><a href="#">breadcrumbs</a></li>
     <li><div class="pnspace">></div></li>
     <li><a href="#" class="currentpage">current&nbsp;page</a></li>
    </ul>
    </div>
   <div id="userinfo">
    <ul>
     <li><a href="#">Welcome,&nbsp;<span>USER!</span></a></li>
     <li><div class="userBlank">|</div></li>
     <li><a href="#">You&nbsp;have&nbsp;2&nbsp;messages!</a></li>
    </ul>
   </div>
   <h1>Listado de Actas</h1>
   <p>A continuación se despliegan todos las actas del sistema.</p>
   <?php
   if($_SESSION['priv']==0){
	?>
   <p> <a href="interActa.php"><img src="images/nueva.png"></a> </p>
   <?php
   }
   ?>
  </div>


  <div id="bottomPanel">
   <div id="leftpanel" >
    <h2>&nbsp;</h2>
    <div id="messagepanel" style="overflow:auto;">

      <form  action="">
     <div id="messagehead">
       <div class="title"><h1>Actas:</h2></div>
     </div>
     <?php
     if($_SESSION['priv'] == 1){
        $a = Acta::findActaPrivi($_GET['search']);
        foreach($a as $acta){
            if($acta != -1){
                ?>
                <div class="message_even">
      <div class="mTitle"><?php print_r($acta["no"]); ?></div>
      <div class="mDescription"><?php print_r($acta["nombre"]); ?></div>
      <div class="mDescription"><?php print_r($acta["curp"]); ?></div>
      <ul>
       <li><a href="modActa.php?num=<?php print_r($acta["no"]); ?>&curp=<?php print_r($acta["curp"]); ?>&nombre=<?php print_r($acta["nombre"]); ?>">Edit</a></li>
       <li><div class="mpSpace">|</div></li>
       <li><a href="modActa.php?num=<?php print_r($acta["no"]); ?>&curp=<?php print_r($acta["curp"]); ?>&nombre=<?php print_r($acta["nombre"]); ?>">Ver</a></li>
       <li><div class="mpSpace">|</div></li>
       <li><a href="#">Delete</a></li>
      </ul>
     </div> <?php
            }
        }
    }else{
        $a = Acta::findActa($_SESSION['municipio'], $_GET['search']);
        if($a != -1){
            foreach($a as $acta){
                
                ?>
                <div class="message_even">
      <div class="mTitle"><?php print_r($acta["no"]); ?></div>
      <div class="mDescription"><?php print_r($acta["nombre"]); ?></div>
      <div class="mDescription"><?php print_r($acta["curp"]); ?></div>
      <ul>
       <li><a href="modActa.php?num=<?php print_r($acta["no"]); ?>&curp=<?php print_r($acta["curp"]); ?>&nombre=<?php print_r($acta["nombre"]); ?>">Edit</a></li>
       <li><div class="mpSpace">|</div></li>
       <li><a href="modActa.php?num=<?php print_r($acta["no"]); ?>&curp=<?php print_r($acta["curp"]); ?>&nombre=<?php print_r($acta["nombre"]); ?>">Ver</a></li>
       <li><div class="mpSpace">|</div></li>
       <li><a href="#">Delete</a></li>
      </ul>
     </div> <?php
                }
            }
    }
?>


    </form>
  </div>





   </div>
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
