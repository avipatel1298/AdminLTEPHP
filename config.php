<?php
class DB_con
{
	function __construct()
	{
		$conn = mysqli_connect("localhost","root","admin123","crudoops");
		$this->dbh=$conn;
	}

	public function insert($firstname, $lastname, $email, $password, $cpassword, $img, $message,$number, $gender,$hobby,$country)
	{
		$ret = mysqli_query($this->dbh,"INSERT INTO registration (firstname, lastname, email, password, cpassword, image, message, number, gender, hobby, country) 
        VALUES('$firstname', '$lastname', '$email', '$password', '$cpassword', '$img', '$message', '$number', '$gender', '$hobby', '$country')");
	}
	public function fetchdata()
	{
		$result = mysqli_query($this->dbh,"select * from registration");
		return $result;
	}
	public function fetchonerecord($user_id)
	{
		$oneresult = mysqli_query($this->dbh,"select * from registration where id = $user_id");
		return $oneresult;
	}
	
	public function update($firstname, $lastname, $email, $password, $cpassword, $img, $message,$number, $gender,$hobby,$country,$user_id)
	{	
		$updaterecord = mysqli_query($this->dbh,"UPDATE registration SET firstname='$firstname', lastname='$lastname',email='$email',password='$password',cpassword='$cpassword',image='$img',message='$message',number='$number',gender='$gender',hobby='$hobby',country='$country' WHERE id = $user_id");
	}
	public function delete($user_id)
	{	
		
	$deleterecord=mysqli_query($this->dbh,"DELETE FROM registration WHERE id = $user_id");

	}
}
