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
			<h1><a href="#"> General shop</a></h1>
			
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="cash.php">Cash</a></li>
			<li><a href="confirmation.php">Confirmation</a></li>
			<li><a href="delivery.php">Delivery</a></li>
			<li><a href="torder.php">Order</a></li>
			<li><a href="product.php">Product</a></li>
			<li><a href="purchase.php">Purchase</a></li>
		</ul>
	</div>
	<!-- end #menu -->
<script language=javascript>
function show()
{
window.print();
}
</script>
<body>
<form name=delivery method=post action=deliverydisplay.php>
<center>
<input type=submit name=sbm value=display>
</center>
</form>
</body>
</html>

<?php
$cn=mysql_connect("localhost", "root");
mysql_Select_db("grocery",$cn);
if(isset($_POST['sbm']))
{
$sb=$_POST['sbm'];
if($sb=="display")
{
echo "<center><table border=2>";
echo "<tr>";
echo "<th>Delivery Number</th>";
echo "<th>Delivery Name</th>";
echo "<th>Delivery Date</th>";
echo "<th>Delivery Time</th>";
echo "<th>Remark</th>";
echo "<th>Order Date</th>";
echo "</tr>";
$sql="select * from delivery";
$result=mysql_query($sql, $cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
}
echo "</table>";
echo "<input type=button name=btn value=print onclick=show()>";
echo "</center>";
}
}
?>