<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$password2=$_POST['password2'];


if(empty($firstname)){
    $firstname_err="Please insert your name";
}elseif(!preg_match('/^[a-zA-z]*$/', $firstname)){
    $firstname_err="Name cannot contain number";
}
if(empty($lastname)){
    $lastname_err="Please insert your name";
}elseif(!preg_match('/^[a-zA-z]*$/', $lastname)){
    $lastname_err="Name cannot contain number";
}
if(empty($email)){
    $email_err="Please insert your email";
}
if(empty($password)){
    $password_err="Please insert your password";
}elseif(strlen($password)<8){
    $password_err="Must be greater than 8 character";
}elseif(!preg_match("#[0-9]+#",$password)) {
    $password_err = "Your Password Must Contain At Least 1 Number!";
}
elseif(!preg_match("#[A-Z]+#",$password)) {
    $password_err = "Your Password Must Contain At Least 1 Capital Letter!";
}
elseif(!preg_match("#[a-z]+#",$password)) {
    $password_err = "Your Password Must Contain At Least 1 Lowercase Letter!";
}
if($password!=$password2){
    $password2_err = "Password doesnt match";
}
include('signup.php');
?>