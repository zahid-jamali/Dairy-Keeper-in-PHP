<?php
	include("include/conn.php");
	include("include/session.php");
?>

<html>
<head>
<style>
.cover{
	width: 50%;
	height: 200;
	border: 3px solid black;
	margin: auto;
	padding: auto;
}
.profile{
	width: 20%;
	height: 190;
	border: 3px solid black;
	border-radius: 50%;
	text-align: center;
}
.profile_img{
	border-radius: 40%;
}
.label{
	width: 20%;
	height: 50px;
	font-size: 20px;
	border: 2px solid black;
	text-align: center;
}
.pd-ctrl{
	width: 90%;
	padding-left: 100px
}
.content{
	width: 40%;

	border: 2px solid black;
	margin: auto;
	padding: auto;
	background-color: white;
	font-size: 18px;
}
</style>
</head>
<body>
	<?php include("include/nav.php")?>

<div class="container">
	<br><div class="cover">
			<img src='<?php echo $coverphoto;?>' width="100%" height="200px">
	</div>
	<div class="pd-ctrl">		
		<div class="profile">
			<img src="<?php echo $profilephoto?>" class="profile_img" width="90%" height="190" >
		</div>
		<div class="label"><?php echo $username;?><br><?php echo $useremail;?></div>
		<div class="content">
				<h2 align="center">Personal Information</h2>
			<b>Name: </b><?php echo $username;?><br>
			<b>Email: </b><?php echo $useremail?><br>
			<b>Phone : </b><?php echo $phone?><br>
			<b>Gender: </b><?php echo $gender;?><br>
			<b>Birthday: </b><?php echo $birthday?><br>
			<b>Address: </b><?php echo $useraddress?><br>
		</div>
	</div>	
</div>
		<br><br><br>
</body>
</html>