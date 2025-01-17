
<?php
include "header.php";
include "sidebar.php";
include "connection.php";
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
                          <th>Images</th>
                          <th>Address</th>
                          <th>Phone Number</th>
                          <th>Gender</th>
                          <th>Country</th>
                          <th style="width: 40px">Action</th>
                        </tr>
                      </thead>
                     <tbody>
                       <?php  
                         $no;
                        $result = mysqli_query($conn,"SELECT * FROM `task`");  
                     while($row = mysqli_fetch_assoc($result))  {
                         $no=$no+1;                 
                    ?> 
                        <tr class="align-middle">
                        <th scope=""><?php echo $no?></th>
                          <td><?php echo $row["firstname"]; ?></td>
                          <td><?php echo $row["lastname"]; ?></td>
                          <td><?php echo $row["email"]; ?></td>
                          <td><?php echo $row["password"]; ?></td>
                          <td><?php echo $row["cpassword"]; ?></td>
                          <td><img src="./image/<?php echo $row['image'];?> " style="width: 50px; height: 50px;"></td>
                          <td><?php echo $row["message"]; ?></td>
                          <td><?php echo $row["number"]; ?></td>
                          <td><?php echo $row["gender"]; ?></td>
                          <td><?php echo $row["hobby"]; ?></td>
                          <td><?php echo $row["country"]; ?></td>
                          <td><a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                         <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">delete</a>
                         </td>
                        </tr>
                      </tbody>
                      <?php  } ?>
                    </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
   </main>
<?php
include "footer.php";
 