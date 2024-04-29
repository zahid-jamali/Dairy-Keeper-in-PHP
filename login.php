<?php
	include('include/conn.php');

if(isSet($_POST['email'])){
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$sql="SELECT * FROM `users` WHERE email='$email' AND password='$pass'";
	$query=mysqli_query($conn, $sql);
	if($query){
		$row=mysqli_fetch_array($query);
		session_start();
		$_SESSION['userid']=$row['id'];
		header('location: home.php');
	}
	else{
		header('location: index.html');
	}
}
?>