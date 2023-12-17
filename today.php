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
			<h1><a href="#">online General shop </a></h1>
			
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

<form name=frm method=post action=today.php>
<center><table>
<tr>
<td>date</td>
<td><input type=text name=dt value=<?php echo date('Y-m-d'); ?> ></td>
</tr>
</table>
<input type=submit name=sbm value=submit>
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
$sql="select distinct ordno from pordertra where status='N' and ordate='$_POST[dt]'";
$result=mysql_query($sql,$cn);
echo "<center><table border=1>";
echo  "<tr>";
echo "<td>ordno</td>";
echo "<td>name</td>";
echo "<td>addr</td>";
echo "<td>city</td>";
echo "<td>mobno</td>";
echo "</tr>";
while($row=mysql_fetch_array($result))
{
$sq1="select * from pordertra where status='N' and ordate='$_POST[dt]' and ordno=$row[0]";
$re1=mysql_query($sq1,$cn);
$ro1=mysql_fetch_array($re1);
$sq="select * from use1 where userid='$ro1[5]'";
$re=mysql_query($sq,$cn);
$ro=mysql_fetch_array($re);
echo "<tr>";
echo "<td><a href=http://localhost/bb/dispdata.php?orn=$row[0]&uid=$ro1[5]>$row[0]</a></td>";
echo "<td>$ro[2]</td>";
echo "<td>$ro[3]</td>";
echo "<td>$ro[4]</td>";
echo "<td>$ro[5]</td>";
echo "</tr>";
}
echo "</table></center>";
}
}
?>