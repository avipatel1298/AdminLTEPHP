<?php
include "header.php";
include "sidebar.php";
?>
<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Register Form Ajax</h3></div>
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
              <!--end::Col-->
              <!--begin::Col-->
              <div class="col-md-12">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Quick Example</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form id="registrationForm"  enctype="multipart/form-data">
                    <!--begin::Body-->
                    <div class="card-body">
                    <div class="col-md-6">
                          <label for="validationCustom01" class="form-label">First name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom01"
                            id="firstname"
                           name="firstname" 
                          />
                        <div class="valid-feedback">Looks good!</div>
                    </div>
                        <div class="col-md-6">
                          <label for="validationCustom02" class="form-label">Last name</label>
                          <input
                            type="text"
                            class="form-control"
                            id="validationCustom02"
                            id="lastname"
                            name="lastname"
                          />
                          <div class="valid-feedback">Looks good!</div>
                    </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input
                          type="email"
                          class="form-control"
                          id="exampleInputEmail1"
                          id="email"
                           name="email"
                          aria-describedby="emailHelp"
                        />
                        <div id="emailHelp" class="form-text">
                          We'll never share your email with anyone else.
                        </div>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" id="exampleInputPassword" />
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" id="cpassword" id="exampleInputConfirmPassword"/>
                      </div>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control"  name="image" id="image" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <div class="input-group">
                      <span class="input-group-text">Address</span>
                      <textarea class="form-control" name="message" id="message" aria-label="With textarea"></textarea>
                    </div>
                     <div class="mb-3">
                        <label for="phone number" class="form-label">Phone Number</label>
                        <input type="number" class="form-control"  name="number" id="number" />
                      </div>
                      <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10">
                          <div class="form-check">  
                          <input type="radio" name="gender" id="male" value="male" checked/>
                          <label class="form-check-label" for="male">Male</label>
                          </div>
                          <div class="form-check"> 
                          <input type="radio" name="gender" id="female" value="female"/>
                           <label class="form-check-label" for="female">Female</label>
                          </div>
                          <div class="form-check disabled">    
                      </fieldset> 
                      <legend class="col-form-label col-sm-2 pt-0">Hobby</legend>
                        <div class="col-sm-10 offset-sm-2">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hobby" name="hobby[]" value="Reading"/>
                            <label class="form-check-label" for="Reading">
                            Reading
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hobby1" name="hobby[]" value="Singing"/>
                            <label class="form-check-label" for="Singing">  
                            Singing
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hobby2" name="hobby[]" value="cricket" />
                            <label class="form-check-label" for="Cricket">
                            Cricket
                            </label>
                          
                          </div>
                        </div>
                      </div>
                         <div class="col-md-3">
                          <label for="validationCustom04" class="form-label">Country</label>
                          <select class="form-select" id="validationCustom04" required name="country" id="country">
                          <option value="India">India</option>
                          <option value="America">America</option>
                          <option value="Canada">Canada</option>
                          <option value="Russia">Russia</option>
                           </select>
                      </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
                    </div>
                   </form>
               </div>
            </div>
          </div>
      </main>              
<?php
include "footer.php";


