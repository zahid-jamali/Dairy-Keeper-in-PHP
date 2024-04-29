<?php
	include('include/conn.php');

if(isSet($_POST['name'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$add=$_POST['address'];
	$password=$_POST['password'];
	$sql="INSERT INTO `users` VALUES(NULL, '$name', '$email', '$add', '$password')";
	$query=mysqli_query($conn, $sql);
	if($query){
		$sql2="SELECT * FROM `users` where email='$email' AND password='$password'";
		$result=mysqli_query($conn, $sql2);
		$row=mysqli_fetch_array($result);
		if($result){
			session_start();
			$_SESSION['userid']=$row['id'];
			header('location: home.php');
		}
	}
}

?>