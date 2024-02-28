<!DOCTYPE html>

<html>
<head>
	<style>
.error{
	border:1px solid red;
	color:red;
	width:50%;
	justify-content:center;
	font-weight:bolder;
	border-radius:30px;
	
}
.log{
	        width: 30%;
			border:2px solid #ccc;
			padding:30px;
			background:azure;
			border-radius: 15px;
			padding-top: 30px;
}
**{
			font-family:sans-serif;
			box-sizing:border-box ;
		}
		body{
			background: #80d7f1;
			display:flex;
			justify-content:center;
			align-item:center;
			height: 2%;
			padding:30px;
			padding:10%;
		
		}
		input{
			display:block;
			border:2px solid #ccc;
			width: 95%;
			padding:10px;
			margin:10px auto;
		}
		button{
			float:right;
			background:green;
			padding: 10px 15px;
			color: #fff;
			border-radius:5px;
			margin-left: 10px;
			border: none;
		}
		.s{
			float:right;
			onhover[color]:blue;
            background:gray;
			border-radius:6px;

		}
		a{
			text-decoration: none;
			font-size:20px;
			padding:10px;
			border-radius:6px;
		}
		.l{
			float:left;
			onhover[color]:blue;
            background:gray;
			border:none;

		}

		</style>
</head>
<body >
	<div class="log">
<form action="check.php" method ="post">
	
<a class="l" href="logind.php">log in </a>
<a class="s" href="sing.php">sign up</a><br><br><br>
	<b>E-mail</b><input type="text" name="mail" placeholder="example@gmail.com" required/>
	<b>Password</b><input type="password" name="pas" placeholder="Enter your password" required>
	<div class="error">
		<center>
	<?php
if(isset($_GET['connect']))
{
	echo $_GET['connect'];
}
?>
</center>
</div>

		  <button>Log in</button>
		  <a href="resetpassword.php">Forgot Password?</a>


</form>
</div>
</body>
</html>