function verify(){
var name=document.form1.nam.value;
var email=document.forms1.mail.value;
var password=document.forms1.pass.value;

if(name==""||name=="null"){
    alert("name cant be blank");
    document.form1.nam.focus()
    return false
}

if(email==""||email=="null"){
    alert("email cant be empty");
    document.myform.email.focus()
    return false
}
else if(pass.length<6){
    alert("password should atleast have 6 characters");
    document.myform.pass.focus()
    return false                
}
else{
    return true
  }
}

<?php
if(isset($_POST['nam']) && isset($_POST['mail']) && isset($_POST['pas'])){
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;

    }
    $nam = validate($_POST['nam']);
    $mail = validate($_POST['mail']);
    $pas = validate($_POST['pas']);

    if(empty($nam)){
        header("location: sing.php?error=Name cann't be empty");
        exit();
    }
    elseif(empty($mail)){
        header("location: sing.php?error=Email cann't be empty");
        exit();

    }
    elseif(empty($pas)){
        header("location: sing.php?error=Password cann't be empty");
        exit();

    }
    else
    {
        header("location: add.php");
        exit();

    }
    ?>