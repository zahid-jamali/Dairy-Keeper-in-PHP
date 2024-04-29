<?php
	include("include/conn.php");
	include("include/session.php");
	
session_start();
session_unset();
session_destroy();
header("location: index.html");

?>