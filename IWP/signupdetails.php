<?php
$name=$_POST['name'];
$password=$_POST['password'];
$username=$_POST['username'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$db=mysql_connect("localhost","root","");
mysql_select_db("medical",$db);
$query="insert into user(name,password,username,email,dob,gender,address) values('$name','$password','$username','$email','$dob','$gender','$address')";
mysql_query($query,$db)or die("cannot write");
?>
</head>

<body>
<h2>Thankyou for registering,</h2>
<p>Your Unique code for future log in is: </p>
<?php
$query1="select uniqueid from user where username='$username' and password='$password'";
$result1=mysql_query($query1,$db)or die("cannot write");
$c=mysql_fetch_row($result1);
foreach($c as $e)
{
echo $e;
}
?>
<p>Kindly save it.<br />

Regards:</p>
<p><a href="loginform.php"><strong>Login now</strong></a></p>
<p>Admin</p>
</body>
</html>
