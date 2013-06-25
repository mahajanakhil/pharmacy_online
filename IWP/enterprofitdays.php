<html>
<head>
<script type="text/javascript">
function check()
{
 if(document.getElementById("days").value=="")
  {
    window.alert("Days Field cannot be empty");
return false;
  }
if(isNaN(document.getElementById("days").value))
  {
    window.alert("Enter a valid number");
return false;
  }
}
</script>
<title> view profit</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
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
</style><body>
<form name="form1" method="POST" action="checkprofit.php" onSubmit="return check()">
<br>
<br><br><br>
<h1 align="center"><font face="Monotype Corsiva">Enter no of days</font></h1>
<div align="center">
  <p>
    <input type="text" name="days" id="days">  
    <input type="submit" name="submit" value="submit">
    </p>
</div>
</form><br>
<br><br><br><br><br><br>
<p align="center" class="style8">copyright: Akhil &amp; co. </p>

</body>
</head>
</html>