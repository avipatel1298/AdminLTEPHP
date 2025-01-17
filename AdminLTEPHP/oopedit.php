<?php
include "header.php";
include "sidebar.php";
include  "oopupdate.php";

$user_id = intval($_GET['id']);
$onerecord = new DB_con();  
$sql=$onerecord->fetchonerecord($user_id);
  while($result=mysqli_fetch_array($sql))
{
?>
 <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
            <div class="col-sm-6"><h3 class="mb-0">Update Form</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">General Form</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">
              <!--begin::Col-->
              <div class="col-12">
                <div class="callout callout-info">
                  For detailed documentation of Form visit
                  <a
                    href="https://getbootstrap.com/docs/5.3/forms/overview/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="callout-link"
                  >
                    Bootstrap Form
                  </a>
                </div>
              </div>
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-12">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Quick Example</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form method="post" action="" enctype="multipart/form-data">
                    <!--begin::Body-->
                    <div class="card-body">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                    <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">First name</label>
                          <span class="error">* <?php echo $firstnameErr; ?></span>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom01"
                           name="firstname"
                           value="<?php echo $result['firstname'];?>"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Last name</label>
                          <span class="error">* <?php echo $lastnameErr; ?></span>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom02"
                            name="lastname"
                            value="<?php echo $result['lastname'];?>"
                          />
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <span class="error">* <?php echo $emailErr; ?></span>
                        <input
                          type="email"
                          class="form-control"
                          id="exampleInputEmail1"
                           name="email"
                           value="<?php echo $result['email'];?>"
                          aria-describedby="emailHelp"
                        />     
                        <div id="emailHelp" class="form-text">
                          We'll never share your email with anyone else.
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <span class="error">* <?php echo $passwordErr; ?></span>
                        <input type="password" class="form-control" name="password"  id="exampleInputPassword1" value="<?php echo htmlspecialchars($result['password']); ?>"/>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <span class="error">* <?php echo $cpasswordErr; ?></span>
                        <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1" value="<?php echo htmlspecialchars($result['cpassword']); ?>"/>
                      </div>
                      <div class="input-group mb-3">
                      <?php
                      $imagePath = './image/' . $result['image'] ;
                      if (file_exists($imagePath)) {
                        echo '<img src="' . $imagePath . '"style="width: 50px; height: 50px;"">';
                       } else {
                        echo '<p>Image not found.</p>';
                       }
                       ?>  
                        <input type="file" class="form-control"  name="image" id="inputGroupFile02"  value="<?php echo $result['image'];?>" />
                        <label class="input-group-text" for="inputGroupFile02">Upload</label><span class="error"><?php echo $imageErr; ?></span>
                        </div>
                      </div>
                      <div class="input-group">
                      <label for="message">Address</label><br></br>
                      <textarea id="message" name="message" rows="4" cols="50" placeholder="Enter your Address"><?php echo htmlspecialchars($result['message']); ?></textarea><br><br>
                    </div>
                    
                    <div class="mb-3">
                        <label for="phone number" class="form-label">Phone Number</label>
                        <span class="error">* <?php echo $numberErr; ?></span>
                        <input type="number" class="form-control"  name="number" id="phone number" value="<?php echo $result['number'];?>" />
                      </div>
                        
                      <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                          <div class="form-check">  
                          <input type="radio" name="gender" id="male" value="male" <?php if ($result['gender'] == "male") echo "checked=checked''"; ?>>         
                            <label class="form-check-label" for="male"> male </label>
                          </div>
                          <div class="form-check"> 
                          <input type="radio" name="gender" id="female"  value="female" <?php if ($result['gender'] == "female") echo "checked='checked'"; ?>>                       
                            <label class="form-check-label" for="female"> female </label>
                         </div>
                         <div class="form-check disabled">    
                      </fieldset>
                        <?php
                           $chk = explode(",",$result['hobby']);
                         ?>
                          <legend class="col-form-label col-sm-2 pt-0">Hobby <span class="error">* <?php echo $hobbyErr; ?></span></legend>
                          <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hobby" name="hobby[]" value="Reading" <?php if (in_array("Reading",$chk)) echo "checked='checked'"; ?>>
                            <label class="form-check-label" for="Reading">
                            Reading
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hobby" name="hobby[]" value="Singing" <?php if (in_array("Singing",$chk)) echo "checked='checked'"; ?>> 
                            <label class="form-check-label" for="Singing">
                            Singing
                            </label>
                          </div>
                          <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="hobby" name="hobby[]" value="Cricket" 
                         <?php if (in_array("Cricket", $chk)) echo "checked='checked'"; ?>>
                            <label class="form-check-label" for="Cricket">
                            Cricket
                            </label>
                            
                          </div>
                        </div>
                      </div>
                         <div class="col-md-3">
                          <label for="validationCustom04" class="form-label">Country</label>
                          <span class="error">* <?php echo $countryErr; ?></span>
                          <select class="form-select" id="validationCustom04" required name="country" id="country">
                          <option value="India" <?php if ($result['country'] == "India") echo "selected"; ?>>India</option>
                           <option value="America" <?php if ($result['country'] == "America") echo "selected"; ?>>America</option>
                            <option value="Canada" <?php if ($result['country'] == "Canada") echo "selected"; ?>>Canada</option>
                             <option value="Russia" <?php if ($result['country'] == "Russia") echo "selected"; ?>>Russia</option>
                           </select>
                     
                          <div class="invalid-feedback">Please select a valid state.</div>
                        </div>
                          </div>
                     <?php } ?>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="update" class="btn btn-primary" name="update">Update</button>
                    </div>
                  </form>
                </div>
          </div>
     </div>
</main>
<?php
include "footer.php";
