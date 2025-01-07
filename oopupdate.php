<?php

include "config.php";
if(isset($_POST['update']))
{
    
$user_id=intval($_GET['id']);
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if($_FILES["image"]["name"] == ""){     

$img = $result['image'];

}else{
$img = $_FILES["image"]["name"];    

$tmp_name = $_FILES["image"]["tmp_name"];

move_uploaded_file($tmp_name,"./image/".$img);
}
$message=$_POST['message'];
$number=$_POST['number'];
   
$gender=$_POST['gender'];
$hobby=implode(",",$_POST['hobby']);
$country=$_POST['country'];

$updatedata=new DB_con();
$sql=$updatedata->update($firstname, $lastname, $email, $password, $cpassword, $img, $message,$number, $gender,$hobby,$country,$userid);


}
?>