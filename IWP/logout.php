<?php
session_start();
$_SESSION['state']=0;
session_destroy();

header('location:slideshow.html');

?>