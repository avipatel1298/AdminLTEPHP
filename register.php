<?php
 include "connection.php";
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if (!preg_match("/^[a-zA-Z ]*$/", $firstname)) {
      echo "First name can only contain letters and spaces.<br>";
  }
 
  elseif (!preg_match("/^[a-zA-Z ]*$/", $lastname)) {
      echo "Last name can only contain letters and spaces.<br>";
  }
 
  elseif (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
      echo "Invalid email format.<br>";
  }
  
  elseif (!preg_match("/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/", $password)) {
      echo "Password must be between 8 and 12 characters, and can include letters, numbers, and special characters.<br>";
  }
  else {
      
      $email_check_query = mysqli_query($conn, "SELECT * FROM `task` WHERE `email` = '$email'");

      if (mysqli_num_rows($email_check_query) > 0) {
          echo "Email already exists. Please use a different email.<br>";
      } 
      

          $result = mysqli_query($conn, "INSERT INTO `task`(`firstname`, `lastname`, `email`, `password`) 
                                         VALUES('$firstname', '$lastname', '$email', '$password_hash')");
          
          if ($result) {
              echo "Data inserted successfully!";
              header("Location: login.php");
              exit();
          } else {
              echo "Data insertion failed.<br>";
          }
      }
  }

?>

<html>
  <head>   
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="../AdminLTEPHP/dist/css/adminlte.css" />
    <!--end::Required Plugin(AdminLTE)-->
    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />
    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />
<body>        
      <div class="card card-primary card-outline mb-4">
            <form method="post" action="#">
                    <!--begin::Body-->
                    <div class="card-body">
                    <div class="">
                          <label for="validationCustom01" class="form-label">First name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom01"
                            name="firstname"
                          />
                        </div>
                        <div class="">
                          <label for="validationCustom02" class="form-label">Last name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom02"
                            name="lastname"
                          />
                        </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input
                          type="email"
                          class="form-control"
                          id="exampleInputEmail1"
                          name="email"
                          aria-describedby="emailHelp"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" />
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                 </div>
            </form>   <!--end::Footer-->    
      </div>
</body>
</head>
</html>
