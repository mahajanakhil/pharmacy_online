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
echo "<h1 align='center'><font face='Monotype Corsiva'>Thankyou for the service !!</font></h1>";
echo "<a href='sell.php'><h2 align='center'><font face='Monotype Corsiva' color='red'>Sell another medicine</font></h2>";
}
else if($info2['name']!=''&& $info2['quantity']<=$qty)
{
echo "<h1 align='center'><font face='Monotype Corsiva'>Medicine not is stock</font></h1>";
echo "<h2 align='center'><font face='Monotype Corsiva' color='red'>Available:".$info2['quantity']."</font></h2>";
echo "<h2 align='center'><font face='Monotype Corsiva' color='red'>Required:".$qty."</font></h2>";
echo "<table align='center' cellpadding=10><tr><td><a href='sell.php'><h2 align='center'><font face='Monotype Corsiva'>Sell another medicine</font></h2></td><td><a href='medicineentry.php'><h2 align='center'><font face='Monotype Corsiva'>Place Requirement</font></h2></td>";
}
else
{
echo "<h1 align='center'><font face='Monotype Corsiva' color='red'>Medicine Does not Exist</font></h1>";
echo "<center><h2 align='center'><font face='Monotype Corsiva' color='red'><a href='sell.php'>Sell another medicine</font></h2></center>";
}
}
else
{echo"error";
}

?>