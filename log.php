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
<body style="background-color:#FFCC99" >
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">online  General shop </a></h1>
			
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			
			<li></li>
			<li></li>
 			<li></li>
           <li></li>
           <li></li>
           
		</ul>
  </div>
	<!-- end #menu -->


<form name=frm method=post action=log.php>
<center>
<table>

<tr>
<td>username</td>
<td><input type="text"name=un></td>
</tr>

<tr>
<td>password</td>
<td><input type="password" name=ps></td>
</tr>

</table>
<input type=submit name=sbm value=go>
<a href=use1.php>new user</a>
</tr>

</center>
<form>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="go")
{
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("login",$cn);
$sql="select * from use1 ";
$result=mysql_query($sql,$cn);
$fl=0;
while($row=mysql_fetch_array($result))
{
echo $row[0];
echo $row[1];
echo $_POST['un'];
echo $_POST['ps'];
if($row[0]==$_POST['un'] and $row[1]==$_POST['ps'])
{
echo "here";
$_SESSION['ui']=$_POST['un'];
$_SESSION['un']=$row[2];
$_SESSION['ad']=$row[3];
$_SESSION['ct']=$row[4];
$_SESSION['mb']=$row[5];
$fl=1;
$sql="select count(*) from pordertra";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select max(ordno) from pordertra";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$x=$row[0]+1;
}
else
$x=1;
$_SESSION['orn']=$x;
}
}
if($fl==1)
{
echo "wel come";
header("location:http://localhost/bb/pordertratemp1.php");
}
else
if($_POST['un']=="admin" && $_POST['ps']=="admin")
header("location:http://localhost/bb/index3.html");
else
echo "invalid username and password";
}
}
?>