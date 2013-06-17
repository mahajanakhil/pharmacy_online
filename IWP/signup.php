<?php
session_start();
if($_SESSION['state']==1)
{
$submit=$_POST['Submit'];
echo "<h1 align='center'><font face='Monotype Corsiva'>".$submit."</font></h1>";
if($submit=='Submit')
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
if($minreq=='')
{
$query="insert into medicines(name,company,dop,doe,price,quantity,rack) values('$name','$company','$dop','$doe','$price','$quantity','$rknum')";
mysql_query($query,$db)or die("Medicine Already exist Update the information");
}
else
{
$query="insert into medicines(name,company,dop,doe,price,quantity,rack,min_req) values('$name','$company','$dop','$doe','$price','$quantity','$rknum','$minreq')";
mysql_query($query,$db)or die("Medicine Already exist Update the information");

}

echo "<center><h2><font face='Monotype Corsiva' color='red'>Medicine added successfully !!!!<br></font></h2><a href='medicineentry.php'><h2><font face='Monotype Corsiva' color='black'>Add another medicine</font></h2></a>";
}
if($submit=='Update')
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
if($info['name']!="")
{
$u=$info['company'];
$f=$info['dop'];
$g=$info['doe'];
$h=$info['price'];
$i=$info['quantity'];
$j=$info['rack'];
$k=$info['min_req'];
if($company!='')
{
$query="update medicines set company='$company' where name='$name'";
mysql_query($query,$db)or die("Error");
}

if($dop!='')
{
$query="update medicines set dop='$dop' where name='$name'";
mysql_query($query,$db)or die("Error");
}
if($doe!='')
{
$query="update medicines set doe='$doe' where name='$name'";
mysql_query($query,$db)or die("Error");
}
if($price!='')
{
$query="update medicines set price='$price' where name='$name'";
mysql_query($query,$db)or die("Error");
}
if($quantity!='')
{
$query="update medicines set quantity='$quantity' where name='$name'";
mysql_query($query,$db)or die("Error");
}
if($rknum!='')
{
$query="update medicines set rack='$rknum' where name='$name'";
mysql_query($query,$db)or die("Error");
}
if($minreq!='')
{
$query="update medicines set min_req='$minreq' where name='$name'";
mysql_query($query,$db)or die("Error");
}
echo "<center><h2><font face='Monotype Corsiva' color='red'>".$info['name']."&nbsp;&nbsp;Medicine updated successfully !!!!<br></font></h2><a href='medicineentry.php'><h2><font face='Monotype Corsiva' color='black'>Update another medicine</font></h2></a></center>";
}
else
echo "<h2 align='center'><font face='Monotype Corsiva' color='red'>Please submit this medicine first</font></h2>";
}

}
else
{
echo"error";
}

?>
