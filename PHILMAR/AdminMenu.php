<?php
/*********************************************************************************
 *       Filename: AdminMenu.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// AdminMenu CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// AdminMenu CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "AdminMenu.php";
//===============================


//===============================
// AdminMenu PageSecurity begin
check_security(2);
// AdminMenu PageSecurity end
//===============================

//===============================
// AdminMenu Open Event begin
// AdminMenu Open Event end
//===============================

//===============================
// AdminMenu OpenAnyPage Event start
// AdminMenu OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// AdminMenu Show begin

//===============================
// Display page

//===============================
// HTML Page layout
//-------------------------------
?><html>
<head>
<title>Philmar Online Rent-a-Car</title>
<meta name="GENERATOR" content="Philmar">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"></head>
<body style="background-color: #FFFFFF; color: #000000; font-family: Arial, Tahoma, Verdana, Helveticabackground-color: #FFFFFF; color: #000000; font-family: Arial, Tahoma, Verdana, Helvetica">
<center>
 <table>
  <tr>
   <td valign="top"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Philmar Online Rent-a-Car</title>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/mazda6_1.jpg','images/home_2.jpg','images/aboutus_2.jpg','images/contactus_2.jpg')">
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="images/header1.jpg" width="778" height="110"></td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="55"><img src="images/header2.jpg" width="55" height="43"></td>
    <td width ="17"><a href="default.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('home','','images/home_2.jpg',1)"><img src="images/home_1.jpg" alt="home" name="home" width="63" height="43" border="0"></a></td>
    <td width ="114" valign="middle"><a href="about.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('aboutphilmar','','images/aboutus_2.jpg',1)"><img src="images/aboutus_1.jpg" alt="aboutphilmar" name="aboutphilmar" width="114" height="43" border="0"></a></td>
    <td width ="111"><a href="contact.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('contactus','','images/contactus_2.jpg',1)"><img src="images/contactus_1.jpg" alt="contactus" name="contactus" width="108" height="43" border="0"></a></td>
    <td width ="455"><img src="images/header3.jpg" width="438" height="43"></td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="55"><img src="images/header4.jpg" width="55" height="48"></td>
    <td>&nbsp;</td>
    <td width="438"><img src="images/header5.jpg" width="438" height="48"></td>
  </tr>
</table>
</body>
</html>
 <?php Menu_show() ?>
   
   </td>
  </tr>
 </table>
</center>
<table width="760" align="center">
<tr>
  <td align="center">
<hr color="#800000">
 <table>
  <tr>
   
   <td valign="top">
<?php Form_show() ?>
    
   </td>
  </tr>
 </table>

<hr color="#800000" width="60%">
</td>
</tr>
</table>
<center>
 <table>
  <tr>
   <td valign="top">
<?php Footer_show() ?>
    </td>
   
  </tr>
 </table>
 </center>
</body>
</html>
<?php

// AdminMenu Show end

//===============================
// AdminMenu Close Event begin
// AdminMenu Close Event end
//===============================
//********************************************************************************


//===============================
// Display Menu Form
//-------------------------------
function Form_show()
{
  global $db;
  global $styles;
  $sFormTitle = "Administration Menu";

//-------------------------------
// Form Open Event begin
// Form Open Event end
//-------------------------------

//-------------------------------
// Set URLs
//-------------------------------
  $fldField1 = "MembersGrid.php";
  $fldField2 = "OrdersGrid.php";
  $fldField3 = "AdminVehicle.php";
  $fldField4 = "CategoriesGrid.php";
  $fldField5 = "EditorialsGrid.php";
  $fldField6 = "EditorialCatGrid.php";
  $fldField = "CardTypesGrid.php";
//-------------------------------
// Form Show begin
//-------------------------------


//-------------------------------
// Form BeforeShow Event begin
// Form BeforeShow Event end
//-------------------------------

//-------------------------------
// Show fields
//-------------------------------

?>
    <table style="width:100%">
     <tr>
      <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?= $sFormTitle ?></font></td>
     </tr>
     <tr>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField1?>"><font style="font-size: 10pt; color: #000000">Members</font></a></td>
     </tr>
     <tr>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField2?>"><font style="font-size: 10pt; color: #000000">Reservation</font></a></td>
     </tr>
     <tr>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField3?>"><font style="font-size: 10pt; color: #000000">Vehicle</font></a></td>
     </tr>
     <tr>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField4?>"><font style="font-size: 10pt; color: #000000">Categories</font></a></td>
     </tr>
     <tr>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField5?>"><font style="font-size: 10pt; color: #000000">Editorials</font></a></td>
     </tr>
     <tr>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField6?>"><font style="font-size: 10pt; color: #000000">Editorial Categories</font></a></td>
     </tr>
     <tr>
      <td style="background-color: #FFFFFF; border-width: 1"><a href="<?= $fldField?>"><font style="font-size: 10pt; color: #000000">Card Types</font></a></td>
     </tr>
    </table>
<?php

//-------------------------------
// Form Show end
//-------------------------------
}
//===============================

?>