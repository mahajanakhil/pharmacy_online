<?php
session_start();
if($_SESSION['state']==1)
{
$r=$_POST['days'];
$e=date('d-m-Y');
$purchase_date = "$e";
$purchase_date_timestamp = strtotime($purchase_date);
$purchase_date_3months = strtotime("-$r days", $purchase_date_timestamp);
echo "<h1 align='center'><font face='Monotype Corsiva'>Profit</font></h1>";
echo "<h3><center><b>Today's Date(<i>".$e."</i>) -&nbsp;".$r." days = <i>".date("d-m-Y", $purchase_date_3months)."</i></b><br></center></h3>";
$a=date("Y-m-d", $purchase_date_3months);
$f=1;
echo "<html><body><table border=5 rules='rows' align='center' cellpadding='10'>";
echo"<tr bgcolor=#99CC66><th>S.no<th>Name<th>Qty Sold<th>Buy Cost<th>Sell cost<th>Profit per medicine</tr>";

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
$t=$info1['name'];
$query2=mysql_query("Select * from customerbuy where name='$t' and time>='$a'")or die("not executed");
while($info2=mysql_fetch_array($query2))
{
$r5=$info2['name'];
$counter=$counter+$info2['qty'];
$scpm=$scpm+$info2['price']*$info2['qty'];
}
$bcpm=$info1['price']*$counter;
$profit=$scpm-$bcpm;
$ovrpro=$profit+$ovrpro;
if($profit<0)
echo "<tr align='center' style='color:red;'><td>";
else
echo "<tr align='center' style='color:green;'><td>";
Echo $f . "<td>";
Echo $info1['name']."<td>";
Echo $counter."<td>";
Echo $bcpm."<td>";
Echo $scpm."<td>";
Echo $profit; 
 $f++;
}
echo "</table></body></html>";
if($ovrpro<0)
echo"<h3 align='center'>Total balance is&nbsp;&nbsp;<font color='red'>".$ovrpro."</font></h3>";
else
echo"<h3 align='center'>Total balance is&nbsp;&nbsp;<font color='green'>".$ovrpro."</font></h3>";
}
else
{echo "error";
}

?>