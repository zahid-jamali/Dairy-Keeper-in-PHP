<?php
	include('include/conn.php');
	include('include/session.php');
	include('include/nav.php')
?>
<html>
<head>
<style>
.textarea{
	width: 100%;
	height: 230px;
}
.form{
	margin: auto;
	padding: auto;
	width: 50%
}
</style>
</head>
<body>
<div class="form">
<form method="post" action="upload_post.php">
	<textarea name="textarea" placeholder="Type What happed today---" class="textarea"></textarea><br>
	<input type="file" value="Image" name="img1" ><br>
	<input type="file" value="Image" name="img2" ><br>
	<input type="file" value="Image" name="img3" ><br>
	<input type="radio" name="per" value="public"> Save it public
	<input type="radio" name="per" value="pervite"> Private
	<input type="radio" name="per" value="secret"> Secret<br><br>
	<input type="submit" value="Submit">
	<input type="reset" value="Clear it">
</form>
</div>
</body>
</html>

