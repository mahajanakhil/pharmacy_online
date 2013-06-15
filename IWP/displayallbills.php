<?php
session_start();
if($_SESSION['state']==1)
{
$phno=$_POST['phnum'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);
$f=0;
$query2="select * from customer where phonenum='$phno'";
$result2=mysql_query($query2,$db)or die("cannot write");
while($info2=mysql_fetch_array($result2))
{  
$x=$info2['name'];
$y=$info2['description'];
}
if($x!='')
{
$query2="select * from billno where phonenum='$phno' order by time";
$result2=mysql_query($query2,$db)or die("cannot");
echo"<h2 align='center'>Shyam Medical Store<br>1278,Ratan lal nagar,Kanpur-22</h2>";
echo "<h2 align='right'>".date('d-m-Y')."</h2>"; 
echo "<h4 align='center'";
echo "<html><body><table border=2>";
echo"<tr><td><b><i>S. no.<td><b><i>Bill num<td><b><i>Name<td><b><i>
Quantity<td><b><i>Batch no<td><b><i>Expiry Date<td><b><i>Price<td><b><i>Doctor</b></i>";
$s=1;

while($info2=mysql_fetch_array($result2))
{  
$ww=$info2['billnum'];
//echo "Your bill is as follows ::::<br><br>";
$query1="select * from billinfo where billid='$ww'";
$query10=mysql_query($query1,$db)or die("cannot write");
while($info=mysql_fetch_array($query10))
{  
echo "<tr><td>";
Echo $s."<td>";
Echo $ww."<td>";

Echo $info['name']."<td>";
Echo $info['quantity']."<td>";
Echo $info['batchno']."<td>";
 Echo $info['doe']."<td>";

Echo $info['price']."<td>"; 
 Echo $info['doc']."<td>";
$f=$f+$info['quantity']*$info['price'];
$s++;
}
}
echo "</table>";
echo "<b><i><u><br><br>Final bill is       <b> <u>".$f;

echo "</table></body></html>";
echo '<p align="center" class="style8"><br><br><br><br><br><br><br><br><br><br><br>copyright: Akhil &amp; co. </p>';
}
else
{
echo "wrong details";
echo "<html><body><br><a href='admin.html'>Admin Page";

}
}
else
{echo"error";
}


?>