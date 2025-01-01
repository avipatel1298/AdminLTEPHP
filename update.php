<?php
include "connection.php";

$firstnameErr = $lastnameErr = $emailErr = $passwordErr = $cpasswordErr = $numberErr = $genderErr = $hobbyErr = $countryErr = $messageErr = "";
$firstname = $lastname = $email = $password = $cpassword = $number = $gender = $hobby = $country = $message = "";

function input_data($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if (isset($_POST['update'])) {

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
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
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
        $messageErr = "Message is required";
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

     
        if ($_FILES["image"]["name"] != "") {
            $img = $_FILES["image"]["name"];
            $tmp_name = $_FILES["image"]["tmp_name"];
            move_uploaded_file($tmp_name, "./image/" . $img);
        } else {
         
            $user_id = $_POST['user_id'];
            $result = mysqli_query($conn, "SELECT image FROM task WHERE id='$user_id'");
            $row = mysqli_fetch_assoc($result);
            $img = $row['image'];
        }

        if (isset($_POST['user_id'])) {
            $user_id = $_POST['user_id'];

           
            $update = mysqli_query($conn, "UPDATE task SET 
                firstname='$firstname', 
                lastname='$lastname',
                email='$email',
                password='$password',  
                cpassword='$cpassword', 
                image='$img', 
                message='$message',
                number='$number',
                gender='$gender',
                hobby='$hobby',
                country='$country' 
                WHERE id='$user_id'");

            if ($update) {
                echo "<script>window.location.href='/AdminLTEPHP/view.php'</script>";
                exit();
            } else {
                echo "Data not updated successfully.";
            }
        }
    }
}
?>
