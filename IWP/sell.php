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
    window.alert("Enter a Valid name");
return false;
  }
if(!isNaN(document.getElementById("var1").value))
  {
    window.alert("Enter a Valid name");
return false;
  }
if(document.getElementById("qty").value=="")
  {
    window.alert("Enter a qty");
return false;
  }
else if(document.getElementById("qty").value<1)
  {
    window.alert("Quantity cannot be negative or 0");
return false;
  }
if(document.getElementById("price").value=="")
  {
    window.alert("Enter a valid price");
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
</style></head>
<body>
<h1 align="center"><font face="Monotype Corsiva">Sell on Cash</font></h1>
<tr>
    <td width="377" height="30">&nbsp;   </td>
<td width="430"><!--label>search-->  
          <?php include("try.php"); ?>   
  <!--input name="search2" type="text" id="search2" size="40" /-->
        <!--input type="submit" name="go" id="go" value="go" />
    </label--></td>
<form name="form1" method="POST" action="selldatabase.php" onsubmit="return check(form1)">
<table rules="cols" border="2px" style="border-color:#000000;" cellpadding="5px" align="center">
	<tr>
    <td>Name</td>
      <td><input type="text" name="var1" id= "var1" size=30></td>
	  </tr>
     <tr>
	 <td>Quantity</td>
      <td><input type="text" name="var2" id= "qty" size=30></td>
	  </tr>
     <tr>
      <td>Price</td>
      <td><input type="text" name="var3" id= "price" size=30></td>
      </tr>
	  <tr><td></td>
      <td align="right"><input type="submit" name= "submit" value="submit"><input type="reset" name="Reset" value="Reset"></td></tr></table>
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