<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
-->
</style><?php
session_start();
if($_SESSION['state']==1)
{


$r=$_POST['days'];
$e=date('Y-m-d H:i:s');
echo $e."<br>";
$purchase_date = "$e";
$purchase_date_timestamp = strtotime($purchase_date);
$purchase_date_3months = strtotime("-$r days", $purchase_date_timestamp);

echo "Purchase date -".$r."months = ".date("Y-m-d", $purchase_date_3months);
$a=date("Y-m-d", $purchase_date_3months);
echo "<br>".$a;
$f=1;
echo "<html><body><table border=5>";
echo"<tr><td><b><i>S.no<td><b><i>Name<td><b><i>Qty Sold<td><b><i>
Buy Cost<td><b><i>Sell cost<td><b><i>
Profit per medicine";

$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);
$ovrpro=0;
$query1=mysql_query("Select * from medicines")or die("not executed");
while($info1=mysql_fetch_array($query1))
{ 
$counter=0;
$scpm=0; //sell cost per medicine
$bcpm=0;	//buy cost per medicine
$profit=0;
//echo "<br>".$info1['name'];
$t=$info1['name'];

//echo "<br>main  ".$info1['name'];
$t=$info1['name'];
$query2=mysql_query("Select * from customerbuy where name='$t' and time>=$r")or die("not executed");
while($info2=mysql_fetch_array($query2))
{
$r5=$info2['name'];
$counter=$counter+$info2['qty'];
$scpm=$scpm+$info2['price']*$info2['qty'];
//echo "  secondary  ".$info2['name'];
}
$bcpm=$info1['price']*$counter;
$profit=$scpm-$bcpm;
$ovrpro=$profit+$ovrpro;

//$tot=0;
echo "<tr><td>";
Echo $f . "<td>";
//Echo $r5. "<td>";
Echo $info1['name']."<td>";
Echo $counter."<td>";
Echo $bcpm."<td>";
Echo $scpm."<td>";
Echo $profit."<td>"; 
 $f++;
}
echo "</table></body></html>";
echo"<br><br>Total balance is <b><i><u>".$ovrpro;
//echo "<br>counter osv  ".$counter;
echo '<p align="center" class="style8"> </p>';
}
else
{echo "error";
}

?>