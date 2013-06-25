<?php
session_start();
if($_SESSION['state']==1)
{
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);
echo "<h1 align='center'><font face='Monotype Corsiva'>Purchase Order</font></h1>";
echo "<h3 align='center'>Your order to purchase  is as follows :</h3><br><br>";
$query1="select * from medicines where quantity<=min_req";
$query=mysql_query($query1,$db)or die("cannot write");
$f=0;
echo "<html><body><table border=5 rules='rows' align='center' cellpadding='10'>";
echo"<tr bgcolor=#99CC66><th>S.no<th>Name<th>Company<th>Rack<th>Price<th>Quantity<th>Requirement<th>To Get<th>Price</tr>";
$f=1;
$tot=0;
while($info=mysql_fetch_array($query))
{  
echo "<tr align='center'><td>";
Echo $f . "<td>";
Echo $info['name']."<td>";
Echo $info['company']."<td>";
Echo $info['rack']."<td>";

Echo $info['price']."<td>";
 Echo $info['quantity']."<td>"; 
 Echo $info['min_req']."<td>";
 Echo $info['min_req']-$info['quantity']."<td>";
 Echo ($info['min_req']-$info['quantity'])*$info['price'];
$tot=$tot+($info['min_req']-$info['quantity'])*$info['price'];
$f++;
}
echo "</table></body></html>";
echo"<h3 align='center'>Total balance is&nbsp;&nbsp;".$tot."</h3>";
}
else
{
echo "error";
}
?>