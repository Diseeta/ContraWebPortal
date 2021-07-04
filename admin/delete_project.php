<?php

include("conn.php");

$id=$_GET["id"];
	
	$query = mysql_query("delete from projects where id=$id");
	
	header("location:update_project.php");
?>