<?php

include("conn.php");

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


/*echo $name."<br>";
echo $email."<br>";
echo $password."<br>";*/

mysql_query("insert into contact values(NULL,'$name','$phone','$email','$subject','$message') ");

header("Location:index.php");

?>