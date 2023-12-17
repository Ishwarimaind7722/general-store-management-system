<?php
session_start();
$prn=$_GET['prn'];
$porn=$_GET['porn'];
$cn=mysql_connect("localhost","root");
mysql_select_db("login",$cn);
echo $prn;
echo $porn;
$sql="delete from pordertra where ordno='$_GET[porn]' and prno='$_GET[prn]'";
mysql_query($sql,$cn);
//header("location:http://localhost/bb/pordertra.php");
?>