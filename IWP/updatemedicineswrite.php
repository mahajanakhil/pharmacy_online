<?php

session_start();
if($_SESSION['state']==1)
{

$name=$_POST['name'];
$company=$_POST['company'];
$dop=$_POST['dop'];
$doe=$_POST['doe'];
$rknum=$_POST['racknum'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$minreq=$_POST['minreq'];

$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);


$query2="select * from medicines where name='$name'";
$result=mysql_query($query2,$db)or die("cannot write");
$info=mysql_fetch_array($result);
$u=$info['company'];
$f=$info['dop'];
$g=$info['doe'];
$h=$info['price'];
$i=$info['quantity'];
$j=$info['rack'];
$k=$info['min_req'];
if($u!=$company && $company!='')
{
$query="update medicines set company='$company' where name='$name'";
mysql_query($query,$db)or die("Error");
}

if($f!=$dop && $dop!='')
{
$query="update medicines set dop='$dop' where name='$name'";
mysql_query($query,$db)or die("Error");
}
if($g!=$doe && $doe!='')
{
$query="update medicines set doe='$doe' where name='$name'";
mysql_query($query,$db)or die("Error");
}
if($h!=$price && $price!='')
{
$query="update medicines set price='$price' where name='$name'";
mysql_query($query,$db)or die("Error");
}
if($i!=$quantity && $quantity!='')
{
$query="update medicines set quantity='$quantity' where name='$name'";
mysql_query($query,$db)or die("Error");
}
if($j!=$rknum && $rknum!='')
{
$query="update medicines set rack='$rknum' where name='$name'";
mysql_query($query,$db)or die("Error");
}
if($k!=$minreq && $minreq!='')
{
$query="update medicines set min_req='$minreq' where name='$name'";
mysql_query($query,$db)or die("Error");
}



echo "Entry added Successfully";

header('refresh:5; url=admin.html');
}
else
{echo"error";
}

?>
