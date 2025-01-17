
<?php
class Crud
{
    private $connection;

    
    public function __construct($db)
    {
        $this->connection = $db;
    }

    
    public function insert($firstname , $lastname, $email, $password, $cpassword, $img, $message,$number, $gender,$hobby,$country)
    {
        $sql = "INSERT INTO `registration`(`firstname`,`lastname`,`email`,`password`,`cpassword`,`image`,`message`,`number`,`gender`,`hobby`,`country`)
VALUES('$firstname','$lastname','$email','$password','$cpassword','$img','$message','$number','$gender','$hobby','$country')";
        
      
    }
}
?>
