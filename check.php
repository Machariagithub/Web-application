<?php
include_once "connect.php";

    $email=$_POST['mail'];
    $pasword=$_POST['pas'];
  
    $sql="select * from reg where Email='$email' and Password='$pasword'";
    $query=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($query);
    if($count==1)
    {
        header("location: log.php");
    }
    else
    {
        header("location: logind.php?connect=invalid credentials");
    }
?>