<?php

include("conn.php");

$id=$_POST["id"];
$cname=$_POST["cname"];

$query = mysql_query("update category set cname='$cname' where cat_id=$id");
header("location:display_cat.php");
?>