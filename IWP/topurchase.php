<?php
session_start();
if($_SESSION['state']==1)
{
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);

echo "Your order to purchase  is as follows ::::<br><br>";
$query1="select * from medicines where quantity<=min_req";
$query=mysql_query($query1,$db)or die("cannot write");
$f=0;
echo "<html><body><table border=5 text='black'>";
echo"<tr><td><b><i>S.no<b><i><td>Name<td><b><i>Company<td><b><i>Rack<td><b><i>Price<td><b><i>
Quantity<td><b><i>Requirement<td><b><i>To Get<td><b><i>Price</b></i>";
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
 Echo $info['min_req']."<td>";
 Echo $info['min_req']-$info['quantity']."<td>";
 Echo ($info['min_req']-$info['quantity'])*$info['price']."<td>";
$tot=$tot+($info['min_req']-$info['quantity'])*$info['price'];
$f++;
}


echo "</table></body></html>";
echo"<br><br>Total balance is <b><i><u>".$tot;

echo '<br><br><br><br><br><span class="style8">copyright: Akhil &amp; co.</span> </p>';
}
else
{
echo "error";
}
?>