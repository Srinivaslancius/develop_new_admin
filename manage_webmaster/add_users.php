<?php include_once 'admin_includes/main_header.php'; ?>
<?php
error_reporting(0);  
if (!isset($_POST['submit']))  {
  //If fail
  echo "fail";
} else  {
  //If fail
    //Save data into database
    /*echo "<pre>";
    print_r($_POST);die;*/
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = encryptPassword($_POST['user_password']);
    $user_mobile = $_POST['user_mobile'];
    $street_name = $_POST['street_name'];
    $street_no = $_POST['street_no'];
    $flat_name = $_POST['flat_name'];
    $flat_no = $_POST['flat_no'];
    $location = $_POST['location'];
    $landmark = $_POST['landmark'];
    $pincode = $_POST['pincode'];
    $created_admin_id = $_SESSION['admin_user_id'];
    $created_at = date("Y-m-d h:i:s");
    
    $sql = "INSERT INTO users (`user_name`, `user_email`, `user_password`,`user_mobile`,`street_name`,`street_no`,`flat_name`,`flat_no`,`location`,`landmark`,`pincode`,`created_admin_id`, `created_at`, `status`) VALUES ('$user_name', '$user_email','$user_password','$user_mobile','$street_name','$street_no','$flat_name','$flat_no','$location','$landmark','$pincode','$created_admin_id','$created_at', 0)";
    if($conn->query($sql) === TRUE){
       echo "<script type='text/javascript'>window.location='users.php?msg=success'</script>";
    } else {
       echo "<script type='text/javascript'>window.location='users.php?msg=fail'</script>";
    }
}
?>
      <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Users</h3>
          </div>
          <div class="panel-body">            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="POST">
                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Name</label>
                    <input type="text" name="user_name" class="form-control" id="form-control-2" placeholder="User Name" data-error="Please enter user name." required autofocus="on">
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Email</label>
                    <input type="email" name="user_email" class="form-control" id="form-control-2" placeholder="Email" data-error="Please enter a valid email address." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Password</label>
                    <input type="password" name="user_password" class="form-control" id="form-control-2" placeholder="Password" data-error="Please enter password." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Mobile</label>
                    <input type="text" name="user_mobile" class="form-control" id="form-control-2" placeholder="Mobile" data-error="Please enter mobile number." required maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)">
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Street Name</label>
                    <input type="text" name="street_name" class="form-control" id="form-control-2" placeholder="Street Name" data-error="Please enter street name." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Street Number</label>
                    <input type="text" name="street_no" class="form-control" id="form-control-2" placeholder="Street Name" data-error="Please enter street number." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Flat Name</label>
                    <input type="text" name="flat_name" class="form-control" id="form-control-2" placeholder="Street Name" data-error="Please enter flat name." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">flat Number</label>
                    <input type="text" name="flat_no" class="form-control" id="form-control-2" placeholder="Street Name" data-error="Please enter flat number." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Location</label>
                    <input type="text" name="location" class="form-control" id="form-control-2" placeholder="Location" data-error="Please enter your location." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Landmark</label>
                    <input type="text" name="landmark" class="form-control" id="form-control-2" placeholder="Landmark" data-error="Please enter your landmark." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Pincode</label>
                    <input type="text" name="pincode" class="form-control" id="form-control-2" placeholder="Pincode" data-error="Please enter pincode number." required maxlength="6" onkeypress="return isNumberKey(event)">
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
<script type="text/javascript">
  function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }
</script>