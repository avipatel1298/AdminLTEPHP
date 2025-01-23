<?php
include "ajaxconnection.php";
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $img = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp_name,"./image/".$img);
    $message=$_POST['message'];
    $number=$_POST['number'];
    $gender=$_POST['gender'];
    $hobby=implode(",",$_POST['hobby']);
    $country=$_POST['country'];
   $result=mysqli_query($conn,"INSERT INTO `registrations`(`firstname`,`lastname`,`email`,`password`,`cpassword`,`image`,`message`,`number`,`gender`,`hobby`,`country`)
   VALUES('$firstname','$lastname','$email','$password','$cpassword','$img','$message','$number','$gender','$hobby','$country')");

if($result){
   
    echo "data insert suceessfully";
}else{
    echo "data  not insert suceessfully";
}
}