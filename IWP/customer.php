<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script type="text/javascript">

function check()
{
 if(document.getElementById("cname").value=="")
  {
    window.alert("Enter a valid name");
return false;
  }
if(!isNaN(document.getElementById("cname").value))
  {
    window.alert("Name cannot be a number!!!!");
return false;
  }
  
if(document.getElementById("user").value=="")
  {
    window.alert("Enter a Valid Phone Number");
return false;
  }
if(isNaN(document.getElementById("user").value))
  {
    window.alert("Enter a Valid Phone Number!!!!");
return false;
  }
else if(document.getElementById("user").value.length<10 || document.getElementById("user").value.length>10)
  {
    window.alert("Only 10 digit Phone number");
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
<h1 align="center" class="style2"><font face="Monotype Corsiva">Customer Entry</font></h1>
<tr>
    <td width="377" height="30">&nbsp;   </td>
<td width="430"><!--label>search-->  
          <?php include("try.php"); ?>   
  <!--input name="search2" type="text" id="search2" size="40" /-->&nbsp;&nbsp;
        <!--input type="submit" name="go" id="go" value="go" />
    </label--></td>
    <td width="125" valign="top" align="right">

<form name="form1" method="post" action="addcustomerdetails.php" onSubmit="return check(form1)">
<table rules="cols" border="2px" style="border-color:#000000;" cellpadding="5px" align="center">
<tr>
		<td>Customer Name:</td>
		<td><input type="text" name="cname" id="cname" size=50></td>
	</tr>
<tr>
		<td>Phone num:</td>
		<td><input type="text" name="phnum" id="user" size=50></td>
	</tr>
	<tr>
		<td>Description:</td>
		<td><input type="text" name="description" size=50></td>
	</tr>
    <tr><td></td>
		<td align="right"><input type="submit" name="Submit" value="Submit">
		<input type="reset" name="Reset" value="Reset"></td>
	</tr></tr></table>
</form>
<p align="center">copyright: Akhil &amp; co. </p>


</body>
</html>
