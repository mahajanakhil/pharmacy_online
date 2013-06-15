<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script type="text/javascript">

function check()
{
 if(document.getElementById("cname").value=="")
  {
    window.alert("enter a valid name");
return false;
  }
if(!isNaN(document.getElementById("cname").value))
  {
    window.alert(" name cannot be a number!!!!");
return false;
  }
  
if(document.getElementById("user").value=="")
  {
    window.alert("enter a Valid Phone Number");
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

<form name="form1" method="post" action="addcustomerdetails.php" onSubmit="return check(form1)">





<table border=0 align="center">


<tr>
		<td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
  <tr>

<tr>
		<td>Customer Name:</td>
		<td><input type="textbox" name="cname" id="cname" size=30></td>
	</tr>
<tr>
		<td>Phone num:</td>
		<td><input type="textbox" name="phnum" id="user" size=30></td>
	</tr>

	
	
	<tr>
		<td>Description:</td>
		<td><input type="text" name="description" ></textarea></td>
	</tr>
                <tr>
	<tr><tr>
		<td><input type="submit" name="Submit" value="Submit" onclick="check()"></td>
		<td><input type="reset" name="Reset" value="Reset"></td>
	</tr></tr>
</form>
<p align="center">copyright: Akhil &amp; co. </p>


</body>
</html>
