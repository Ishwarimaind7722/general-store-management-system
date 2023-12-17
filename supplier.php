<?php
$cn=mysql_connect("localhost","root");

mysql_select_db("login",$cn);

$sql="insert into supplier values('$_POST[sp]','$_POST[sn]','$_POST[pn]','$_POST[add]','$_POST[ct]','$_POST[pn]','$_POST[em]','$_POST[pn]')";

mysql_query($sql,$cn);

echo "record is saved";

?>