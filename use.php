<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Arthropod  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20100422

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Arthropod   by Free CSS Templates</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<style type="text/css">
@import "gallery.css";
</style>
</head>
<body style="background-color:#FFCC99">
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">online General shop</a></h1>
			
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			
			<li><a href="index1.html">Home</a></li>
			<li><a href="pordertratemp1.php">Order</a></li>
 			<li><a href="bill.php">Bill</a></li>
           <li><a href="use.php">Customer</a></li>
           <li><a href="contactus.html">Contactus</a></li>
                      <li><a href="log.php">Logout</a></li>

           
		</ul>
  </div>
	<!-- end #menu -->
    
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
	
	<form name=frm method=post action=use.php>
<center>
<table>

<tr>
<td>userid</td>
<td><input type="text"name=ui></td>
</tr>


<tr>
<td>password</td>
<td><input type="password"name=ps></td>
</tr>

<tr>
<td>username</td>
<td><input type="text"name=un></td>
</tr>

<tr>
<td>addr</td>
<td><input type="text"name=add></td>
</tr>

<tr>
<td>city</td>
<td><input type="text"name=cs></td>
</tr>


<tr>
<td>mbno</td>
<td><input type="text"name=mn></td>
</tr>


</table>
<input type=submit name=sbm value=submit>
</tr>

</center>
<form>
</body>
</html>
<?php
$cn=mysql_connect("localhost","root");

mysql_select_db("login",$cn);
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
$sql="insert into use1 values('$_POST[ui]','$_POST[ps]','$_POST[un]','$_POST[add]','$_POST[cs]','$_POST[mn]')";
mysql_query($sql,$cn);
echo "record is stored";
header("location:http://localhost/bb/log.php");
}
}
?>