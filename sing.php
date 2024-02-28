

<!DOCTYPE html>
<html>
<head>

	<style>
		*{
			font-family:sans-serif;
			box-sizing:border-box ;
		}
		.sign{
			width: 30%;
			border:2px solid #ccc;
			padding:30px;
			background:#fff;
			border-radius: 15px;
			

		}
		body{
			background: #80d7f1;
			display:flex;
			justify-content:center;
			align-item:center;
			height: 2%;
		
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
			background:#00FF00;
			padding: 10px 15px;
			color: black;
			border-radius:5px;
			margin-left: 10px;
			border: none;
			
		}
		.kaba{
			float:top;
			padding: 10%;
			font-weight: 20px;
			font-font-size: 50px;
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
	<title>create account</title>
	<script type="text/javasript" src="very.js"></script>
</head>
<body>
	<div class ="sign">
	<a class="l" href="logind.php">log in </a>
<a class="s" href="sing.php">sign up</a><br><br><br>
<form name="form1" method="post" action="add.php" ">
	<p align="center"><b>Ceate Account</b></p>
	Name:<input type="text" name="nam" placeholder="enter your name" />
    E-mail:<input type="text" name="mail" placeholder="example@gmail.com" />
	password:<input type="password" name="pas" placeholder="Enter your password" />
	confirm password:<input type="password" name="con" placeholder="confirm password" />
	<button onclick="validate()">create account</button>
</form>
</div>
</body>
</html>