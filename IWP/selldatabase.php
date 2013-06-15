<?php
session_start();
if($_SESSION['state']==1)
{
$cname=$_POST['var1'];
$qty=$_POST['var2'];
$price=$_POST['var3'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);

$query5="select * from medicines where name='$cname'";
$result5=mysql_query($query5,$db)or die("cannot write");
$info2=mysql_fetch_array($result5);

if($info2['name']!='' && $info2['quantity']>=$qty)
{
$query="insert into customerbuy(name,qty,price,status) values('$cname','$qty','$price','paid')";
mysql_query($query,$db)or die("cannot write");

$query2="select quantity from medicines where name='$cname'";
$result=mysql_query($query2,$db)or die("cannot write");
$info=mysql_fetch_array($result);
$f=$info['quantity']-$qty;
$query3="update medicines set quantity='$f' where name ='$cname'";
mysql_query($query3,$db)or die("cannot write");
echo "thankyou for the service !!!!";
echo "<html><body><a href='sell.php'>Click to buy more medicines<br>
<a href='admin.html' >Admin Page";

}
}
else
{
echo "Medicine Does not Exist";
echo "<html><body><a href='customerbuyform.php'>Click to buy more medicines<br>
<a href='admin.html' >Admin Page";
}

if($info2['quantity']<$qty)
{echo "<br>Medicine not is stock";
echo "<br>Available::  ".$info2['quantity'];
echo "<br>Required::  ".$qty;
echo "<html><body><a href='customerbuyform.php'>Click to buy more medicines<br>
<a href='admin.html' >Admin Page";
}
else
{echo"error";
}

?>