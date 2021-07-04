<?php
include("conn.php");
$cat_id=$_POST["cat_id"];
//$sub_id=$_POST["sub_id"];	
$pname=$_POST["pname"];
$price=$_POST["price"];
$desc=$_POST["desc"];
//$psize=$_POST["psize"];
$qua=$_POST["qua"];
$img1=$_FILES["img1"]["name"];
/*$img2=$_FILES["img2"]["name"];
$img3=$_FILES["img3"]["name"];*/

if( $_FILES['img1']['name'] != "" )	
{ 
		$name=$_FILES["img1"]["name"];
			move_uploaded_file($_FILES['img1']['tmp_name'],"../images/resource/".$_FILES['img1']['name']);

			$query = mysql_query("INSERT INTO product values (NULL,  $cat_id,  '$pname',  $price,  '$desc',  '$img1',  '$qua')");

			header("location:display_product.php");
}
else
{
	echo "please select all files";
}
?>