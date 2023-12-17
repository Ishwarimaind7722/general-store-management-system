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
			<h1><a href="#">online  General shop</a></h1>
			
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


<form name=frm method=post action="pordertra.php">
<center>
<table>
<tr>
<td>ordno</td>
<?php
session_start();
echo "<td><input type=text name=on value='$_SESSION[orn]'></td>";
?>
</tr>
<tr>
<td>prno</td>
<td><select name=pn>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("login",$cn);
$sql="select * from product";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<option value=$row[1]>$row[1]</option>";
}
echo "</select>";
?>
</td>
</tr>
<tr>
<td>qty</td>
<td><input type=text name=qt></td>
</tr>
<tr>
</table>
<input type=submit name=sbm value=submit>
</center>
</form>
</body>
</html>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("login",$cn);
echo "<center><table border=2>";
echo "<tr>";
echo "<th>Order no.</th>";
echo "<th>Product name.</th>";
echo "<th>Quantity</th>";
echo "<th>Rate</th>";
echo "<th>Amount</th>";
echo "<th>Date</th>";
echo "</tr>";
$sql="select count(*) from pordertra where ordno='$_SESSION[orn]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select * from pordertra where ordno='$_SESSION[orn]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[6]</td>";
echo "</tr>";
}
echo "</table></center>";
}
if(isset($_POST['sbm']))
{
$sql="select  * from product where discription='$_POST[pn]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$pr=$row[3];
$amt=$pr*$_POST['qt'];
$dt=date('Y-m-d');
$sql="insert into pordertra values('$_POST[on]','$_POST[pn]','$_POST[qt]','$pr','$amt','$_SESSION[ui]','$dt')";
mysql_query($sql,$cn);
echo "record is saved";
echo "<center><table border=2>";
echo "<tr>";
echo "<th>Order no.</th>";
echo "<th>Product name.</th>";
echo "<th>Quantity</th>";
echo "<th>Rate</th>";
echo "<th>Amount</th>";
echo "<th>Date</th>";
echo "</tr>";
$sql="select count(*) from pordertra where ordno='$_SESSION[orn]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select * from pordertra where ordno='$_SESSION[orn]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[6]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>