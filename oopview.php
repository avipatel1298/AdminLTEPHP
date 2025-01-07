
<?php
include "header.php";
include "sidebar.php";
include "config.php";
?>
<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Simple Tables</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
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
            <div class="row">
              <div class="">
                <div class="">
                  <div class="card-header"><h3 class="card-title">Bordered Table</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Confirm Password</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Phone Number</th>
                          <th>Gender</th>
                          <th>Hobby</th>
                          <th>Country</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                         
                           $fetchdata = new DB_con();
                            $sql=$fetchdata->fetchdata();
                            $cnt=1;
                            while($row=mysqli_fetch_array($sql))
                            {
                            ?>
                        <tr class="align-middle">
                        <th scope=""><?php echo $cnt?></th>
                          <td><?php echo htmlentities($row["firstname"]); ?></td>
                          <td><?php echo htmlentities($row["lastname"]); ?></td>
                          <td><?php echo htmlentities($row["email"]); ?></td>
                          <td><?php echo htmlentities($row["password"]); ?></td>
                          <td><?php echo htmlentities($row["cpassword"]); ?></td>
                          <td><img src="./image/<?php echo htmlentities($row['image']);?> " style="width: 50px; height: 50px;"></td>
                          <td><?php echo htmlentities($row["message"]); ?></td>
                          <td><?php echo htmlentities($row["number"]); ?></td>
                          <td><?php echo htmlentities($row["gender"]); ?></td>
                          <td><?php echo htmlentities($row["hobby"]); ?></td>
                          <td><?php echo htmlentities($row["country"]); ?></td>
                          <td><a class="btn btn-primary" href="oopedit.php?id=<?php echo htmlentities($row['id']); ?>">Edit</a>
                         <a class="btn btn-danger" href="oopdelete.php?id=<?php echo htmlentities($row['id']); ?>">delete</a>
                         </td>
                        </tr>
                      </tbody>
                      <?php $cnt++; } ?>
                    </table>
                  </div>
                  <!-- /.card-body -->
                
                <!-- /.card -->
               
                <!-- /.card -->
              </div>
              <!-- /.col -->
          
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      
      </main>
      
      <?php
      include "footer.php";
      ?>
 