<?php
session_start();
if($_SESSION['state']==1)
{
$phnum=$_POST['phnum'];
$cname=$_POST['pname'];
$qty=$_POST['qty'];
$price=$_POST['price'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);

$query4="select * from customer where phonenum='$phnum'";
$result4=mysql_query($query4,$db)or die("cannot write");
$info1=mysql_fetch_array($result4);

$query5="select * from medicines where name='$cname'";
$result5=mysql_query($query5,$db)or die("cannot write");
$info2=mysql_fetch_array($result5);
//echo $info1['name'];
if($info1['name']!='' && $info2['name']!='' && $info2['quantity']>=$qty)
{
$query="insert into customerbuy(name,qty,price,phnum) values('$cname','$qty','$price','$phnum')";
mysql_query($query,$db)or die("cannot write");

$query2="select quantity from medicines where name='$cname'";
$result=mysql_query($query2,$db)or die("cannot write");
$info=mysql_fetch_array($result);
$f=$info['quantity']-$qty;
$query3="update medicines set quantity='$f' where name ='$cname'";
mysql_query($query3,$db)or die("cannot write");
//header('location:index.html');
echo "thankyou for the service !!!!";
echo "<html><body><a href='customerbuyform.php'>Click to buy more medicines<br>
<a href='admin.html' >Admin Page";

}
else
{
echo "invalid entry";
echo "<html><body><a href='customerbuyform.php'>Click to buy more medicines<br>
<a href='admin.html' >Admin Page";

}
if($info2['quantity']<$qty)
{
echo "<br>Medicine not is stock";
echo "<br>Available::  ".$info2['quantity'];
echo "<br>Required::  ".$qty;

echo "<html><body><a href='customerbuyform.php'>Click to buy more medicines<br>
<a href='admin.html' >Admin Page";
}
}
else
{
echo "error";
}


?>
