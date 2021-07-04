<?php
session_start();

include("conn.php");

$cname=$_POST["cname"];


/*echo $cname."<br>";*/

	$query = mysql_query("INSERT INTO  category values (NULL, '$cname')");
	
	header("location:display_cat.php");
?>