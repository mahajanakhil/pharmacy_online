<!DOCTYPE html>
<html>
<head>
<script>
function showHint(str)
{
var xmlhttp;
if (str.length==0)
  { 
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }

xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","suggest.php?q="+str,true);
xmlhttp.send();
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style></head>
<body>


<form action="">
<label> search 
<input type="text" id="txt1" size="40" onKeyUp="showHint(this.value)" />
<input type="submit" name="go" id="go" value="go" />
  </label></form>
<p>sugestion</p> 

<!--form name="form1" method="post" action="">
  <label>
  <select name="txtHint" id="txtHint">
  </select>
  </label>
</form-->
<p><span id="txtHint" onMouseOver=""></span></p>
</body>
</html>


