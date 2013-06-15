<?php
//session_start();
$usr=$_POST['username'];
$pass=$_POST['password'];
$utype=$_POST['usertype'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);
$query="select name,usertype from user where username='$usr' and password='$pass'";
$result=mysql_query($query,$db)or die("cannot get");
$e=mysql_fetch_array($result);
$j=$e['usertype'];
if($utype=="admin")
{
if($j==$utype)
{
session_start();
$_SESSION['state']=1;
$_SESSION['usertype1']=$utype;
header("location:admin.html");
}
else
{
//$_session['state']=2;
include ('loginform.php'); 
//header("location:loginform.php");
echo "<html><h5 ><font . color='red'><h5 align='center'><blink>Wrong login details !!!";
}
}
else if($utype=="cashier")
{
if($j==$utype)
{
session_start();
$_SESSION['state']=1;
$_SESSION['usertype1']=$utype;
header("location:cashier.html");
}
else
{
//$_session['state']=2;
include ('loginform.php'); 
//header("location:loginform.php");
echo "<html><h5 ><font . color='red'><h5 align='center'><blink>Wrong login details !!!";
}
}
?>
