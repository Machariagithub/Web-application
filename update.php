<?php  

include_once"connect.php";

$mobile=$_POST['mobile'];
$mail=$_POST['email'];
$address=$_POST['address'];
$regno=$_POST['reg'];

$sql="INSERT INTO UpdateDetails(Mobile,Email,Address,Registration) VALUES('$mobile','$mail','$address','$regno')";
if(mysqli_query($conn,$sql))
{
    header("location: welcome.php?update=success");
}
else{
    header("location: log.php?update=error");
}


?>