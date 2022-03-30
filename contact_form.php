<?php
// action : location to send form data (default same page)
// method : get/post/put/delete/patch : (default =>  get) 
//form field names : will be index of associtive array
// array to get form data ($_GET,$_POST)
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
//name field validation
if(empty($name)){
    $name_err="Please insert your name";
}elseif(strlen($name)<4){
    $name_err="Name must be greater than 4";
}elseif(preg_match('/[0-9]/', $name)){
    $name_err="Name cannot contain number";
}

//email field validation
if(empty($email)){
    $email_err="Please insert your email";
}//elseif(filter_var($email,filter_validate_email)==false){
//     $email_err="Please Insert valid email format";
//  }

//message field validation
if(empty($message)){
    $message_err="Please insert your message"; 
 }elseif(strlen($message)>50){
    $message_err="Message should be less than 10 character";
 }
include('contact.php');

?>