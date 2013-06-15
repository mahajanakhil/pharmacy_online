<html>
<head>
<script type="text/javascript">

function check()
{
 if(document.getElementById("days").value=="")
  {
    window.alert("enter a valid date");
return false;
  }
if(isNaN(document.getElementById("days").value))
  {
    window.alert("enter a valid days");
return false;
  }
}

</script>
<title> view complaint status</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	background-image: url(images/Indian-Flag-Wallpaper-1.jpg);
}
body,td,th {
	color: #000000;
}
-->
</style><body>
<form name="form1" method="POST" action="checkprofit.php" onSubmit="return check()">
<h2 align="center">&nbsp;</h2>
<h2 align="center">Check Daily Profit</h2>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <input type="text" name="days" id="days">
   </p>
  <p>   
    <input type="submit" name="submit" value="submit" onClick="check()">
    </p>
</div>
</form>
<p align="center" class="style8">copyright: Akhil &amp; co. </p>

</body>
</head>
</html>