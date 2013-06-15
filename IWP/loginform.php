<?php
session_start();
if(isset($_SESSION['usertype1']) && ($_SESSION['usertype1']=="admin"))
header("location:admin.html");
else if(isset($_SESSION['usertype1']) && ($_SESSION['usertype1']=="cashier"))
header("location:cashier.html");
?>
<html>
<head>
<style>
input {
background-color:white;height:25pt;border:none;border-radius:4pt;
}
input:focus{
background-color:white;
.buttonGMI
}
option {
background-color:white;height:25pt;border:none;border-radius:4pt;}
option:focus{background-color:white;
}
select{background-color:white;height:25pt;border:none;border-radius:4pt;}
</style>
<script type="text/javascript">
function check()
{
 if(document.getElementById("name").value=="")
  {
    window.alert("enter name !!!!");
return false;
  }
if(document.getElementById("pass").value=="")
  {
    window.alert("enter password !!!!");
return false;
  }
  
 else if(document.getElementById("pass").value.length<5 || document.getElementById("pass").value.length>12)
  {
    window.alert("password between 5 and 12 characters");
return false;
  }
  else if(document.getElementById("id").value=="")
  {
    window.alert("enter unique id !!!");
return false;
  }
else if(document.getElementById("type").value=="")
  {
    window.alert("enter user type !!!");
return false;
  }

else if(document.getElementById("type").value=="select type")
  {
    window.alert("enter user type !!!");
return false;
  }

}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body vlink="black">

<form name="form2" method="post" action="login.php" onSubmit="return check(form2)">

 <h1 align="center" ><font face="Monotype Corsiva" color="#000000">Sign In</font></p>
 <table rules="rows" border="5px" style="
width:100%;
height:300px;
border-color:#5C743D;" >
	
<tr bgcolor="99CC66">
		<td valign="bottom" align="right"><h2><font face="Monotype Corsiva" color="#000000">User Name:</font></h2></a></td>
		<td align="center"><input type="text" name="username" id="name" size=70></td>
	</tr>
<tr bgcolor="99BB66">
		<td valign="bottom" align="right"><h2><font face="Monotype Corsiva" color="#000000">Password:</font></h2></a></td>
		<td align="center"><input type="password" name="password" id="pass" size=70></td>
	</tr>
  <tr bgcolor="99CC66">

                <td align="right" valign="bottom"><h2><font face="Monotype Corsiva" color="#000000">User Type:</font></h2></td>
                <td align="center"><select name="usertype" id="type" >
                         	<option value="select type">Choose your user type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
	<option value="admin">Admin</option>
	<option value="cashier">Cashier</option>
</select>
</tr>
<tr bgcolor="99BB66"><td>
		<td align="right" style="padding-right:50px;">
		<input type="submit" name="submit" value="Login" onClick="check()"></td>
</tr>
</table>
</form>
</body>
</html>