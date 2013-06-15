<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style><?php
$fp=fopen("dispatch.txt","a");

fwrite($fp,$_POST['phnum']."\n");


fwrite($fp,$_POST['name']);


?>