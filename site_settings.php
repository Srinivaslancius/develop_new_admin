<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from big-bang-studio.com/cosmos/forms-form-controls.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2017 10:13:51 GMT -->
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
        <div class="navbar-header">
          <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" alt="" height="25">
            <span>cosmos</span>
          </a>
          <button class="navbar-toggler left-sidebar-toggle pull-left visible-xs" type="button">
            <span class="hamburger"></span>
          </button>
          <button class="navbar-toggler right-sidebar-toggle pull-right visible-xs-block" type="button">
            <i class="zmdi zmdi-long-arrow-left"></i>
            <div class="dot bg-danger"></div>
          </button>
          <button class="navbar-toggler pull-right visible-xs-block" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="more"></span>
          </button>
        </div>
        <div class="navbar-collapsible">
          <div id="navbar" class="navbar-collapse collapse">
            <button class="navbar-toggler left-sidebar-collapse pull-left hidden-xs" type="button">
              <span class="hamburger"></span>
            </button>
            <button class="navbar-toggler right-sidebar-toggle pull-right hidden-xs" type="button">
              <i class="zmdi zmdi-long-arrow-left"></i>
              <div class="dot bg-danger"></div>
            </button>
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
              <li class="nav-table dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell nav-icon">
                    <i class="zmdi zmdi-apps"></i>
                  </span>
                  <span class="hidden-md-up m-l-15">Applications</span>
                </a>
                <div class="dropdown-menu dropdown-apps custom-dropdown">
                  <div class="a-area">
                    <div class="row gutter-xs">
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="img/brands/dropbox.png" alt="">
                            </div>
                            <div class="ai-title">Dropbox</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="img/brands/github.png" alt="">
                            </div>
                            <div class="ai-title">Github</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="img/brands/wordpress.png" alt="">
                            </div>
                            <div class="ai-title">Wordpress</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="img/brands/gmail.png" alt="">
                            </div>
                            <div class="ai-title">Gmail</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="img/brands/drive.png" alt="">
                            </div>
                            <div class="ai-title">Drive</div>
                          </a>
                        </div>
                      </div>
                      <div class="col-xs-4">
                        <div class="a-item">
                          <a href="#">
                            <div class="ai-icon">
                              <img class="img-responsive" src="img/brands/dribbble.png" alt="">
                            </div>
                            <div class="ai-title">Dribbble</div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a href="#">View all apps</a>
                  </div>
                </div>
              </li>
              <li class="nav-table dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell nav-icon">
                    <i class="zmdi zmdi-notifications-none"></i>
                  </span>
                  <span class="hidden-md-up m-l-15">Notifications</span>
                  <span class="label label-success">3</span>
                </a>
                <div class="dropdown-menu custom-dropdown dropdown-notifications dropdown-menu-right">
                  <div class="dropdown-header">
                    <span>Notifications</span>
                    <a href="#" class="text-primary">Mark all as read</a>
                  </div>
                  <div class="n-items">
                    <div class="custom-scrollbar">
                      <div class="n-item">
                        <div class="ni-img">
                          <img class="img-circle" src="img/avatars/1.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="ni-text"><a href="#">John Doe</a> is now following <a href="#">Kate Morris</a>.</div>
                        <div class="ni-time">10 min</div>
                      </div>
                      <div class="n-item">
                        <div class="ni-img">
                          <img class="img-circle" src="img/avatars/2.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="ni-text"><a href="#">Alexander Olsen</a> liked post <a href="#">Getting Started with SASS</a>.</div>
                        <div class="ni-time">40 min</div>
                      </div>
                      <div class="n-item">
                        <div class="ni-img">
                          <img class="img-circle" src="img/avatars/3.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="ni-text"><a href="#">Linda Davis</a> commented post <a href="#">How to use Bower</a>.</div>
                        <div class="ni-time">3 hours</div>
                      </div>
                      <div class="n-item">
                        <div class="ni-img">
                          <img class="img-circle" src="img/avatars/4.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="ni-text"><a href="#">John Doe</a> is now following <a href="#">Kate Morris</a>.</div>
                        <div class="ni-time">10 min</div>
                      </div>
                      <div class="n-item">
                        <div class="ni-img">
                          <img class="img-circle" src="img/avatars/5.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="ni-text"><a href="#">Alexander Olsen</a> liked post <a href="#">Getting Started with SASS</a>.</div>
                        <div class="ni-time">40 min</div>
                      </div>
                      <div class="n-item">
                        <div class="ni-img">
                          <img class="img-circle" src="img/avatars/6.jpg" alt="" width="40" height="40">
                        </div>
                        <div class="ni-text"><a href="#">Linda Davis</a> commented post <a href="#">How to use Bower</a>.</div>
                        <div class="ni-time">3 hours</div>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a href="#">View all notifications</a>
                  </div>
                </div>
              </li>
              <li class="nav-table dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-cell nav-icon">
                    <i class="zmdi zmdi-email-open"></i>
                  </span>
                  <span class="hidden-md-up m-l-15">Messages</span>
                  <span class="label label-warning">7</span>
                </a>
                <div class="dropdown-menu custom-dropdown dropdown-messages dropdown-menu-right">
                  <div class="dropdown-header">
                    <span>Recent messages</span>
                    <a href="#" class="text-primary">New Message</a>
                  </div>
                  <div class="m-items">
                    <div class="custom-scrollbar">
                      <div class="m-item">
                        <a href="#">
                          <div class="mi-icon bg-warning">
                            <i class="zmdi zmdi-upload"></i>
                          </div>
                          <div class="mi-time">10 min</div>
                          <div class="mi-title">Upload status</div>
                          <div class="mi-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </a>
                      </div>
                      <div class="m-item">
                        <a href="#">
                          <div class="mi-icon bg-success">
                            <i class="zmdi zmdi-money"></i>
                          </div>
                          <div class="mi-time">40 min</div>
                          <div class="mi-title">Income</div>
                          <div class="mi-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </a>
                      </div>
                      <div class="m-item">
                        <a href="#">
                          <div class="mi-icon bg-primary">
                            <i class="zmdi zmdi-alert-triangle"></i>
                          </div>
                          <div class="mi-time">3 hours</div>
                          <div class="mi-title">New task</div>
                          <div class="mi-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </a>
                      </div>
                      <div class="m-item">
                        <a href="#">
                          <div class="mi-icon bg-warning">
                            <i class="zmdi zmdi-upload"></i>
                          </div>
                          <div class="mi-time">10 min</div>
                          <div class="mi-title">Upload status</div>
                          <div class="mi-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </a>
                      </div>
                      <div class="m-item">
                        <a href="#">
                          <div class="mi-icon bg-success">
                            <i class="zmdi zmdi-money"></i>
                          </div>
                          <div class="mi-time">40 min</div>
                          <div class="mi-title">Income</div>
                          <div class="mi-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </a>
                      </div>
                      <div class="m-item">
                        <a href="#">
                          <div class="mi-icon bg-primary">
                            <i class="zmdi zmdi-alert-triangle"></i>
                          </div>
                          <div class="mi-time">3 hours</div>
                          <div class="mi-title">New task</div>
                          <div class="mi-text text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a href="#">View all messages</a>
                  </div>
                </div>
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
    <div class="site-main">
      <div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
          <ul class="sidebar-menu">
            <li class="menu-title">Main</li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-home"></i>
                </span>
                <span class="menu-text">Dashboards</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Dashboards</li>
                <li><a href="index.html">Dashboard 1</a></li>
                <li><a href="dashboard-2.html">Dashboard 2</a></li>
                <li><a href="dashboard-3.html">Dashboard 3</a></li>
              </ul>
            </li>
            <li>
              <a href="page-layouts.html">
                <span class="menu-icon">
                  <i class="zmdi zmdi-view-web"></i>
                </span>
                <span class="menu-text">Page layouts</span>
              </a>
              <a href="site-settings.html">
                <span class="menu-icon">
                  <i class="zmdi zmdi-view-web"></i>
                </span>
                <span class="menu-text">Site Settings</span>
              </a>
            </li>
            <li class="menu-title">Components</li>
            <li>
              <a href="widgets.html">
                <span class="badge badge-success">27</span>
                <span class="menu-icon">
                  <i class="zmdi zmdi-widgets"></i>
                </span>
                <span class="menu-text">Widgets</span>
              </a>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-case"></i>
                </span>
                <span class="menu-text">UI Elements</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">UI Elements</li>
                <li><a href="ui-alerts.html">Alerts</a></li>
                <li><a href="ui-buttons.html">Buttons</a></li>
                <li><a href="ui-flags.html">Flags</a></li>
                <li><a href="ui-grid-system.html">Grid system</a></li>
                <li><a href="ui-icons.html">Icons</a></li>
                <li><a href="ui-modals.html">Modals</a></li>
                <li><a href="ui-notifications.html">Notifications</a></li>
                <li><a href="ui-panels.html">Panels</a></li>
                <li><a href="ui-progress-bars.html">Progress bars</a></li>
                <li><a href="ui-tabs-accordions.html">Tabs & accordions</a></li>
                <li><a href="ui-typography.html">Typography</a></li>
                <li><a href="ui-other.html">Other</a></li>
              </ul>
            </li>
            <li class="with-sub active">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-dot-circle-alt"></i>
                </span>
                <span class="menu-text">Forms</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Forms</li>
                <li class="active"><a href="forms-form-controls.html">Form controls</a></li>
                <li><a href="forms-form-layouts.html">Form layouts</a></li>
                <li><a href="forms-form-masks.html">Form masks</a></li>
                <li><a href="forms-form-validation.html">Form validation</a></li>
                <li><a href="forms-form-wizard.html">Form wizard</a></li>
                <li><a href="forms-material-form.html">Material form</a></li>
                <li><a href="forms-plugins.html">Plugins</a></li>
                <li><a href="forms-uploader.html">Uploader</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-border-all"></i>
                </span>
                <span class="menu-text">Tables</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Tables</li>
                <li><a href="tables-basic.html">Basic tables</a></li>
                <li><a href="tables-responsive.html">Responsive tables</a></li>
                <li><a href="tables-datatables.html">DataTables</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-chart-donut"></i>
                </span>
                <span class="menu-text">Charts</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Charts</li>
                <li><a href="charts-chartist.html">Chartist</a></li>
                <li><a href="charts-chartjs.html">Chart.js</a></li>
                <li><a href="charts-flot.html">Flot</a></li>
                <li><a href="charts-morris.html">Morris</a></li>
                <li><a href="charts-peity.html">Peity</a></li>
              </ul>
            </li>
            <li class="menu-title">Pages</li>
            <li>
              <a href="messenger.html">
                <span class="badge badge-warning">new</span>
                <span class="menu-icon">
                  <i class="zmdi zmdi-comment-outline"></i>
                </span>
                <span class="menu-text">Messenger</span>
              </a>
            </li>
            <li>
              <a href="mailbox.html">
                <span class="menu-icon">
                  <i class="zmdi zmdi-email-open"></i>
                </span>
                <span class="menu-text">Mailbox</span>
              </a>
            </li>
            <li>
              <a href="contacts.html">
                <span class="menu-icon">
                  <i class="zmdi zmdi-accounts-alt"></i>
                </span>
                <span class="menu-text">Contacts</span>
              </a>
            </li>
            <li>
              <a href="profile.html">
                <span class="menu-icon">
                  <i class="zmdi zmdi-account"></i>
                </span>
                <span class="menu-text">Profile</span>
              </a>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-shopping-cart"></i>
                </span>
                <span class="menu-text">E-commerce</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">E-commerce</li>
                <li><a href="e-commerce-store.html">Store</a></li>
                <li><a href="e-commerce-product.html">Product</a></li>
                <li><a href="e-commerce-cart.html">Cart</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-pin"></i>
                </span>
                <span class="menu-text">Maps</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Maps</li>
                <li><a href="maps-vector.html">Vector</a></li>
                <li><a href="maps-google.html">Google</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-layers"></i>
                </span>
                <span class="menu-text">Other pages</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Other pages</li>
                <li><a href="pages-blank.html">Blank page</a></li>
                <li><a href="pages-signup.html">Sign up</a></li>
                <li><a href="pages-login.html">Login</a></li>
                <li><a href="pages-reset-password.html">Reset password</a></li>
                <li><a href="pages-403.html">403</a></li>
                <li><a href="pages-404.html">404</a></li>
                <li><a href="pages-500.html">500</a></li>
                <li><a href="pages-calendar.html">Calendar</a></li>
                <li><a href="pages-invoice.html">Invoice</a></li>
              </ul>
            </li>
            <li class="menu-title">Tags</li>
            <li>
              <a href="documentation.html">
                <span class="menu-icon">
                  <i class="zmdi zmdi-circle text-success"></i>
                </span>
                <span class="menu-text">Documentation</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="menu-icon">
                  <i class="zmdi zmdi-circle text-warning"></i>
                </span>
                <span class="menu-text">Questions</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span class="menu-icon">
                  <i class="zmdi zmdi-circle text-danger"></i>
                </span>
                <span class="menu-text">Website</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="site-right-sidebar">
        <div class="custom-scrollbar">
          <ul class="nav nav-tabs" role="tablist">
            <li class="active">
              <a href="#tab-chat" data-toggle="tab" role="tab">Chat</a>
            </li>
            <li class="nav-item">
              <a href="#tab-todo" data-toggle="tab" role="tab">Todo</a>
            </li>
            <li class="nav-item">
              <a href="#tab-settings" data-toggle="tab" role="tab">Settings</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-chat" role="tabpanel">
              <div class="sidebar-chat animated fadeIn">
                <ul class="media-list">
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/2.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-success"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Jonathan Mel</h5>
                        <p class="text-muted m-b-0">How are you?</p>
                      </div>
                      <div class="media-right">
                        <span class="badge bg-danger">2</span>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/3.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-warning"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Landon Graham</h5>
                        <p class="text-muted m-b-0">Meeting at 16:00 in the conference room.</p>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/4.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-success"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Ron Carran</h5>
                        <p class="text-muted m-b-0">No problem. Thank's for reminder!</p>
                      </div>
                      <div class="media-right">
                        <span class="badge bg-danger">5</span>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/5.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-success"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Airi Satou</h5>
                        <p class="text-muted m-b-0">No problem. The only thing i need is time.</p>
                      </div>
                      <div class="media-right">
                        <span class="badge bg-danger">2</span>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/6.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-warning"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Angelica Ramos</h5>
                        <p class="text-muted m-b-0">Yep. We talked about it this morning.</p>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/7.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-success"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Ashton Cox</h5>
                        <p class="text-muted m-b-0">Can't wait for the public launch!</p>
                      </div>
                      <div class="media-right">
                        <span class="badge bg-danger">5</span>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/8.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-success"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Bradley Greer</h5>
                        <p class="text-muted m-b-0">Ok. Just let me know.</p>
                      </div>
                      <div class="media-right">
                        <span class="badge bg-danger">2</span>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/9.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-warning"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Brenden Wagner</h5>
                        <p class="text-muted m-b-0">Fantastic...</p>
                      </div>
                    </a>
                  </li>
                  <li class="media">
                    <a href="#">
                      <div class="media-left">
                        <div class="avatar box-40">
                          <img class="img-circle" src="img/avatars/10.jpg" alt="" width="40" height="40">
                          <span class="status top right bg-success"></span>
                        </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Wolfe Stevie</h5>
                        <p class="text-muted m-b-0">I know. Fingers crossed!</p>
                      </div>
                      <div class="media-right">
                        <span class="badge bg-danger">5</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="sidebar-chat-window animated fadeIn">
                <div class="clearfix m-b-30">
                  <div class="pull-left">
                    <a class="text-primary" href="#">
                      <i class="zmdi zmdi-chevron-left m-r-5"></i>Chat list</a>
                  </div>
                  <div class="pull-right">
                    <strong>Jonathan Mel</strong>
                  </div>
                </div>
                <div class="scw-item">
                  <span>No problem. The only thing i need is time.</span>
                </div>
                <div class="scw-item self">
                  <span>Fantastic...</span>
                </div>
                <div class="scw-item">
                  <span>I know. Fingers crossed!</span>
                </div>
                <div class="scw-item self">
                  <span>Meeting at 16:00 in the conference room.</span>
                </div>
                <div class="scw-item">
                  <span>Can't wait for the public launch!</span>
                </div>
                <div class="scw-form">
                  <form>
                    <input class="form-control" type="text" placeholder="Message...">
                    <button class="btn btn-default" type="button">
                      <i class="zmdi zmdi-chevron-right"></i>
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-todo" role="tabpanel">
              <div class="sidebar-todo animated fadeIn">
                <div class="t-group">
                  <h5>Important</h5>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode" checked="checked">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Meet graphic designer</span>
                    </label>
                  </div>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Interview</span>
                    </label>
                  </div>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Press release</span>
                    </label>
                  </div>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode" checked="checked">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Call Bob</span>
                    </label>
                  </div>
                </div>
                <div class="t-group">
                  <h5>Secondary</h5>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Design mock-up</span>
                    </label>
                  </div>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Lunch with Marie</span>
                    </label>
                  </div>
                  <div class="t-item">
                    <label class="custom-control custom-control-primary custom-checkbox">
                      <input class="custom-control-input" type="checkbox" name="mode" checked="checked">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-label">Copywriting</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-settings" role="tabpanel">
              <div class="sidebar-settings animated fadeIn">
                <div class="s-group">
                  <h5>Main</h5>
                  <div class="s-item">
                    <div class="text-truncate">Allow commenting</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input" checked="checked">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="s-item">
                    <div class="text-truncate">Allow editing</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="s-item">
                    <div class="text-truncate">Allow copying</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="s-group">
                  <h5>Notificatiоns</h5>
                  <div class="s-item">
                    <div class="text-truncate">Comments</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="s-item">
                    <div class="text-truncate">Tasks</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input" checked="checked">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="s-group">
                  <h5>Security</h5>
                  <div class="s-item">
                    <div class="text-truncate">API Access</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input" checked="checked">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                  <div class="s-item">
                    <div class="text-truncate">Unlimited workspace</div>
                    <div class="si-checkbox">
                      <label class="switch switch-primary">
                        <input type="checkbox" name="switches" class="s-input">
                        <span class="s-content">
                          <span class="s-track"></span>
                          <span class="s-handle"></span>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Basic form elements</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-1">Admin Title</label>
                    <div class="col-sm-9">
                      <input id="form-control-1" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-2">Rounded text input</label>
                    <div class="col-sm-9">
                      <input id="form-control-2" class="form-control input-pill" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-3">Thick text input</label>
                    <div class="col-sm-9">
                      <input id="form-control-3" class="form-control b-a-2" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-4">Password input</label>
                    <div class="col-sm-9">
                      <input id="form-control-4" class="form-control" type="password" value="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-5">Placeholder Input</label>
                    <div class="col-sm-9">
                      <input id="form-control-5" class="form-control" type="email" placeholder="Placeholder input text">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-6">Disabled Input</label>
                    <div class="col-sm-9">
                      <input id="form-control-6" class="form-control" type="text" placeholder="Disabled input text" disabled="disabled">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-7">Read only input</label>
                    <div class="col-sm-9">
                      <input id="form-control-7" class="form-control" type="email" value="Read only input text" readonly="readonly">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Static input</label>
                    <div class="col-sm-9">
                      <p class="form-control-static">email@example.com</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-8">Textarea</label>
                    <div class="col-sm-9">
                      <textarea id="form-control-8" class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-9">Select</label>
                    <div class="col-sm-9">
                      <select id="form-control-9" class="form-control">
                        <option value="corporate">Corporate</option>
                        <option value="creative">Creative</option>
                        <option value="ecommerce">eCommerce</option>
                        <option value="mobile">Mobile</option>
                        <option value="retail">Retail</option>
                        <option value="technology">Technology</option>
                        <option value="wedding">Wedding</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-10">Multiple select</label>
                    <div class="col-sm-9">
                      <select id="form-control-10" class="form-control" multiple="multiple">
                        <option value="c-plus-plus">C++</option>
                        <option value="css">CSS</option>
                        <option value="java">Java</option>
                        <option value="javascript">JavaScript</option>
                        <option value="php">PHP</option>
                        <option value="python">Python</option>
                        <option value="ruby">Ruby</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-11">File input</label>
                    <div class="col-sm-9">
                      <input id="form-control-11" type="file" accept="image/*" multiple="multiple">
                      <p class="help-block">
                        <small>Unlimited number of files can be uploaded to this field. Allowed types: png gif jpg jpeg.</small>
                      </p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Checkboxes and radios</label>
                    <div class="col-sm-9">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="signed" checked="checked"> Keep me signed in
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="period" value="day"> Day
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="period" value="week" checked="checked"> Week
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="period" value="month"> Month
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Custom form elements</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-21">Custom select</label>
                    <div class="col-sm-9">
                      <select id="form-control-21" class="custom-select">
                        <option value="" selected="selected">Day of the week</option>
                        <option value="1">Monday</option>
                        <option value="2">Tuesday</option>
                        <option value="3">Wednesday</option>
                        <option value="4">Thursday</option>
                        <option value="5">Friday</option>
                        <option value="6">Saturday</option>
                        <option value="7">Sunday</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-22">Custom file inputs</label>
                    <div class="col-sm-9">
                      <label class="btn btn-default file-upload-btn">
                        Choose file...
                        <input id="form-control-22" class="file-upload-input" type="file" name="files[]" multiple="multiple">
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                      <div class="input-group">
                        <input class="form-control" type="text" placeholder="Choose file...">
                        <span class="input-group-btn">
                          <label class="btn btn-primary file-upload-btn">
                            <input class="file-upload-input" type="file" name="file">
                            <i class="zmdi zmdi-attachment-alt"></i>
                          </label>
                        </span>
                      </div>
                      <p class="help-block">
                        <small>Click the button next to the input field.</small>
                      </p>
                    </div>
                  </div>
                  <div class="form-group m-b-20">
                    <label class="col-sm-3 control-label">Custom checkboxes</label>
                    <div class="col-sm-9">
                      <div class="custom-controls-stacked">
                        <label class="custom-control custom-control-default custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="custom" checked="checked">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label">Default</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-checkbox active">
                          <input class="custom-control-input" type="checkbox" name="custom" checked="checked">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label">Primary</span>
                        </label>
                        <label class="custom-control custom-control-success custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="custom" checked="checked">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label">Success</span>
                        </label>
                        <label class="custom-control custom-control-info custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="custom" checked="checked">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label">Info</span>
                        </label>
                        <label class="custom-control custom-control-warning custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="custom" checked="checked">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label">Warning</span>
                        </label>
                        <label class="custom-control custom-control-danger custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="custom" checked="checked">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label">Danger</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group m-b-20">
                    <label class="col-sm-3 control-label">Custom checkboxes validation states</label>
                    <div class="col-sm-9">
                      <div class="custom-controls-stacked">
                        <label class="custom-control custom-control-success custom-checkbox has-success">
                          <input class="custom-control-input" type="checkbox" name="validation">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label">With success</span>
                        </label>
                        <label class="custom-control custom-control-warning custom-checkbox has-warning">
                          <input class="custom-control-input" type="checkbox" name="validation">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label">With warning</span>
                        </label>
                        <label class="custom-control custom-control-danger custom-checkbox has-error">
                          <input class="custom-control-input" type="checkbox" name="validation">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label">With error</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group m-b-20">
                    <label class="col-sm-3 control-label">Button checkboxes</label>
                    <div class="col-sm-9">
                      <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default">
                          <input type="checkbox" name="buttonCheckboxes" autocomplete="off"> PHP
                        </label>
                        <label class="btn btn-default">
                          <input type="checkbox" name="buttonCheckboxes" autocomplete="off"> Ruby
                        </label>
                        <label class="btn btn-default">
                          <input type="checkbox" name="buttonCheckboxes" autocomplete="off"> Python
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group m-b-20">
                    <label class="col-sm-3 control-label">Switches</label>
                    <div class="col-sm-9">
                      <div class="switches-stacked">
                        <label class="switch">
                          <input type="checkbox" name="switches" class="s-input">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                        <label class="switch switch-primary">
                          <input type="checkbox" name="switches" class="s-input" checked="checked">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                        <label class="switch switch-success">
                          <input type="checkbox" name="switches" class="s-input" checked="checked">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                        <label class="switch switch-info">
                          <input type="checkbox" name="switches" class="s-input" checked="checked">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                        <label class="switch switch-warning">
                          <input type="checkbox" name="switches" class="s-input" checked="checked">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                        <label class="switch switch-danger">
                          <input type="checkbox" name="switches" class="s-input" checked="checked">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Custom radios</label>
                    <div class="col-sm-9">
                      <div class="custom-controls-stacked">
                        <label class="custom-control custom-control-primary custom-radio">
                          <input class="custom-control-input" type="radio" name="period" value="day">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label">Day</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                          <input class="custom-control-input" type="radio" name="period" value="week" checked="checked">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label">Week</span>
                        </label>
                        <label class="custom-control custom-control-primary custom-radio">
                          <input class="custom-control-input" type="radio" name="period" value="month">
                          <span class="custom-control-indicator"></span>
                          <span class="custom-control-label">Month</span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group m-b-20">
                    <label class="col-sm-3 control-label">Button radios</label>
                    <div class="col-sm-9">
                      <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-outline-primary active">
                          <input type="radio" name="buttonRadios" id="buttonRadios1" autocomplete="off" checked="checked"> PHP
                        </label>
                        <label class="btn btn-outline-primary">
                          <input type="radio" name="buttonRadios" id="buttonRadios2" autocomplete="off"> Ruby
                        </label>
                        <label class="btn btn-outline-primary">
                          <input type="radio" name="buttonRadios" id="buttonRadios3" autocomplete="off"> Python
                        </label>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Input sizing</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                <form class="form-horizontal">
                  <div class="form-group form-group-lg">
                    <label class="col-sm-3 control-label" for="form-control-12">Large label</label>
                    <div class="col-sm-9">
                      <input id="form-control-12" class="form-control" type="text" placeholder="Large input">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-13">Default label</label>
                    <div class="col-sm-9">
                      <input id="form-control-13" class="form-control" type="text" placeholder="Default input">
                    </div>
                  </div>
                  <div class="form-group form-group-sm">
                    <label class="col-sm-3 control-label" for="form-control-14">Small label</label>
                    <div class="col-sm-9">
                      <input id="form-control-14" class="form-control" type="text" placeholder="Small input">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Validation states</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-15">Success input</label>
                    <div class="col-sm-9 has-success has-feedback">
                      <input id="form-control-15" class="form-control" type="text">
                      <span class="form-control-feedback" aria-hidden="true">
                        <i class="zmdi zmdi-check"></i>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-16">Warning input</label>
                    <div class="col-sm-9 has-warning has-feedback">
                      <input id="form-control-16" class="form-control" type="text">
                      <span class="form-control-feedback" aria-hidden="true">
                        <i class="zmdi zmdi-alert-triangle"></i>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-17">Error input</label>
                    <div class="col-sm-9 has-error has-feedback">
                      <input id="form-control-17" class="form-control" type="text">
                      <span class="form-control-feedback" aria-hidden="true">
                        <i class="zmdi zmdi-close"></i>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-18">Input with help text</label>
                    <div class="col-sm-9 has-error has-feedback">
                      <input id="form-control-18" class="form-control" type="email" value="email@example.com">
                      <span class="form-control-feedback" aria-hidden="true">
                        <i class="zmdi zmdi-close"></i>
                      </span>
                      <p class="help-block">Please enter a valid email address</p>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-19">Checkbox</label>
                    <div class="col-sm-9">
                      <div class="has-success">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" id="checkboxSuccess" value="option1"> Checkbox with success
                          </label>
                        </div>
                      </div>
                      <div class="has-warning">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" id="checkboxWarning" value="option1"> Checkbox with warning
                          </label>
                        </div>
                      </div>
                      <div class="has-error">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" id="checkboxError" value="option1"> Checkbox with error
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default m-b-0">
          <div class="panel-heading">
            <h3 class="m-y-0">Input groups</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="col-sm-3 control-label" for="form-control-20">Input addons</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input id="form-control-20" class="form-control" type="text" placeholder="Domain name">
                        <span class="input-group-addon">.com</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-account"></i>
                        </span>
                        <input class="form-control" type="text" placeholder="Username">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-lock"></i>
                        </span>
                        <input class="form-control" type="password" placeholder="Password">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Button addons</label>
                    <div class="col-sm-9">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="button">
                            <i class="zmdi zmdi-search"></i>
                          </button>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                      <div class="input-group">
                        <div class="input-group-btn">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                        <input class="form-control" type="text" value="New project title">
                        <span class="input-group-btn">
                          <button class="btn btn-primary" type="button">Create!</button>
                        </span>
                      </div>
                    </div>
                  </div>
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

<!-- Mirrored from big-bang-studio.com/cosmos/forms-form-controls.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Aug 2017 10:13:51 GMT -->
</html>