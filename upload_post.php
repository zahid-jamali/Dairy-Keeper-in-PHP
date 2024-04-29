<?php
	include("conn.php");
	include("session.php");
if($_POST['textarea']!=""){
	$text=$_POST['textarea'];
	$img1=$_POST['img1'];
	$img2=$_POST['img2'];
	$img3=$_POST['img3'];
	$per=$_POST['per'];
	$sql="INSERT INTO `posts` VALUES(NULL, '$text', '$img1', '$img2', '$img3', '$img4')";
	$result=mysqli_query($conn, $sql);
	if(isSet($result)){
		header("location: home.php")
	}
}

?>