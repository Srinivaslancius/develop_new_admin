<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from big-bang-studio.com/cosmos/forms-form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2017 10:13:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <title>Cosmos</title>
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/cosmos.min.css">
    <link rel="stylesheet" href="css/application.min.css">
  </head>
  <body class="layout layout-header-fixed layout-left-sidebar-fixed">
    <div class="site-overlay"></div>
    <div class="site-header">
      <nav class="navbar navbar-default">
        <div class="navbar-collapsible">
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="visible-xs-block">
                <div class="nav-avatar">
                  <img class="img-circle" src="img/avatars/1.jpg" alt="" width="48" height="48">
                </div>
                <h4 class="navbar-text text-center">Welcome, Jon Snow!</h4>
              </li>
            </ul>
            <form class="navbar-form navbar-left">
              <div class="navbar-search-group">
                <input type="text" class="form-control" placeholder="Search">
                <button type="submit" class="btn btn-default">
                  <i class="zmdi zmdi-search"></i>
                </button>
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-table dropdown visible-xs-block">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell nav-icon">
                    <i class="zmdi zmdi-account-o"></i>
                  </span>
                  <span class="hidden-md-up m-l-15">Account</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">Settings</a></li>
                  <li><a href="#">Help</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
              <li class="nav-table dropdown hidden-sm-down">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell p-r-10">
                    <img class="img-circle" src="img/avatars/1.jpg" alt="" width="32" height="32">
                  </span>
                  <span class="nav-cell">Jon Snow
                    <span class="caret"></span>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#">
                      <i class="zmdi zmdi-account-o m-r-10"></i> Profile</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="zmdi zmdi-settings m-r-10"></i> Settings</a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="zmdi zmdi-help-outline m-r-10"></i> Help</a>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="#">
                      <i class="zmdi zmdi-power m-r-10"></i> Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    
      <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Vertical form</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <form autocomplete="off" method="post" action="login-script.php">
                  <div class="form-group">
                    <label for="form-control-1">Email address</label>
                    <input type="email" autofocus="autofocus" class="form-control" id="form-control-1" placeholder="Email" name="admin_email" data-error="This field is required." required >
                  </div>
                  <div class="form-group">
                    <label for="form-control-2">Password</label>
                    <input type="password" class="form-control" id="form-control-2" placeholder="Password" data-error="This field is required." required name="admin_password">
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-control-primary custom-checkbox active">
                      <input class="custom-control-input" type="checkbox" name="mode" checked="checked">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Keep me signed in</span>
                    </label>
                    <a href="#" class="pull-right">Forgot password?</a>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-footer">
        2017 © Cosmos
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
  </body>

<!-- Mirrored from big-bang-studio.com/cosmos/forms-form-layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2017 10:13:51 GMT -->
</html>