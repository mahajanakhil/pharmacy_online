<?php
session_start();
if($_SESSION['state']==1)
{

$phno=$_POST['phnum'];
$doc=$_POST['doc'];
//session_start();
$_SESSION['phn']=$phno;
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);

//echo $e;

$query2="select * from customer where phonenum='$phno'";
$result2=mysql_query($query2,$db)or die("cannot write");
while($info2=mysql_fetch_array($result2))
{  
$x=$info2['name'];
$y=$info2['description'];
}
if($x!='')
{
$query3="insert into billno(phonenum) values('$phno')";
$query=mysql_query($query3,$db)or die("cannot write");
$query31="select * from billno where phonenum='$phno' order by time";
$query21=mysql_query($query31,$db)or die("cannot write");
while($ress=mysql_fetch_array($query21))
{
$e=$ress['billnum'];
//echo $e."<br>";
}

$query2="select * from customer where phonenum='$phno'";
$result2=mysql_query($query2,$db)or die("cannot write");
echo "<h3 align='center'>Cash Memo</h3>";
echo"<h2 align='center'>Shyam Medical Store<br>149,Ratan lal nagar,Kanpur-22<br> Phone No.-9450906071</h2>";
echo "<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
DL No.-164/195 165/95&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bill no.".$e."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;Date ::".date('d-m-Y')."</h2><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
TIN No.-09737505128"; 
echo "<h4 align='center'";
while($info2=mysql_fetch_array($result2))
{  
Echo "<br><b><u>Name:::&nbsp;&nbsp;".$info2['name']."&nbsp;&nbsp;&nbsp;&nbsp;(".$info2['description'].")<br>";
Echo "Doctor:: &nbsp;&nbsp;".$doc."<br>";
Echo "</b></i></u><br>";
}
echo "Your bill is as follows ::::<br><br>";
$query1="select * from customerbuy where phnum='$phno' and status='Pending' order by time";
$query=mysql_query($query1,$db)or die("cannot write");
$f=0;
$s=1;
echo "<html><body><table border=2>";
echo"<tr><td><b><i>S. No.<td><b><i>Particulars<td><b><i>Quantity<td><b><i>Batch No.<td><b><i>Date of Expiry<td><b><i>Price</b></i>";
while($info=mysql_fetch_array($query))
{  
echo "<tr><td>";
Echo $s."<td>";
Echo $info['name']."<td>";
$x=$info['name'];
$query7=mysql_query("select * from medicines where name='$x'");
$info1=mysql_fetch_array($query7);

Echo $info['qty']."<td>";
//echo "coming soon<td>";
 Echo $info1['dop']."<td>"; 
 Echo $info1['doe']."<td>"; 
 Echo $info['price']."<td>"; 
 $f=$f+$info['qty']*$info['price'];
$s++;

$z=$info['name'];
$l=$info['qty'];
$c=$info1['dop'];
$v=$info1['doe'];
$b=$info['price'];
$billn;
$billn=100;

if($z!='')

{
$query11=mysql_query("insert into billinfo(name,quantity,batchno,doe,price,billid,doc) values('$z','$l','$c','$v','$b','$e','$doc')");
}
else
{
echo "all bills are paid!!!";
}
}

echo "</table>";
echo "<br><br>Total      Rs.  <b> <u>".$f."/-</b></i></u>";

echo "</table></body></html>";
echo "<br><br><br><br>(This is a computer generated invoice. Needs no signature.)";
echo "<br>Please Consult the Doctor before using the medicine.";
echo '<p align="center" class="style8"><br><br><br><br> </p>';
}
else
{
echo "wrong phone number";
echo "<html><body><br><a href='admin.html'>Admin Page";
}
}
else
{echo "error";
}

?>

