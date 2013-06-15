
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
    window.alert("enter a Valid Phone Number not a character");
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


<form name="form1" method="POST" action="finalcustbill.php" onsubmit="return check(form1)">
<h2 align="center">&nbsp;</h2>
<h2 align="center">Please enter Customer phone Number</h2>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <input type="text"  id="user" name="phnum">
   </p>
  <p>   
    <input type="submit" name="submit" value="submit">
    </p>
</div>
</form>
<p align="center" class="style8">copyright: Akhil &amp; co. </p>

</body>
</html>
