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
$query1= "SELECT * from customer";
$result1 = mysql_query($query1);
while($row1= mysql_fetch_array($result1))
{
$a[]= $row1['name'];
$a[]= $row1['phonenum'];
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
$query6=mysql_query("Select * from customer where name='$hint' or phonenum='$hint' or description='$hint'")or die("cannot get");
while($info=mysql_fetch_array($query6))
{echo "<br>";
echo $info['name']."  ";

echo $info['phonenum']."  ";

echo $info['description']."  ";

//}        
      }


$query7=mysql_query("Select * from medicines where name='$hint' or company='$hint' or dop='$hint' or doe='$hint' or price='$hint' or quantity='$hint' or rack='$hint'")or die("cannot get");
while($info1=mysql_fetch_array($query7))
{echo "<br>";
echo $info1['name']."    ";

echo $info1['company']."  ";

echo $info1['dop']."  ";
echo $info1['doe']."  ";
echo $info1['price']." ";
echo $info1['quantity']."  ";
echo $info1['rack']."  ";

//}        
      }


   //   else
     //   {
        //$hint=$hint." , ".$a[$i];
//$hint=$a[$i];
//$query6=mysql_query("Select * from customer where name='$hint' or phonenum='$hint' or description='$hint'")or die("cannot get");
//while($info=mysql_fetch_array($query6))
//{
//echo $info['name']."<br>";

//echo $info['phonenum']."<br>";

//echo $info['description']."<br>";

//}        

//}
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="no suggestion";
  }
//else
  //{
  //$response=$hint;
  //}

//output the response
//echo $response;
?>
