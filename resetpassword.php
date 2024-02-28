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
			background:#fff;
			border-radius: 15px;
			padding-top: 30px;
}
**{
			font-family:sans-serif;
			box-sizing:border-box ;
		}
		body{
			background: #777;
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
			background:goldenrod;
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js" integrity="sha512-6DC1eE3AWg1bgitkoaRM1lhY98PxbMIbhgYCGV107aZlyzzvaWCW1nJW2vDuYQm06hXrW0As6OGKcIaAVWnHJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body >
	<div class="log">
<form action="" method ="post">

	Email:<input type="email" name="email" placeholder="Enter Your email" />
	

		  <button name="reset">Reset</button>


</form>
<?php
if(isset($_POST['reset']))
{
    $email=$_POST['email'];
	$pword=rand(100000,900000);
    $conn=mysqli_connect("localhost","root","","database");
    $sql="update reg set Password='$pword' where Email='$email'";
    $query=mysqli_query($conn,$sql);
    $count=mysqli_affected_rows($conn);
    echo $count." Account(s) reset relating to the email";
    echo "
    <script>
    var email=$('#email').html();
    $.ajax({
        type:'post',
        url:'mail.php',
        data:{mail:'$email',
		password:'$pword'
		},
        success:function(resp)
        {
            alert('Reset password successful ".$email." Check your email.')
        }
    })
</script>";
}
?>
</div>
</body>
</html>