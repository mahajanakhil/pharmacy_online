<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">

function check()
{
 if(document.getElementById("user").value=="")
  {
    window.alert("enter a Valid Phone Number");
return false;
  }
 if(isNaN(document.getElementById("user").value))
  {
    window.alert("enter a Valid Phone Number");
return false;
  }

 if(isNaN(document.getElementById("qty").value))
  {
    window.alert("enter a Valid Phone Number");
return false;
  }
 if(isNaN(document.getElementById("price").value))
  {
    window.alert("enter a Valid Phone Number");
return false;
  }

else if(document.getElementById("user").value.length<10 || document.getElementById("user").value.length>10)
  {
    window.alert("Only 10 digit Phone number");
return false;
  }
if(document.getElementById("pname").value=="")
  {
    window.alert("enter a Name");
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
else if(document.getElementById("price").value<0)
  {
    window.alert("Price cannot be negative");
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

<form name="form1" method="post" action="addcustomerbuy.php" onsubmit="return check(form1)">
<table border=0 align="center">
<br>
<br>
<tr>
		<td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>

<tr>
		<td>Phone num:</td>
		<td><input type="textbox" name="phnum" id="user" size=30></td>
	</tr>
<tr>
		<td>Product Name:</td>
		<td><input type="textbox" name="pname" id="pname" size=30></td>
	</tr>
<tr>
		<td>quanity:</td>
		<td><input type="textbox" name="qty" id="qty" size=30></td>
	</tr>	
	<tr>
		<td>Price:</td>
		<td><input type="textbox" name="price" id="price" size=30></textarea></td>
	</tr>
                <tr>
	<tr><tr>
		<td><input type="submit" name="Submit" onclick="check()" value="Submit"></td>
		<td><input type="reset" name="Reset" value="Reset"></td>
	</tr></tr>
</table>
</form>
<p align="center" class="style8">copyright: Akhil &amp; co. </p>

</body>
</html>
