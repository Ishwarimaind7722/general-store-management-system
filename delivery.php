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
			<h1><a href="#"> General shop </a></h1>
			
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
$e1="";
$e2="";
$e3="";
$e4="";
$e5="";
$e6="";
$fl=0;
if(isset($_POST['sbm']))
{
if(empty($_POST['t1']))
{
$e1="Delivery Number must be exist";
$fl=1;
}
if(empty($_POST['t2']))
{
$e2="Deivery Name must be exist";
$fl=1;
}
if(empty($_POST['t3']))
{
$e3="Delivery Date must be exist";
$fl=1;
}
if(empty($_POST['t4']))
{
$e4="Delivery Time must be exist";
$fl=1;
}
if(empty($_POST['t5']))
{
$e5="Reamark must be exist";
$fl=1;
}
if(empty($_POST['t6']))
{
$e6="Order Number must be exist";
$fl=1;
}
}
$dt=date('Y-m-d');
$cn=mysql_connect("localhost","root");
mysql_select_db("login",$cn);
$sql="select count(*) from delivery";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select max(dno) from delivery";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$dn=$row[0]+1;
}
else
$dn=1;
?>

<script language=javascript>
function valid1()
{
var x;
x=event.keyCode;
if(x>=48 && x<=57)
x=event.keyCode;
else
event.keyCode=0;
}
function valid2()
{
var x;
x=event.keyCode;
if((x>=65 && x<=90)||x==32)
x=event.keyCode;
else
event.keyCode=0;
}
</script>
</head>

<body>
<form name=delivery method=post action=delivery.php>
<center>
<table>
<caption>Delivery</caption>

<tr>
<td>Delivery Number</td>
<td><input type=text name=t1 onkeypress=valid1() value=<?php echo $dn;?>><?php echo $e1; ?></td>
</tr>

<tr>
<td>Delivery Name</td>
<td><input type=text name=t2 onkeypress=valid2()><?php echo $e2; ?></td>
</tr>

<tr>
<td>Delivery Date</td>
<td><input type=text name=t3 value=<?php echo $dt; ?>><?php echo $e3; ?></td>
</tr>
<tr>
<td>Delivery Time</td>
<td><input type=text name=t4><?php echo $e4; ?></td>
</tr>

<tr>
<td>Remark</td>
<td><input type=text name=t5 onkeypress=valid2()><?php echo $e5; ?></td>
</tr>

<tr>
<td>Order Number</td>
<td><select name=t6>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("login",$cn);
$sql="select * from confirmation where ordno not in(select ordno from delivery)";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo "<option value=$row[0]>$row[0]</option>";
}
?>
</select>
</td>
</tr>

</table>
<input type=submit name=sbm value=save>
<input type=submit name=sbm value=update>
<input type=submit name=sbm value=delete>
<input type=submit name=sbm value=search>
<input type=submit name=sbm value=display>

</center>
</form>
</body>
</html>


<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("login",$cn);
if(isset($_POST['sbm']))
{
$sb=$_POST['sbm'];
if($sb=="save")
{
$sql="insert into delivery values('$_POST[t1]', '$_POST[t2]' , '$_POST[t3]' , '$_POST[t4]' , '$_POST[t5]' , '$_POST[t6]' )";
mysql_query($sql,$cn);
echo "record saved";
}
else
if($sb=="update")
{
$sql="update delivery set dname='$_POST[t2]', ddate='$_POST[t3]' , dtime='$_POST[t4]' , remark='$_POST[t5]' , ordno='$_POST[t6]'  where dno='$_POST[t1]'";
mysql_query($sql,$cn);
echo "record update";
}
else
if($sb=="delete")
{
$sql="delete from delivery where dno='$_POST[t1]'";
mysql_query($sql,$cn);
echo "record deleted";
}
else
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
echo "</table></center>";
}
if($sb=="search")
{
echo "<center><table border=2>";
echo "<tr>";
echo "<th>Delivery Number</th>";
echo "<th>Delivery Name</th>";
echo "<th>Delivery Date</th>";
echo "<th>Delivery Time</th>";
echo "<th>Remark</th>";
echo "<th>Order Number</th>";
echo "</tr>";
$sql="select * from delivery where dno='$_POST[t1]'";
$result=mysql_query($sql, $cn);
while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
}
echo "</table></center>";
}
}
?>