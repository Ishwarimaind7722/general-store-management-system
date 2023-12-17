<?php
$cn=mysql_connect("localhost","root");

mysql_select_db("login",$cn);

$sql="insert into cash values('$_POST[vc]','$_POST[vd]','$_POST[sp]','$_POST[amt]','$_POST[pm]','$_POST[cn]','$_POST[cd]','$_POST[bank]')";

mysql_query($sql,$cn);

echo "record is stored";

?>