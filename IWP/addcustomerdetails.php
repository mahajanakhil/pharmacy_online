<?php

session_start();
if($_SESSION['state']==1)
{
$name=$_POST['cname'];
$phnum=$_POST['phnum'];
$desc=$_POST['description'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);
$query="insert into customer(name,phonenum,description) values('$name','$phnum','$desc')";
mysql_query($query,$db)or die("customer Phone Numer already in use");

echo "data added successfully, redirecting in 5 seconds";
header('refresh:5; url=admin.html');
}
else
{echo "error";

}

?>
