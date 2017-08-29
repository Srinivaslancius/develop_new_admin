<?php include_once 'admin_includes/main_header.php'; ?>

<?php  if (!isset($_POST['submit']))  {
            echo "";
        } else  {


            $title = $_POST['title'];
            $fileToUpload = $_FILES["fileToUpload"]["name"];
            $status = $_POST['status'];
            
            if($fileToUpload!='') {

                $target_dir = "uploads/banner_images/";
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $sql = "INSERT INTO banners (`title`, `banner`, `status`) VALUES ('$title', '$fileToUpload','$status')";
                    if($conn->query($sql) === TRUE){
                       echo "<script>alert('Data Updated Successfully');window.location.href='banners.php';</script>";
                    } else {
                       echo "<script>alert('Data Updation Failed');window.location.href='banners.php';</script>";
                    }
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }            
            
        }
?>
		<div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Banners</h3>
          </div>
          <div class="panel-body">            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Title</label>
                    <input type="text" class="form-control" id="form-control-2" name="title" placeholder="Title" data-error="Please enter title." required>
                    <div class="help-block with-errors"></div>
                  </div>
				  <div class="form-group">
                    <label for="form-control-4" class="control-label">Banner</label>
                    <img id="output" height="100" width="100"/>
                    <label class="btn btn-default file-upload-btn">
						Choose file...
                          <input id="form-control-22" class="file-upload-input" type="file" accept="image/*" name="fileToUpload" id="fileToUpload"  onchange="loadFile(event)"  multiple="multiple" >
                      </label>
                  </div>
				  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose your status</label>
                    <select id="form-control-3" name="status" class="custom-select" data-error="This field is required." required>
                      <option value="" selected="selected">Choose your status</option>
                      <option value="1">Active</option>
                      <option value="2">In Active</option>
                      
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>  

                  <button type="submit" name="submit" value="Submit"  class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
            <hr>           
          </div>
        </div>
      </div>

      
      

      






