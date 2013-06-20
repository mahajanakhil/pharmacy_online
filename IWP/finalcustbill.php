<style type="text/css">
body,td,th {
	color: #000000;
}
.style2 {font-weight: bold; color: #000000;}
input {
background-color:#99CC66;height:20pt;border:1px solid black;border-radius:4pt;
}
input:focus{
background-color:white;
}
</style>
<script type="text/javascript">
function check()
{
x=confirm("Are you sure");
if(x==false)
return false;
}
</script>
<?php
session_start();
if($_SESSION['state']==1)
{
$phno=$_POST['phnum'];
//session_start();
global $x,$y;
$_SESSION['phn']=$phno;
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);

$query2="select * from customer where phonenum='$phno'";
$result2=mysql_query($query2,$db)or die("cannot write");
while($info2=mysql_fetch_array($result2))
{  
$x=$info2['name'];
$y=$info2['description'];
}
if($x!='')
{
echo"<h1 align='center'><font face='Monotype Corsiva'>Institute of Integrated Medicine<br>Talab Tillo</font></h1>";
echo "<h4 align='right'>".date('d-m-Y')."</h4>"; 
Echo "<h3 align='center'><b><u>Name&nbsp;&nbsp;-&nbsp;&nbsp;".$x."<br>";
Echo "Description&nbsp;&nbsp;-&nbsp;&nbsp;".$y."<br>";
Echo "</b></i></u></h3>";
$query1="select * from customerbuy where phnum='$phno' and status='Pending' order by time";
$query=mysql_query($query1,$db)or die("cannot write");
$f=0;
$inf=mysql_fetch_array($query);
if($inf['name']=="")
echo "<h2 align='center'><font face='Monotype Corsiva' color='green'>No current bills</font></h2>";
else
{
echo "<h4 align='center'>Your bill is as follows :<br><br>";
$query3=mysql_query($query1,$db)or die("cannot write");
echo "<html><body><table border=5 rules='rows' align='center' cellpadding='10'>";
echo"<tr bgcolor=#99CC66><th>Name<th>Quantity<th>Price<th>Time</tr>";
while($info=mysql_fetch_array($query3))
{  
echo "<tr align='center'><td>";
Echo $info['name']."<td>";
Echo $info['qty']."<td>";
 Echo $info['price']."<td>"; 
 Echo $info['time'];
$f=$f+$info['qty']*$info['price'];
}
//if($info['name']=="")
//echo "invalid entry";
echo "</table><br>";
echo "<table align='center'>";
echo "<tr>";
echo "<td><h3 align='center'><b><u>Final amount is&nbsp;</b></u><b><u>".$f."</b></u>&nbsp;&nbsp;";
echo "<td><form name='form2' method='POST' action='clearaccount.php' onsubmit='return check(form2)'>
<input type='submit' name='submit' value='Pay'>";
echo "</tr></table>";
echo "</form></body></html>";
}
}
else
{
echo "<center><h1><font face='Monotype Corsiva' color='red'>Invalid phone number</font></h1></center>";
}
}
else
{echo "error";
}
?>