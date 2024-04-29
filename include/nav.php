<style>
*{
	margin: 0px;
	padding: 0px;
}
.nav{
	width: 100%;
	height: 40px;
	background-color: black;
	text-align: center;
}
button{
	width: 10%;
	height: 30px;
	border-radius: 10px;
}
body{
	background-color: skyblue;
}
.pname{
	text-align: right;
	font-size: 18;
}
li{
	display: inline;
}
</style>
<h1 align="center"><i>M</i>emories</h1>
	<hr color="red"><br>
		<p class="pname"><a href="profile.php"><?php echo $username?></a>&nbsp;</p>
	<hr color="red"><br>
<div class="nav">
	<ul>
		<li><a href="Home.php"><button>Home</button></a></li>
		<li><a href="profile.php"><button>Profile</button></a></li>
		<li><a href="logout.php"><button>Logout</button></a></li>
	</ul>
</div>