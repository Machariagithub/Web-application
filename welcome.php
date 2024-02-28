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
</head>
<body >
	<div class="log">
<form action="" method ="post">

	registration Number:<input type="text" name="reg" placeholder="search" />
	

		  <button name="search">Search</button>


</form>
<?php
if(isset($_POST['search']))
{
    $regno=$_POST['reg'];
    $conn=mysqli_connect("localhost","root","","database");
    $sql="select * from updateDetails where Registration='$regno'";
    $query=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($query);
    if($count==1)
    {
        while($row=mysqli_fetch_assoc($query))
        {
            $email=$row['Email'];
            $row1=mysqli_fetch_assoc(mysqli_query($conn,"select Name from reg where Email='$email'"));
            echo "<br><h3>Name:</h3>".$row1['Name'];
            echo "<h3>Address:</h3>".$row['Address'];
            echo "<h3>Phone:</h3>".$row['Mobile'];
        }
    }
   else{
    echo '<div class="error">';
    echo "user not found";
    echo '</div>';
   }
}
?>
</div>
</body>
</html>