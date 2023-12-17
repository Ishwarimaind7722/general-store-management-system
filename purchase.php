<?php
$cn=mysql_connect("localhost","root");

mysql_select_db("login",$cn);

$sql="insert into purchase values('$_POST[in]','$_POST[id]','$_POST[on]','$_POST[ga]','$_POST[dc]','$_POST[tb]','$_POST[va]','$_POST[ro]','$_POST[na]','$_POST[sp]','$_POST[cc]','$_POST[cn]','$_POST[cd]','$_POST[bn]')";

mysql_query($sql,$cn);

echo "record is saved";

?>