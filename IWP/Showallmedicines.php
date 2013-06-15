<?php
session_start();
if($_SESSION['state']==1)
{

$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);

//echo "Your order to purchase  is as follows ::::<br><br>";
$query1="select * from medicines";
$query=mysql_query($query1,$db)or die("cannot write");
$f=0;
echo "<html><body><br><br><table border=5 rules='rows' align='center' cellpadding='10'>";
echo"<tr bgcolor=#99CC66><th>S.No<th>Name<th>Company<th>Rack<th>Price<th>
Quantity<th>Requirement<th>Purchase Date<th>Expiry</tr>";
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
 Echo $info['dop']."<td>";
 Echo $info['doe'];
$f++;
}


echo "</table></body></html>";
//echo"<br><br>Total balance is <b><i><u>".$tot;

echo '<p align="center" class="style8">copyright: Akhil &amp; co. </p>';
}
else
{
echo"error";
}
?>