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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
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
</style>
<body>
<form name="form1" method="POST" action="generateexpirydetails.php" onSubmit="return check(form1)">
<br>
<br><br><br>
<h1 align="center"><font face="Monotype Corsiva">Enter no of months</font></h1>
<div align="center">
  <p>
    <input type="text" name="months" id="months">
    
    <input type="submit" name="submit" value="submit" onClick="check()">
    </p>
</div>
</form><br>
<br><br><br><br><br><br>
<p align="center" class="style8">copyright: Akhil &amp; co. </p>

</body>
</head>
</html>
