<?php
$cn=mysql_connect("localhost","root");

mysql_select_db("login",$cn);

$sql="insert into product values('$_POST[pn]','$_POST[dc]','$_POST[qty]','$_POST[mrp]','$_POST[price]','$_POST[qs]')";

mysql_query($sql,$cn);

echo "record is saved";

?>