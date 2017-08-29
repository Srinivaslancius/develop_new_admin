<?php include_once 'admin_includes/main_header.php'; ?>

<?php  
 if (!isset($_POST['submit']))  {
            echo "";
    } else  {            
    $id=1;
    $admin_title = $_POST['admin_title'];  
    $email = $_POST['email'];
    $fb_link = $_POST['fb_link'];
    $twitter_link = $_POST['twitter_link'];
    $gplus_link = $_POST['gplus_link'];
    $mobile = $_POST['mobile'];
    $delivery_charges = $_POST['delivery_charges'];
    $packaging_charges = $_POST['packaging_charges'];
    $footer_text = $_POST['footer_text'];
    $address = $_POST['address'];
    if($_FILES["logo"]["name"]!='') {
                                          
        $logo = $_FILES["logo"]["name"];        
        $target_dir = "../uploads/logo/";
        $target_file = $target_dir . basename($_FILES["logo"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        $getImgUnlink = getImageUnlink('logo','site_settings','id',$id,$target_dir);
        //Send parameters for img val,tablename,clause,id,imgpath for image ubnlink from folder

        if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
            $sql = "UPDATE `site_settings` SET admin_title = '$admin_title', email='$email', fb_link='$fb_link', twitter_link='$twitter_link', gplus_link='$gplus_link', mobile='$mobile', delivery_charges='$delivery_charges',packaging_charges='$packaging_charges', logo = '$logo', footer_text='$footer_text', address='$address' WHERE id = '$id' ";
            if($conn->query($sql) === TRUE){
               echo "<script>alert('Data Updated Successfully');window.location.href='site_settings.php';</script>";
            } else {
               echo "<script>alert('Data Updation Failed');window.location.href='site_settings.php';</script>";
            }
            //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }  else {
        $sql = "UPDATE `site_settings` SET admin_title = '$admin_title', email='$email', fb_link='$fb_link', twitter_link='$twitter_link', gplus_link='$gplus_link', mobile='$mobile',delivery_charges='$delivery_charges',packaging_charges='$packaging_charges', footer_text='$footer_text', address='$address' WHERE id = '$id' ";
        if($conn->query($sql) === TRUE){
           echo "<script>alert('Data Updated Successfully');window.location.href='site_settings.php';</script>";
        } else {
           echo "<script>alert('Data Updation Failed');window.location.href='site_settings.php';</script>";
        }
    }   
    
}
?>

      <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Site Settings</h3>
          </div>
          <div class="panel-body">            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <?php $getSiteSettings = getDataFromTables('site_settings',$status=NULL,$clause='id',$id=1,$activeStatus=NULL,$activeTop=NULL); 
                  $getSiteSettingsData = $getSiteSettings->fetch_assoc(); ?>
                <form data-toggle="validator">

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Admin Title</label>
                    <input type="text" name="admin_title" class="form-control" id="form-control-2" placeholder="Admin Title" data-error="Please enter a valid Title." value="<?php echo $getSiteSettingsData['admin_title'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Email</label>
                    <input type="email" name="email" class="form-control" id="form-control-2" placeholder="Email" data-error="Please enter a valid email address." value="<?php echo $getSiteSettingsData['email'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Facebook Link</label>
                    <input type="text" name="fb_link" class="form-control" id="form-control-2" placeholder="Facebook Link" data-error="Please enter a valid Facebook Link." value="<?php echo $getSiteSettingsData['fb_link'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Instagram Link</label>
                    <input type="text" name="twitter_link" class="form-control" id="form-control-2" placeholder="Instagram Link" data-error="Please enter a valid Instagram Link." value="<?php echo $getSiteSettingsData['twitter_link'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Youtube Link</label>
                    <input type="text" name="gplus_link" class="form-control" id="form-control-2" placeholder="Youtube Link" data-error="Please enter a valid Youtube Link." value="<?php echo $getSiteSettingsData['gplus_link'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Mobile</label>
                    <input type="text" name="mobile" class="form-control" id="form-control-2" placeholder="Mobile" data-error="Please enter a valid Mobile." value="<?php echo $getSiteSettingsData['mobile'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <!-- <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose counrty</label>
                    <select id="form-control-3" class="custom-select" data-error="This field is required." value="<?php echo $getSiteSettingsData['admin_title'];?>" required>
                      <option value="" selected="selected">Choose counrty</option>
                      <option value="1">Denmark</option>
                      <option value="2">Iceland</option>
                      <option value="3">Republic of Macedonia</option>
                      <option value="4">Saint Kitts and Nevis</option>
                      <option value="5">Vanuatu</option>
                      <option value="6">Yemen</option>
                      <option value="7">Zimbabwe</option>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>  -->           

                  <div class="form-group">
                    <img src="<?php echo $base_url . 'uploads/logo/'.$getSiteSettingsData['logo'] ?>" height="100" width="100" id="output"/>
                  </div>      

                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Banner</label>
                    <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input name="admin_title" id="form-control-22" class="file-upload-input" type="file" name="files[]" multiple="multiple">
                      </label>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Footer Text</label>
                    <input type="text" name="footer_text" class="form-control" id="form-control-2" placeholder="Footer Text" data-error="Please enter a valid Mobile." value="<?php echo $getSiteSettingsData['footer_text'];?>" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Address</label>
                    <textarea id="form-control-4" name="address" class="form-control" rows="3" data-error="This field is required." value="<?php echo $getSiteSettingsData['address'];?>" required></textarea>
                    <div class="help-block with-errors">Write some details about yourself.</div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
            <hr>           
          </div>
        </div>
      </div>
  
<?php include_once 'admin_includes/footer.php'; ?>