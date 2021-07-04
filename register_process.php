<?php

include("conn.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

/*echo $name."<br>";
echo $email."<br>";
echo $password."<br>";*/

mysql_query("insert into signup values(NULL,'$name','$email','$password') ");

header("Location:login.php");

?>