<?php
include("conn.php");

$name=$_POST["name"];
$type=$_POST["type"];
$des=$_POST["des"];
$challenge=$_POST["challenge"];
$client=$_POST["client"];
$location=$_POST["location"];
$duration=$_POST["duration"];
$architect_name=$_POST["architect_name"];
$date=$_POST["date"];
$price=$_POST["price"];

$image=$_FILES["image"]["name"];

/*echo $name."<br>";
echo $type."<br>";
echo $des."<br>";
echo $challenge."<br>";
echo $client."<br>";
echo $location."<br>";
echo $duration."<br>";
echo $architect_name."<br>";
echo $date."<br>";
echo $price."<br>";
echo $image."<br>";*/

if( $_FILES['image']['name'] != "" )	
{ 
		$name=$_FILES["image"]["name"];
			move_uploaded_file($_FILES['image']['tmp_name'],"../images/resource/".$_FILES['image']['name']);

			$query = mysql_query("INSERT INTO projects values (NULL, '$name','$type','$des','$challenge','$client','$location','$duration','$architect_name','$date',$price)");

			header("location:display_project.php");
			
}
else
{
	echo "please select all files";
}


?>
