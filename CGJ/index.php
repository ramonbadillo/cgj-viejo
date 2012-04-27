<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log In</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="style2.css" rel="stylesheet" type="text/css" />
<link href="prettyForms.css" rel="stylesheet" type="text/css" />
<style type="text/css">
img, div, h1, ul, input, select, textarea, span, a {
	behavior: url(iepngfix.htc);
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
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
  <div id="main"><label>
    <input type="image" name="logoMex" id="logoMex" src="images/logo_Blanco.png" />
    <label>CGJ </label></label>
    <div id="toppanel">
      <h1>Log In</h1>
   <p>&nbsp;</p>
   <div id="loging"><form id="form1" name="form1" method="post" action="login.php">
     <p>Usuario:       </p>
       <input name="login" type="text" id="login" size="50" />
     </p>
     <p>Contraseña:</p>
       <input name="pass" type="password" id="pass" size="50">
     </p>
     <p>
         <input type="image" name="aceptar" id="aceptar" src="images/aceptar.jpg" />
     </p>
   </form></div>
   <div id="leftInput">
     
     </div>
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
