<?php
include "connection.php";

$firstnameErr = $lastnameErr = $emailErr = $passwordErr = $cpasswordErr = $numberErr = $genderErr = $hobbyErr = $countryErr = $messageErr = "";
$firstname = $lastname = $email = $password = $cpassword = $number = $gender = $hobby = $country = $message = "";

if(isset($_POST['submit'])) {
    if (empty($_POST["firstname"])) {
        $firstnameErr = "First Name is required";
    } else {
        $firstname = input_data($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
            $firstnameErr = "Only letters and white space are allowed";
        }
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last Name is required";
    } else {
        $lastname = input_data($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
            $lastnameErr = "Only letters and white space are allowed";
        }
    }

   
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = input_data($_POST["email"]);
        if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
            $emailErr = "Invalid email format";
        }
    }

   
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = input_data($_POST["password"]);
        if (!preg_match("/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/", $password)) {
            $passwordErr = "Password must be between 8 and 12 characters and contain letters, numbers, and special characters";
        }
    }

   
    if (empty($_POST["cpassword"])) {
        $cpasswordErr = "Confirm Password is required";
    } else {
        $cpassword = input_data($_POST["cpassword"]);
        if ($password !== $cpassword) {
            $cpasswordErr = "Passwords do not match";
        }
    }

    if (empty($_POST["number"])) {
        $numberErr = "Phone Number is required";
    } else {
        $number = input_data($_POST["number"]);
        if (!preg_match("/^[0-9]*$/", $number)) {
            $numberErr = "Only numeric value is allowed.";
        } elseif (strlen($number) != 10) {
            $numberErr = "Mobile no must contain 10 digits.";
        }
    }

    
    if (empty($_POST["message"])) {
        $messageErr = "Address is required";
    } else {
        $message = input_data($_POST["message"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = input_data($_POST["gender"]);
    }

    if (empty($_POST['hobby'])) {
        $hobbyErr = "At least one hobby must be selected";
    } else {
        $hobby = implode(",", $_POST['hobby']);
    }

    
    if (empty($_POST["country"])) {
        $countryErr = "Country is required";
    } else {
        $country = input_data($_POST["country"]);
    }

    
    if (empty($firstnameErr) && empty($lastnameErr) && empty($emailErr) && empty($passwordErr) && empty($cpasswordErr) && empty($numberErr) && empty($messageErr) && empty($genderErr) && empty($hobbyErr) && empty($countryErr)) {
        
        
        $img = $_FILES["image"]["name"];
        $tmp_name = $_FILES["image"]["tmp_name"];
        move_uploaded_file($tmp_name, "./image/" . $img);

       
        $result = mysqli_query($conn, "INSERT INTO task(firstname, lastname, email, password, cpassword, image, message, number, gender, hobby, country) 
        VALUES('$firstname', '$lastname', '$email', '$password', '$cpassword', '$img', '$message', '$number', '$gender', '$hobby', '$country')");

        if ($result) {
            echo "Data inserted successfully."; 
            
            ?>
            <script>window.location.href="/AdminLTEPHP/view.php"</script>
            <?php 
            exit();
        } else {
            echo "Data not inserted successfully.";
        }
    }
}


function input_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}