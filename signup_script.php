<?php
require 'session-common.php';
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $email=mysqli_real_escape_string($con,$_POST['email']);
  $pwd=mysqli_real_escape_string($con,  md5($_POST['password']));
  $contact= mysqli_real_escape_string($con,$_POST['contact']);
  $city= mysqli_real_escape_string($con,$_POST['city']);
  $address= mysqli_real_escape_string($con,$_POST['address']);
  $required_email="/^[a-z0-9.%+-]+(\.[a-z0-9.-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3)$/";
if(!preg_match($required_email, $email)){
    header('location:signup.php');
        echo "enter correct email";
}
   if (strlen($pawd)<6){
        header('location:signup.php');
        echo "enter correct password";
   }
   $query="SELECT * FROM users WHERE email='$email'";
   $query_result=  mysqli_query($con, $query);
   $number= mysqli_num_rows($query_result);
    
   if($number >0){
   header('location: signup.php?error=user already exists');
   }  else{
        $register="INSERT into users (name,email,password,contact,city,address) VALUES ('$name','$email','$pwd','$contact','$city','$address')";
  $register_result=  mysqli_query($con, $register);
  $_SESSION['email']=$email;
   session_destroy(); 
    header('location:signup-successfull.php'); 
   } 
   ?>

    

