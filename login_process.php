<?php
	
	session_start();

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	include("conn.php");

	$result = mysql_query("select * from signup where email='$email' AND password='$password' ");
	$count = mysql_num_rows($result);

	if($count > 0)
	{
		$row = mysql_fetch_row($result);
			
		$_SESSION['user_id'] = $row[0];
		$_SESSION['name'] = $row[1];
		header("Location:index.php");
	}
	else
		header("Location:signin.php");

?>