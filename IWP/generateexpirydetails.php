<?php
session_start();
if($_SESSION['state']==1)
{
$months=$_POST['months'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);
$r=$months;
$t=date('Y-m-d');

$e=date('Y-m-d');
echo "Today is <b><u>".$e."</b></u><br>";
$purchase_date = "$e";
$purchase_date_timestamp = strtotime($purchase_date);
$purchase_date_3months = strtotime("+$r months", $purchase_date_timestamp);

echo "<b>Purchase date +".$r." months = <i><u>".date("Y-m-d", $purchase_date_3months)."</i></u></b><br>";
$u='2013-12-12';

$rr=date("Y-m-d", $purchase_date_3months);



echo "Your medicine that come under expiry radar are as follows ::::<br><br>";
$query1="select * from medicines where doe <='$rr' ";
$query=mysql_query($query1,$db)or die("cannot write");
$f=0;
echo "<html><body><table border=5>";
echo"<tr><td><b><i>S.no<b><i><td>Name<td><b><i>Company<td><b><i>Rack<td><b><i>Price<td><b><i>
Quantity<td><b><i>Purchase<td><b><i>Expiry";
$f=1;
$tot=0;
while($info=mysql_fetch_array($query))
{  
echo "<tr><td>";
Echo $f . "<td>";
Echo $info['name']."<td>";
Echo $info['company']."<td>";
Echo $info['rack']."<td>";
Echo $info['price']."<td>";
 Echo $info['quantity']."<td>"; 
// Echo $info['min_req']."<td>";
Echo $info['dop']."<td>";
Echo $info['doe']."<td>"; 
//Echo $info['min_req']-$info['quantity']."<td>";
 //Echo ($info['min_req']-$info['quantity'])*$info['price']."<td>";
//$tot=$tot+($info['min_req']-$info['quantity'])*$info['price'];
$f++;
}


echo "</table></body></html>";
//echo"<br><br>Total balance is <b><i><u>".$tot;
echo '<p align="center" class="style8">copyright: Akhil &amp; co. </p>
';
}
else
{echo "error";
}

?>