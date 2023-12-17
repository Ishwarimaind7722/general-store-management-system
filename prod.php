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
<form name=frm method=post action="prod.php">
<center>
<table>
<tr>
<td>prno</td>
<td><input type=text name=pn></td>
</tr>
<tr>
<td>discription</td>
<td><input type=text name=dc></td>
</tr>
<tr>
<td>qty</td>
<td><input type=int name=qty></td>
</tr>
<tr>
<td>mrp</td>
<td><input type=int name=mrp></td>
</tr>
<tr>
<td>price</td>
<td><input type=int name=price></td>
</tr>
<tr>
<td>qtystock</td>
<td><input type=int name=qs></td>
</tr>
</table>
<input type=submit name=sbm value=submit>

<input type=submit name=sbm value=update>

<input type=submit name=sbm value=delete>

<input type=submit name=sbm value=display>

<input type=reset name=rst value=reset>
</center>
</form>
</body>
</html>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("login",$cn);
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
$sql="insert into product values('$_POST[pn]','$_POST[dc]','$_POST[qty]','$_POST[mrp]','$_POST[price]','$_POST[qs]')";

mysql_query($sql,$cn);

echo "record is saved";
}
else
if($_POST['sbm']=="update")
{
$sql="update product set prno='$_POST[pn]',discription='$_POST[dc]',qty='$_POST[qty]',mrp='$_POST[mrp]',price='$_POST[price]',qtystock='$_POST[qs]' where prno='$_POST[pn]'";
mysql_query($sql,$cn);
echo "record is updated";
}
else
if($_POST['sbm']=="delete")
{
$sql="delete from product where prno='$_POST[pn]'";
mysql_query($sql,$cn);
echo "record is deleted";
}
else
if($_POST['sbm']=="display")
{
$sql="select * from product";
$result=mysql_query($sql,$cn);
echo"<center><table border=2>";
echo "<tr>";
echo "<th>prno</th>";
echo "<th>discription</th>";
echo "<th>qty</th>";
echo "<th>mrp</th>";
echo "<th>price</th>";
echo "<th>qtystock</th>";
echo "</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>