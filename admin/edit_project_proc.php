<?php

include("conn.php");
$id=$_POST["id"];
$name=$_POST["name"];	
$type=$_POST["type"];
$des=$_POST["des"];
$challenge=$_POST["challenge"];
$client=$_POST["client"];
$location=$_POST["location"];
$duration=$_POST["duration"];
$architect_name=$_POST["architect_name"];
$date=$_POST["date"];
$value=$_POST["value"];
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

 if( $_FILES['image']['name'] != "")
{
	$query = mysql_query("UPDATE projects SET name='$name',image='$image',type='$type' ,des='$des',challenge='$challenge',client='$client',architect_name='$architect_name',duration='$duration',location='$location',date=$date,value=$value   WHERE id=$id",$con);
	move_uploaded_file($_FILES['image']['tmp_name'],"../images/resource/".$_FILES['image']['name']);

}


/*else
{
	$query = mysql_query("UPDATE projects SET image='$image',name='$name',type='$type' ,des='$des',challenge='$challenge',client='$client',architect_name='$architect_name',duration='$duration',location='$location',date=$date,value=$value   WHERE id=$id",$con);
	
}
	*/
header("location:display_project.php");
?>
