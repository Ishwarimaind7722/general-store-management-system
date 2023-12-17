<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("login",$cn);
if($_POST['sbm']=="submit")
{
$sql="insert into cash values('$_POST[vc]','$_POST[vd]','$_POST[sp]','$_POST[amt]','$_POST[pm]','$_POST[cn]','$_POST[cd]','$_POST[bank]')";
mysql_query($sql,$cn);
echo "record is seved";
}
else
if($_POST['sbm']=="update")
{
$sql="update cash set vouchno ='$_POST[vc]',vouchdate='$_POST[vd]',supid='$_POST[sp]',amt='$_POST[amt]',pmode='$_POST[pm]',chno='$_POST[cn]',chdate='$_POST[cd]',bank='$_POST[bank]' where vouchno ='$_POST[vc]'";
mysql_query($sql,$cn);
echo "record is updated";
}
else
if($_POST['sbm']=="delete")
{
$sql="delete from cash where vouchno ='$_POST[vc]'";
mysql_query($sql,$cn);
echo "record is deleted";
}
else
if($_POST['sbm']=="display")
{
$sql="select * from cash";
$result=mysql_query($sql,$cn);
echo "<center><table border=2>";
echo "<tr>";
echo "<th>vouchno</th>";
echo "<th>vouchdate</th>";
echo "<th>supid</th>";
echo "<th>amt</th>";
echo "<th>pmode</th>";
echo "<th>chno</th>";
echo "<th>chdate</th>";
echo "<th>bank</th>";
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
echo "<td>$row[6]</td>";
echo "<td>$row[7]</td>";
echo "</tr>";
}
echo "</table></center>";
}


?>