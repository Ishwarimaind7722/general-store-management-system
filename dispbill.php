<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body  style="background-color:#FFCC99">
<div id="wrapper">
	<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">Anther   </a></h1>
			<p> design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></p>
		</div>
	</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index1.html">Logout</a></li>
			<li><a href="use.php">Customer</a></li>
			<li><a href="log.php">Login</a></li>
			<li><a href="pordertratemp1.php">Order</a></li>
			<li><a href="bill.php">Bill </a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
	</div>
	<!-- end #menu -->
<form name=frm method=post action=dispbill.php>
<center><table>
<tr>
<td>billno</td>
<td><select name=bno>
<?php
session_start();
$cn=mysql_connect("localhost","root");
mysql_select_db("login",$cn);
$sql="select distinct ordno from pordertra where userid='$_SESSION[ui]'";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<option value=$row[0]>$row[0]</option>";
}
?>
</select>
</td>
<tr>
</table>
<input type=submit name=sbm value=submit>
</center>
</form>
</body>
</html>
<?php
if(isset($_POST['sbm']))
{
if($_POST['sbm']=="submit")
{
$cn=mysql_connect("localhost","root");
mysql_select_db("login",$cn);
$t=0;
$sql="select * from use1 where userid='$_SESSION[ui]'";
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

$sql="select count(*) from pordertra where ordno='$_POST[bno]'";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select * from pordertra where ordno='$_POST[bno]'";
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
}
}
?>