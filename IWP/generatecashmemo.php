<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">

function check()
{
 if(document.getElementById("user").value=="" || isNaN(document.getElementById("user").value))
  {
    window.alert("Enter a Valid Phone Number");
return false;
  }

else if(document.getElementById("user").value.length<10 || document.getElementById("user").value.length>10)
  {
    window.alert("Only 10 digit Phone number");
return false;
  }
if(document.getElementById("doc").value=="")
  {
    window.alert("Enter a doctor name");
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
<tr>
    <td width="377" height="30">&nbsp;   </td>
<td width="430"><!--label>search-->  
          <?php include("try.php"); ?>   
  <!--input name="search2" type="text" id="search2" size="40" /-->&nbsp;&nbsp;
        <!--input type="submit" name="go" id="go" value="go" />
    </label--></td></tr>


<form name="form1" method="POST" action="cashmemodisplay.php" onsubmit="return check()">
<h1 align="center"><font face="Monotype Corsiva">Enter Customer Phone Number</font></h1>
<table align="center" border=2 rules="cols" cellpadding=5><tr>
  <td>
  Customer Phone number:<td>  <input type="text" id="user" name="phnum"></tr>
<tr><td>
   Doctor's name <td><input type="text" id="doc" name="doc"></tr>
<tr align="right"> <td></td><td>
    <input type="submit" name="submit" value="submit"></tr></table>
</form>
<p align="center" class="style8">copyright: Akhil &amp; co. </p>

</body>
</html>
