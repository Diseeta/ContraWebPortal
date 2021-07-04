<?php

include("conn.php");

$id=$_GET["id"];
	
	$query = mysql_query("delete from sub_slider where id=$id");
	
	header("location:update_sub_slider.php");
?>