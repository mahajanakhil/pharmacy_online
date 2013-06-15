

<html>
<head>
<script type="text/javascript">

function check()
{
 if(document.getElementById("months").value=="")
  {
    window.alert("enter a Valid nuber of months");
return false;
  }
if(isNaN(document.getElementById("months").value))
  {
    window.alert("enter a Valid number");
return false;
  }
}

</script>
<title>Check Expiry  status</title>
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
<form name="form1" method="POST" action="generateexpirydetails.php" onSubmit="return check(form1)">
<h2 align="center">&nbsp;</h2>
<h2 align="center">Please enter no of months</h2>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <input type="text" name="months" id="months">
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
