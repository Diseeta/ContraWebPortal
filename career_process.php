<?php

include("conn.php");

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$profession = $_POST['profession'];
$address = $_POST['address'];
$education = $_POST['education'];
$achievements = $_POST['achievements'];



/*if(isset($_POST['submit'])){
$profession = $_POST['profession'];  // Storing Selected Value In Variable
echo "You have selected :" .$profession;  // Displaying Selected Value
}*/


/*echo $name."<br>";
echo $phone."<br>";
echo $email."<br>";
echo $profession."<br>";
echo $address."<br>";
echo $education."<br>";
echo $achievements."<br>";*/

mysql_query("insert into career values(NULL,'$name','$phone','$email','$profession','$education','$achievements','$address') ");

header("Location:index.php");

?>