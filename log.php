<!DOCTYPE html>
<html>
<head>
	<title>fillform</title>
	<style>
		*{
			font-family:sans-serif;
			box-sizing:border-box ;
		}
		body{
			background: #1690A7;
			display:flex;
			justify-content:center;
			align-item:center;
			height: 2%;
		}
		.fom{
			width: 30%;
			border:2px solid #ccc;
			padding:30px;
			background:#fff;
			border-radius: 15px;
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
			background:skyblue;
			padding: 10px 15px;
			color: #fff;
			border-radius:5px;
			margin-left: 10px;
			border: none;
			
		}

	</style>
</head>
<body>
	<div class="fom">
<form method="post" action="update.php">
	<h1>Welcome To INTE 462</h1>
	<h1>Kindly Fill The Details Below</h1>
	mobile phone number<input type="text" name="mobile">
	email<input type="email" name="email">
	address<input type="text" name="address">
	registration number<input type="text" name="reg">
	<button>submit</buton>
</form>
	</div>
</body>
</html>