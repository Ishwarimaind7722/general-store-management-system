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
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">online  General shop</a></h1>
			
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
            <li><a href="index3.html">Home</a></li>
			<li class="current_page_item"><a href="Prod.php">Product</a></li>
            <li><a href="today.php">Today's order</a></li>
            <li><a href="delivery.php">Delivery</a></li>
            <li><a href="log.php">Logout</a></li>
			
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">

<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("login",$cn);
$t=0;
$sql="select * from use1 where userid='$_GET[uid]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
echo "<center><table>";
echo "<tr>";
echo "<td>NAME</td>";
echo "<td>$row[2]</td>";
echo "</tr>";
echo "<tr>";
echo "<td>ADDRESS</td>";
echo "<td>$row[3]</td>";
echo "</tr>";
echo "<td>city</td>";
echo "<td>$row[4]</td>";
echo "</tr>";
echo "<td>MOB.NO.</td>";
echo "<td>$row[5]</td>";
echo "</tr>";
echo "</table></center>";
echo "<center><table border=2>";
echo "<tr>";
echo "<th>Order no.</th>";
echo "<th>Product name.</th>";
echo "<th>Quantity</th>";
echo "<th>Rate</th>";
echo "<th>Amount</th>";
echo "</tr>";
$sql="select count(*) from pordertra where ordno='$_GET[orn]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select * from pordertra where ordno='$_GET[orn]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "</tr>";
$t=$t+$row[4];
}
echo "<tr>";
echo "<td></td>";
echo "<td></td>";
echo "<td></td>";
echo "<td>Total</td>";
echo "<td>$t</td>";
echo "</tr>";
echo "</table></center>";
}
?>
</body>
</html>