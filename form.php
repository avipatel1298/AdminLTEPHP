<?php
include "header.php";
include "sidebar.php";
include "insert.php";
?>
<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Register Form</h3></div>
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
                    <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">First name</label>

                              <span class="error">* <?php echo $firstnameErr; ?></span>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom01"
                           name="firstname" 
                            
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
                          aria-describedby="emailHelp"
                        />
                      
                        <div id="emailHelp" class="form-text">
                          We'll never share your email with anyone else.
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <span class="error">* <?php echo $passwordErr; ?></span>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword" />
                       
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <span class="error">* <?php echo $cpasswordErr; ?></span>
                        <input type="password" class="form-control" name="cpassword" id="exampleInputConfirmPassword"/>
                      
                      </div>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control"  name="image" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <div class="input-group">
                      <span class="input-group-text">Address</span>
                      <textarea class="form-control" name="message" aria-label="With textarea"></textarea><span class="error">* <?php echo $messageErr; ?></span>
                    </div>
                    
                    <div class="mb-3">
                        <label for="phone number" class="form-label">Phone Number</label>
                        <span class="error">* <?php echo $numberErr; ?></span>
                        <input type="number" class="form-control"  name="number" id="phone number" />  
                      
                      </div>
                        
                      <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Gender<span class="error">* <?php echo $genderErr; ?></span></legend>
                        <div class="col-sm-10">
                          <div class="form-check">  
                          <input type="radio" name="gender" id="male" value="male" checked>         
                            <label class="form-check-label" for="male"> male </label>
                          </div>
                          <div class="form-check"> 
                          <input type="radio" name="gender" id="female" value="female">                       
                            <label class="form-check-label" for="female"> female </label>
                          
                          </div>
                          <div class="form-check disabled">    
                      </fieldset>
                         
                      <legend class="col-form-label col-sm-2 pt-0">Hobby<span class="error">* <?php echo $genderErr; ?></span></legend>
                        <div class="col-sm-10 offset-sm-2">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox"name="hobby[]" value="Reading" />
                            <label class="form-check-label" for="Reading">
                            Reading
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox"name="hobby[]" value="Singing" />
                            <label class="form-check-label" for="Singing">
                            Singing
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hobby[]" value="Cricket" />
                            <label class="form-check-label" for="Cricket">
                            Cricket
                            </label>
                            <span class="error">* <?php echo $hobbyErr; ?></span>
                          </div>
                        </div>
                      </div>
                    
                         <div class="col-md-3">
                          <label for="validationCustom04" class="form-label">Country</label>
                          <span class="error">* <?php echo $countryErr; ?></span>
                          <select class="form-select" id="validationCustom04" required name="country" id="country">
                          <option value="India">India</option>
                           <option value="America">America</option>
                            <option value="Canada">Canada</option>
                             <option value="Russia">Russia</option>
                           </select>
                         
                         
                        </div>
                          </div>
                    
                    </div>
                   
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Quick Example-->
                <!--begin::Input Group-->

                  <!--end::Form-->
                  <!--begin::JavaScript-->
              
                  <!--end::JavaScript-->
                </div>
                <!--end::Form Validation-->
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
        
          <!--end::Container-->
      
        <!--end::App Content-->
       
      </main>
                 
      <?php

include "footer.php";

?>

