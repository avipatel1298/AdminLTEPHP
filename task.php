<a href="update.php?id=<?php echo htmlentities($row['id']);?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
 <td><a href="index.php?del=<?php echo htmlentities($row['id']);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>

    $insertdata = new DB_con();
    $sql= $insertdata->insert($firstname, $lastname, $email, $password, $cpassword, $img, $message,$number, $gender,$hobby,$country);
    
     if($sql)    
    {
      echo "<script>window.location.href='/avi/AdminLTEPHP/view.php'</script>";
        echo "success";
        
    }
    else
   {
         echo "error";
   }
}

<form method="post" action="" enctype="multipart/form-data">
    <div class="card-body">
        <!-- First name -->
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">First name</label>
            <span class="error">* <?php echo $firstnameErr; ?></span>
            <input type="text" class="form-control" id="validationCustom01" name="firstname" value="<?php echo $firstname; ?>" />
            <div class="valid-feedback">Looks good!</div>
        </div>

        <!-- Last name -->
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Last name</label>
            <span class="error">* <?php echo $lastnameErr; ?></span>
            <input type="text" class="form-control" id="validationCustom02" name="lastname" value="<?php echo $lastname; ?>" />
            <div class="valid-feedback">Looks good!</div>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <span class="error">* <?php echo $emailErr; ?></span>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $email; ?>" aria-describedby="emailHelp" />
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <span class="error">* <?php echo $passwordErr; ?></span>
            <input type="password" class="form-control" name="password" id="exampleInputPassword" value="<?php echo $password; ?>" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <span class="error">* <?php echo $cpasswordErr; ?></span>
            <input type="password" class="form-control" name="cpassword" id="exampleInputConfirmPassword" value="<?php echo $cpassword; ?>" />
        </div>

        <!-- Image Upload -->
        <div class="input-group mb-3">
            <input type="file" class="form-control" name="image" id="inputGroupFile02" />
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>

        <!-- Address -->
        <div class="input-group">
            <span class="input-group-text">Address</span>
            <textarea class="form-control" name="message" aria-label="With textarea"><?php echo $message; ?></textarea>
            <span class="error">* <?php echo $messageErr; ?></span>
        </div>

        <!-- Phone number -->
        <div class="mb-3">
            <label for="phone number" class="form-label">Phone Number</label>
            <span class="error">* <?php echo $numberErr; ?></span>
            <input type="number" class="form-control" name="number" id="phone number" value="<?php echo $number; ?>" />
        </div>

        <!-- Gender -->
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0">Gender <span class="error">* <?php echo $genderErr; ?></span></legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input type="radio" name="gender" id="male" value="male" <?php if ($gender == "male") echo "checked"; ?> />
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gender" id="female" value="female" <?php if ($gender == "female") echo "checked"; ?> />
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
        </fieldset>

        <!-- Hobby -->
        <legend class="col-form-label col-sm-2 pt-0">Hobby <span class="error">* <?php echo $hobbyErr; ?></span></legend>
        <div class="col-sm-10 offset-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobby[]" value="Reading" <?php if (in_array('Reading', explode(",", $hobby))) echo "checked"; ?> />
                <label class="form-check-label" for="Reading">Reading</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobby[]" value="Singing" <?php if (in_array('Singing', explode(",", $hobby))) echo "checked"; ?> />
                <label class="form-check-label" for="Singing">Singing</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="hobby[]" value="Cricket" <?php if (in_array('Cricket', explode(",", $hobby))) echo "checked"; ?> />
                <label class="form-check-label" for="Cricket">Cricket</label>
            </div>
        </div>

        <!-- Country -->
        <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Country</label>
            <span class="error">* <?php echo $countryErr; ?></span>
            <select class="form-select" id="validationCustom04" required name="country" id="country">
                <option value="India" <?php if ($country == "India") echo "selected"; ?>>India</option>
                <option value="America" <?php if ($country == "America") echo "selected"; ?>>America</option>
                <option value="Canada" <?php if ($country == "Canada") echo "selected"; ?>>Canada</option>
                <option value="Russia" <?php if ($country == "Russia") echo "selected"; ?>>Russia</option>
            </select>
        </div>

    </div>

    <!-- Footer -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </div>
</form>


$updatedata = new DB_con();

$sql= $updatedata->update($firstname, $lastname, $email, $password, $cpassword, $img, $message,$number, $gender,$hobby,$country,$user_id);


if($sql)    
{
    echo "<script>window.location.href='/avi/AdminLTEPHP/view.php'</script>";
    echo "success";

}
else
{
     echo "error";
}
}
$user_id=intval($_GET['id']);





<?php
  include "config.php";
   if(isset($_POST['submit']))
   {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $img = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp_name,"./image/".$img);
    $message = $_POST['message'];
    $number = $_POST['number'];
    $gender =$_POST['gender'];
    $hobby=implode(",",$_POST['hobby']);
    $country = $_POST['country'];
   
    $insertdata = new DB_con();
    $sql= $insertdata->insert($firstname, $lastname, $email, $password, $cpassword, $img, $message,$number, $gender,$hobby,$country);
    
     if($sql)    
    {
      echo "<script>window.location.href='/avi/AdminLTEPHP/view.php'</script>";
        echo "success";
        
    }
    else
   {
         echo "error";
   }
}


?>






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

$updatedata = new DB_con();

$sql= $updatedata->update($firstname, $lastname, $email, $password, $cpassword, $img, $message,$number, $gender,$hobby,$country,$user_id);


if($sql)    
{
    echo "<script>window.location.href='/avi/AdminLTEPHP/view.php'</script>";
    echo "success";

}
else
{
     echo "error";
}
}

?>