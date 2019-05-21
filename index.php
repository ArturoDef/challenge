<html>
   
<head>
  <?php include_once "includes/global.php" ?>         
  <?php include_once "header.php" ?>        
  <?php include_once "includes/languages.php" ?>
  <?php $mycon=dbConnection();?>         
<script language="javascript" src="javascript/mainscript.js"></script>  
<LINK REL="StyleSheet" HREF="/stylesheets/index-styles.css" TYPE="text/css"/>  
</head>
<body bgcolor="#FFFFFF" text="#000000" link="#0033CC" vlink="#6699FF" alink="#00CC33">
<!-- TOP  -->
<div id="top" >
<?php include_once "top.html" ?>
</div>
<!-- CONTENU PRINCIPAL -->
<div style="width:100%; height:99%;" id="mainzone" name="mainzone">
  <table width="100%" style="height:99%" class="maintable" cellspacing="0px;">
    <tr>
      <td id="colMenu" >
        <div id="leftzone">
            <?php include_once "bottomleft.php" ?>         
        </div>   
      </td>
      <td style="vertical-align:top;" id="colprincipal">
        <div id="principal">
		   <div  id="compteur-index" style="height:0px;"></div>
            <?php include_once "maincontent-2019.php" ?> 
        </div>
      </td>
    </tr>
  </table>
  </div>
<script language="javascript" src="./javascript/menu.js"></script>    
   
</body>
</html>
</body>