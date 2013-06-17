<?php
session_start();
if($_SESSION['state']==1)
{
$months=$_POST['months'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);
$r=$months;
$t=date('Y-m-d');

$e=date('d-m-Y');
$purchase_date = "$e";
$purchase_date_timestamp = strtotime($purchase_date);
$purchase_date_3months = strtotime("+$r months", $purchase_date_timestamp);
echo "<h1 align='center'><font face='Monotype Corsiva'>Expiry</font></h1>";
echo "<h3><center><b>Today's Date(<i>".$e."</i>) +".$r." months = <i>".date("d-m-Y", $purchase_date_3months)."</i></b><br></center></h3>";
$u='2013-12-12';

$rr=date("Y-m-d", $purchase_date_3months);

$query1="select * from medicines where doe <='$rr' ";
$query=mysql_query($query1,$db)or die("cannot write");
$f=0;
$fet=mysql_fetch_array($query);
if($fet['name']=="")
echo "<font color='green'><h3 align='center'>Hurray!! No medicine comes under this expiry radar</h3></font>";
else
{
echo "<h4 align='center'>Medicines which come under this expiry radar are :</h4><br>";
echo "<html><body><table border=5 rules='rows' align='center' cellpadding='10'>";
echo"<tr bgcolor=#99CC66><th>S.No<th>Name<th>Company<th>Rack<th>Price<th>
Quantity<th>Purchase Date<th>Expiry</tr>";
$f=1;
$tot=0;
$query2=mysql_query($query1,$db)or die("cannot write");
while($info=mysql_fetch_array($query2))
{  
echo "<tr align='center'><td>";
Echo $f . "<td>";
Echo $info['name']."<td>";
Echo $info['company']."<td>";
Echo $info['rack']."<td>";
Echo $info['price']."<td>";
Echo $info['quantity']."<td>"; 
Echo $info['dop']."<td>";
Echo $info['doe']; 
$f++;
}
}
echo "</table></body></html>";
echo '<p align="center" class="style8">copyright: Akhil &amp; co. </p>
';
}
else
{echo "error";
}

?>