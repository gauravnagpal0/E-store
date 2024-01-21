<?php
require 'session-common.php';
$email=$_SESSION['email'];
$old=  mysqli_real_escape_string($con,md5($_POST["old"]));
$new=  mysqli_real_escape_string($con,md5($_POST["new"]));
$rnew=  mysqli_real_escape_string($con,md5($_POST["rnew"]));
$selet_query="select password from users where email='$email' " ;
$selet_query_result= mysqli_query($con, $selet_query) or die(mysqli_error($con));
$row=  mysqli_fetch_array($selet_query_result);
$originalp=$row['password'];
if($new != $rnew){
    header('location:settings.php?error=Paswords dont match');
} else{
if (($originalp==$old) && ($new==$rnew)){      
       $update="UPDATE users SET password='" . $new . "' WHERE email ='$email' ";
       $update_result= mysqli_query($con, $update) or die(mysqli_error($con));
       header('location:settings.php?error=Pasword Updated');
       }
       else {
        
         header('location: settings.php?error=Wrong old password');
        
    }
}
?>