<?php
$cn=mysql_connect("localhost","root");

mysql_select_db("login",$cn);

$sql="insert into purchaset values('$_POST[in]','$_POST[pn]','$_POST[qt]','$_POST[pc]','$_POST[am]','$_POST[tr]','$_POST[ds]','$_POST[va]','$_POST[na]','$_POST[tb]','$_POST[pd]')";

mysql_query($sql,$cn);

echo "record is saved";

?>