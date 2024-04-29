<?php
session_start();
if($_SESSION['userid']!=''){
	$userid=$_SESSION['userid'];


	$sql="SELECT * FROM `users` WHERE id='$userid'";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
	$username=$row['name'];
	$useremail=$row['email'];
	$coverphoto=$row['cover_img'];
	$profilephoto=$row['profile_img'];
	$birthday=$row['birthday'];
	$gender=$row['gender'];
	$phone=$row['phone'];
	$useraddress=$row['address'];
	

}
else{
	echo "Session Error";
}

?>