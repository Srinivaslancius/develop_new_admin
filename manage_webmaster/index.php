<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <title>Admin Panel</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/cosmos.min.css">
    <link rel="stylesheet" href="css/application.min.css">
  </head>
    <body class="layout" style="background:url(img/about_3.jpg) no-repeat; background-size:cover; ">
    
     <div class="site-content">
        <div class="panel panel-default" style="width: 76%;">
          <div class="panel-heading">
             <div class="clearfix"></div>
          <!-- display error message -->
          <?php if(isset($_GET['error']) && $_GET['error']=='fail') { ?>
          <div class="col-sm-8 col-sm-offset-2">
            <div class="alert alert-danger alert-icon-bg alert-dismissable" role="alert">
              <div class="alert-icon">
                <i class="zmdi zmdi-check"></i>
              </div>
              <div class="alert-message">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                  </span>
                </button>
                <strong>Oh snap!</strong> Entered Username or Password is incorrect!.
              </div>
            </div>
          </div>
          <?php } elseif(isset($_GET['error']) && $_GET['error']=='invalid') {  ?>
          <div class="col-sm-8 col-sm-offset-2">
            <div class="alert alert-danger alert-icon-bg alert-dismissable" role="alert">
              <div class="alert-icon">
                <i class="zmdi zmdi-check"></i>
              </div>
              <div class="alert-message">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">
                    <i class="zmdi zmdi-close"></i>
                  </span>
                </button>
                <strong>Oh snap!</strong> Invalid Request!.
              </div>
            </div>
          </div>
          <?php } else { ?>
           <h3 class="m-y-0">Login</h3>
          <?php } ?>
          <!-- end error message -->           

          </div>
          
          <div class="panel-body" style="height: 250px;">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <form autocomplete="off" method="post" action="login-script.php" data-toggle="validator">
                  <div class="form-group">
                    <label for="form-control-1">Email address</label>
                    <input type="email" class="form-control" id="form-control-2" placeholder="Email" name="admin_email" data-error="Please enter a valid email address." required >
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form-control-2">Password</label>
                    <input type="password" class="form-control" id="form-control-2" placeholder="Password" data-error="This field is required." required name="admin_password">
                  </div>                  
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  

    
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
  </body>
</html>