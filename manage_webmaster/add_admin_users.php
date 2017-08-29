<?php include_once 'admin_includes/main_header.php'; ?>
<?php 
    error_reporting(0);
  if (!isset($_POST['submit']))  {
              echo "";
          } else  { 

      $admin_name = $_POST['admin_name'];
      $admin_email = $_POST['admin_email'];
      $admin_password = encryptPassword($_POST['admin_password']);
      $created_at = date("Y-m-d h:i:s");
      $status = $_POST['status'];
      $sql = "INSERT INTO admin_users (`admin_name`, `admin_email`, `admin_password`, `created_at`, `status`) VALUES ('$admin_name', '$admin_email', '$admin_password','$created_at','$status')";
      if($conn->query($sql) === TRUE){
         echo "<script>alert('Data Updated Successfully');window.location.href='admin_users.php';</script>";
      } else {
         echo "<script>alert('Data Updation Failed');window.location.href='admin_users.php';</script>";
      }
  }
?>
      <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Admin Users</h3>
          </div>
          <div class="panel-body">            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="POST">

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Admin Name</label>
                    <input type="text" name="admin_name" class="form-control" id="form-control-2" placeholder="Admin Name" data-error="Please enter a valid User Name" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Email</label>
                    <input type="email" name="admin_email" class="form-control" id="form-control-2" placeholder="Email" data-error="Please enter a valid email address." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Password</label>
                    <input type="password" name="admin_password" class="form-control" id="form-control-2" placeholder="Password" data-error="Please enter Correct Password." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <?php $getStatus = getDataFromTables('user_status',$status=NULL,$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="">Select Status</option>
                      <?php while($row = $getStatus->fetch_assoc()) {  ?>
                          <option value="<?php echo $row['id']; ?>"><?php echo $row['status']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>                  
                
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
            <hr>           
          </div>
        </div>
      </div>
  
<?php include_once 'admin_includes/footer.php'; ?>