<?php
session_start();
if($_SESSION['state']==1)
{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">

function check()
{
 if(document.getElementById("var1").value=="")
  {
    window.alert("enter a Valid name");
return false;
  }
if(!isNaN(document.getElementById("var1").value))
  {
    window.alert("enter a Valid name");
return false;
  }
if(document.getElementById("qty").value=="")
  {
    window.alert("enter a qty");
return false;
  }
else if(document.getElementById("qty").value<1)
  {
    window.alert("Quantity cannot be negative or 0");
return false;
  }
if(document.getElementById("price").value=="")
  {
    window.alert("enter a valid price");
return false;
  }
else if(document.getElementById("price").value<1)
  {
    window.alert("Price cannot be negative");
return false;
  }
if(isNaN(document.getElementById("price").value))
  {
    window.alert("Enter a Valid price");
return false;
  }



}

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
body,td,th {
	color: #000000;
}
-->
</style></head>
<body>
<tr>
    <td width="377" height="30">&nbsp;   </td>
<td width="430"><!--label>search-->  
          <?php include("try.php"); ?>   
  <!--input name="search2" type="text" id="search2" size="40" /-->&nbsp;&nbsp;
        <!--input type="submit" name="go" id="go" value="go" />
    </label--></td>
    <td width="125" valign="top" align="right">


<form name="form1" method="POST" action="selldatabase.php" onsubmit="return check(form1)">
  <div align="center">
    <p><span class="style2">Normal Selling</span><br>
    </p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p align="center">Name ::
      <input type="text" name="var1" id= "var1">
      <br>
      qty ::
      <input type="text" name="var2" id= "qty" >
      <br>
      price ::
      <input type="text" name="var3" id= "price">
      <br>
      <input type="submit" name= "submit" onclick="check()" value="submit">
    </p>
    </div>
</form>
<p align="center" class="style8">copyright: Akhil &amp; co. </p>

</body>
</html>
<?php
}
else
{
echo "error";

}
?>