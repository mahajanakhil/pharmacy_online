<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
          <?php include("try2.php"); ?>   
  <!--input name="search2" type="text" id="search2" size="40" /-->&nbsp;&nbsp;
        <!--input type="submit" name="go" id="go" value="go" />
    </label--></td>
    <td width="125" valign="top" align="right">

<form name="form1" method="post" action="addonlinesell.php" onSubmit="return check(form1)">
<table border=0 align="center">
<br>
<br>
<tr>
		<td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>

<tr>
		<td>Phone num:</td>
		<td><input type="textbox" name="phnum" size=30></td>
	</tr>
<tr>
		<td>Product Name:</td>
		<td><textarea name="name" rows="15" cols="30">
		</textarea>
		</td>
	</tr>

	 <tr>
	<tr><tr>
		<td><input type="submit" name="Submit" value="Submit"></td>
		<td><input type="reset" name="Reset" value="Reset"></td>
	</tr></tr>
</table>
</form>
<p align="center" class="style8">copyright: Akhil &amp; co. </p>

</body>
</html>
