<?php
/*********************************************************************************
 *       Filename: CardTypesGrid.php
 *       PHP 4.0 build 11/30/2001
 *********************************************************************************/

//-------------------------------
// CardTypesGrid CustomIncludes begin

include ("./common.php");
include ("./Header.php");
include ("./Footer.php");

// CardTypesGrid CustomIncludes end
//-------------------------------

session_start();

//===============================
// Save Page and File Name available into variables
//-------------------------------
$sFileName = "CardTypesGrid.php";
//===============================


//===============================
// CardTypesGrid PageSecurity begin
check_security(2);
// CardTypesGrid PageSecurity end
//===============================

//===============================
// CardTypesGrid Open Event begin
// CardTypesGrid Open Event end
//===============================

//===============================
// CardTypesGrid OpenAnyPage Event start
// CardTypesGrid OpenAnyPage Event end
//===============================

//===============================
//Save the name of the form and type of action into the variables
//-------------------------------
$sAction = get_param("FormAction");
$sForm = get_param("FormName");
//===============================

// CardTypesGrid Show begin

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
<?php CardTypes_show() ?>
    
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

// CardTypesGrid Show end

//===============================
// CardTypesGrid Close Event begin
// CardTypesGrid Close Event end
//===============================
//********************************************************************************


//===============================
// Display Grid Form
//-------------------------------
function CardTypes_show()
{
//-------------------------------
// Initialize variables  
//-------------------------------
  
  
  global $db;
  global $sCardTypesErr;
  global $sFileName;
  global $styles;
  $sWhere = "";
  $sOrder = "";
  $sSQL = "";
  $sFormTitle = "Card Types";
  $HasParam = false;
  $iRecordsPerPage = 20;
  $iCounter = 0;
  $iSort = "";
  $iSorted = "";
  $sDirection = "";
  $sSortParams = "";
  $sActionFileName = "CardTypesRecord.php";

  $transit_params = "";
  $form_params = "";

//-------------------------------
// Build ORDER BY statement
//-------------------------------
  $sOrder = " order by c.name Asc";
  $iSort = get_param("FormCardTypes_Sorting");
  $iSorted = get_param("FormCardTypes_Sorted");
  if(!$iSort)
  {
    $form_sorting = "";
  }
  else
  {
    if($iSort == $iSorted)
    {
      $form_sorting = "";
      $sDirection = " DESC";
      $sSortParams = "FormCardTypes_Sorting=" . $iSort . "&FormCardTypes_Sorted=" . $iSort . "&";
    }
    else
    {
      $form_sorting = $iSort;
      $sDirection = " ASC";
      $sSortParams = "FormCardTypes_Sorting=" . $iSort . "&FormCardTypes_Sorted=" . "&";
    }
    if ($iSort == 1) $sOrder = " order by c.name" . $sDirection;
  }

//-------------------------------
// HTML column headers
//-------------------------------
?>
     <table style="width:100%">
      <tr>
       <td style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1" colspan="1"><a name="CardTypes"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?=$sFormTitle?></font></a></td>
      </tr>
      <tr>
       <td style="background-color: #FFFFFF; border-style: inset; border-width: 0"><a href="<?=$sFileName?>?<?=$form_params?>FormCardTypes_Sorting=1&FormCardTypes_Sorted=<?=$form_sorting?>&"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Name</font></a></td>
      </tr>
<?




//-------------------------------
// Build base SQL statement
//-------------------------------
  $sSQL = "select c.card_type_id as c_card_type_id, " . 
    "c.name as c_name " . 
    " from card_types c ";
//-------------------------------

//-------------------------------
// CardTypes Open Event begin
// CardTypes Open Event end
//-------------------------------

//-------------------------------
// Assemble full SQL statement
//-------------------------------
  $sSQL .= $sWhere . $sOrder;
//-------------------------------

  

//-------------------------------
// Process the link to the record page
//-------------------------------
  $form_action = $sActionFileName;
//-------------------------------

//-------------------------------
// Execute SQL statement
//-------------------------------
  $db->query($sSQL);
  $next_record = $db->next_record();
//-------------------------------
// Process empty recordset
//-------------------------------
  if(!$next_record)
  {
?>
     <tr>
      <td colspan="1" style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000">No records</font></td>
     </tr>
<?
 
//-------------------------------
//  The insert link.
//-------------------------------
?>
    <tr>
     <td colspan="1" style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"><a href="<?= $form_action ?>?<?= $transit_params ?>"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Insert</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?  
?>
  </table>
<?

    return;
  }

//-------------------------------

//-------------------------------
// Initialize page counter and records per page
//-------------------------------
  $iRecordsPerPage = 20;
  $iCounter = 0;
//-------------------------------

//-------------------------------
// Display grid based on recordset
//-------------------------------
  while($next_record  && $iCounter < $iRecordsPerPage)
  {
//-------------------------------
// Create field variables based on database fields
//-------------------------------
    $fldname_URLLink = "CardTypesRecord.php";
    $fldname_card_type_id = $db->f("c_card_type_id");
    $fldname = $db->f("c_name");
    $next_record = $db->next_record();
    
//-------------------------------
// CardTypes Show begin
//-------------------------------

//-------------------------------
// CardTypes Show Event begin
// CardTypes Show Event end
//-------------------------------


//-------------------------------
// Process the HTML controls
//-------------------------------
?>
      <tr>
       <td style="background-color: #FFFFFF; border-width: 1"><font style="font-size: 10pt; color: #000000"><a href="<?=$fldname_URLLink?>?card_type_id=<?=$fldname_card_type_id?>&<?= $transit_params ?>"><font style="font-size: 10pt; color: #000000"><?=$fldname?></font></a>&nbsp;</font></td>
      </tr><?
//-------------------------------
// CardTypes Show end
//-------------------------------

//-------------------------------
// Move to the next record and increase record counter
//-------------------------------
    
    $iCounter++;
  }

 
//-------------------------------
//  Grid. The insert link and record navigator.
//-------------------------------
?>
    <tr>
     <td colspan="1" style="background-color: #FFFFFF; border-style: inset; border-width: 0"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold"><a href="<?= $form_action ?>?<?= $transit_params ?>"><font style="font-size: 10pt; color: #CE7E00; font-weight: bold">Insert</font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?

//-------------------------------
// Finish form processing
//-------------------------------
  ?>
      </font></td></tr>
    </table>
  <?


//-------------------------------
// CardTypes Close Event begin
// CardTypes Close Event end
//-------------------------------
}
//===============================

?>