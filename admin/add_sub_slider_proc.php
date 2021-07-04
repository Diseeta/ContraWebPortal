<?php

include("conn.php");

$image=$_FILES["file"]["name"];

if( $_FILES['file']['name'] != "" )
{ 
	$name=$_FILES["file"]["name"];
	move_uploaded_file($_FILES['file']['tmp_name'],"../images/slider/".$_FILES['file']['name']);

	$query = mysql_query("INSERT INTO  sub_slider values (NULL,  '$image')");
	
	header("location:display_sub_slider.php");
	
}
?>