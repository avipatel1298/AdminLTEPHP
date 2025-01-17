
<?php
session_start();

class DB_con
{
	function __construct()
	{
		$conn= mysqli_connect("localhost","root","admin123","crudoops");
		$this->dbh=$conn;

		if ($this->dbh) {
			echo "Successfully connected to the database.";
		} else {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}	
	}


//$db = new DB_con();

public function insert($fname, $lname, $gender, $email, $birthdate, $deptname, $image)
{
     $sql = "INSERT INTO register(FirstName, LastName, Gender, Email, Birthdate, DeptName, Picture)
             VALUES('$fname', '$lname', '$gender', '$email', '$birthdate', '$deptname', '$image')";
     $result = mysqli_query($this->connection, $sql);
     if($result)
     {
          return true;
     }
     else
    {
         return false;
    }
}
}