<?php include_once 'admin_includes/main_header.php'; ?>

      <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Site Settings</h3>
          </div>
          <div class="panel-body">            
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator">

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Admin Title</label>
                    <input type="text" class="form-control" id="form-control-2" placeholder="Admin Title" data-error="Please enter a valid Title." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Email</label>
                    <input type="email" class="form-control" id="form-control-2" placeholder="Email" data-error="Please enter a valid email address." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Facebook Link</label>
                    <input type="text" class="form-control" id="form-control-2" placeholder="Facebook Link" data-error="Please enter a valid Facebook Link." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Instagram Link</label>
                    <input type="text" class="form-control" id="form-control-2" placeholder="Instagram Link" data-error="Please enter a valid Instagram Link." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Youtube Link</label>
                    <input type="text" class="form-control" id="form-control-2" placeholder="Youtube Link" data-error="Please enter a valid Youtube Link." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Mobile</label>
                    <input type="text" class="form-control" id="form-control-2" placeholder="Mobile" data-error="Please enter a valid Mobile." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose counrty</label>
                    <select id="form-control-3" class="custom-select" data-error="This field is required." required>
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
                  </div>                  

                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Banner</label>
                    <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input id="form-control-22" class="file-upload-input" type="file" name="files[]" multiple="multiple">
                      </label>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Footer Text</label>
                    <input type="text" class="form-control" id="form-control-2" placeholder="Footer Text" data-error="Please enter a valid Mobile." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-4" class="control-label">Address</label>
                    <textarea id="form-control-4" class="form-control" rows="3" data-error="This field is required." required></textarea>
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