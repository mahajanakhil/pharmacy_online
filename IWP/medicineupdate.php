<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">

function check()
{
 if(document.getElementById("name").value=="")
  {
    window.alert("enter a valid name");
return false;
  }
if(document.getElementById("com").value=="")
  {
    window.alert("enter a valid company name");
return false;
  }
if(document.getElementById("dop").value=="")
  {
    window.alert("enter a valid date of purchase");
return false;
  }
if (var date != new Date(document.getElementById("dop").value)) {
    window.alert("if you get here then you have a valid date       ");
return false;
}
if(document.getElementById("doe").value=="")
  {
    window.alert("enter a valid date of expiry");
return false;
  }
if(document.getElementById("price").value=="")
  {
    window.alert("enter Price");
return false;
  }
else if(document.getElementById("price").value<0 )
  {
    window.alert("Price cannot be negative");
return false;
  }
if(document.getElementById("minreq").value=="")
  {
    window.alert("enter minimum requirement");
return false;
  }
if(document.getElementById("qty").value=="")
  {
    window.alert("enter quantity");
return false;
  }
else if(document.getElementById("qty").value<0 )
  {
    window.alert("quantity cannot be negative");
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

<form name="form1" method="post" action="updatemedicineswrite.php" onSubmit="return check(form1)">
<table border=0 align="center">
<br>
<br>
<tr>
		<td>Name:</td>
		<td><input type="textbox" name="name" id="name" size=50></td>
	</tr>


	<tr>
		<td>Company:</td>
		<td><input type="textbox" name="company" id="com" size=50></td>
	</tr>

	<tr>
		<td>Date of Purchase:</td>
		<td><input type="text" name="dop" id="dop"></td>
	</tr>
<tr>
		<td>Date of Expiry:</td>
		<td><input type="text" name="doe" id="doe"></td>
	</tr>
       <tr>
		<td>Price:</td>
		<td><input type="textbox" name="price" id="price" size=50></td>
	</tr>
              <tr>
		<td>Quantity:</td>
		<td><input type="textbox" name="quantity" id="qty" size=50></textarea></td>
	</tr>
       
  <tr>
		<td>Rack Num:</td>
		<td><input type="textbox" name="racknum" id="rack" size=50></textarea></td>
	</tr>
       
<tr>
		<td>Minimum Req:</td>
		<td><input type="textbox" name="minreq" id="minreq" size=50></textarea></td>
	</tr>

		<td><p>&nbsp;
		  </p>
		  <p>
		    <input type="submit" name="Submit" value="Submit" onclick="check()">
          </p></td>
		<td><p>&nbsp;
		  </p>
		  <p>
		    <input type="reset" name="Reset" value="Reset">
          </p></td>
	</tr></tr>
</table>
</form>
<p align="center" class="style8">copyright: Akhil &amp; co. </p>

</body>
</html>
