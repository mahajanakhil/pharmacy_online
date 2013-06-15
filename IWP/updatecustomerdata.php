<?php
session_start();
if($_SESSION['state']==1)
{


$name=$_POST['cname'];
$phnum=$_POST['phnum'];
$desc=$_POST['description'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);


$query2="select * from customer where name='$name'";
$result=mysql_query($query2,$db)or die("cannot write");
$info=mysql_fetch_array($result);
$f=$info['description'];
$g=$info['phonenum'];
if($g!=$phnum && $phnum!='')
{
$query="update customer set phonenum='$phnum' where name='$name'";
mysql_query($query,$db)or die("customer Phone Numer already in use");
}
if($f!=$desc && $desc!='')
{
$query="update customer set description='$desc' where name='$name' and phonenum='$phnum'";
mysql_query($query,$db)or die("customer Phone Numer already in use");

}
header('location:admin.html');
}
else
{echo"error";
}

?>
