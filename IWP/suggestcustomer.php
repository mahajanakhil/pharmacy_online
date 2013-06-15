<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style><?php
// Fill up array with names

$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db)or die("cannot connect");;

	
	
if (!$db)
  {
  die('Could not connect: ' . mysql_error());
  }
	
$query = "SELECT * from medicines";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
$a[] = $row['name'];
}

//get the q parameter from URL
$q=$_GET["q"];

//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
     // if ($hint=="")
       // {
//        $hint=$a[$i];
  $hint=$a[$i];
//}        
      }


$query7=mysql_query("Select * from medicines where name='$hint' or company='$hint' or dop='$hint' or doe='$hint' or price='$hint' or quantity='$hint' or rack='$hint'")or die("cannot get");
while($info1=mysql_fetch_array($query7))
{
echo "<br>";
echo $info1['name']."    ";

echo $info1['company']."  ";

echo $info1['dop']."  ";
echo $info1['doe']."  ";
echo $info1['price']." ";
echo $info1['quantity']."  ";
echo $info1['rack']."  ";
      }


      }
    }
  
if ($hint == "")
  {
  $response="no suggestion";
  }
?>
