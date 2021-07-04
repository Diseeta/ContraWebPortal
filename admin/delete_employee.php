<?php

include("conn.php");

$id=$_GET["id"];
	
	$query = mysql_query("delete from career where id=$id");
	
	header("location:new_employee_view.php");
?>