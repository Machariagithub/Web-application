<?php
include_once "connect.php";
$name=$_POST['nam'];
$email =$_POST['mail'];
$password =$_POST['pas'];
$confirm=$_POST['con'];





if($confirm===$password){

$sql ="INSERT INTO reg (Name,Email,Password) VALUES('$name','$email','$password');";
if(mysqli_query($conn, $sql))
{
    header("location: logind.php?add=success") ;
}
else{
    header("location: sing.php?add=error") ;
}

}
else{
    echo '<script>alert("in valid password")</script>';
    return false ;
}
?>