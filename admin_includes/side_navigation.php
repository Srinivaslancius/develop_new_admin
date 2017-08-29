    <?php 
        $currentFile = $_SERVER["PHP_SELF"];
        $parts = Explode('/', $currentFile);
        $page_name = $parts[count($parts) - 1];
    ?>
<div class="site-left-sidebar">
        <div class="sidebar-backdrop"></div>
        <div class="custom-scrollbar">
          <ul class="sidebar-menu">
            <li class="menu-title">Menu</li>
            <li class="with-sub ">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-home"></i>
                </span>
                <span class="menu-text">Dashboards</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="<?php if($page_name == 'dashboard.php') { echo "active"; } ?>"><a href="dashboard.php">Dashboards</a></li>
              </ul>
            </li>
            <li class="with-sub">
              <a href="#" aria-haspopup="true">
                <span class="menu-icon">
                  <i class="zmdi zmdi-border-all"></i>
                </span>
                <span class="menu-text">Users</span>
              </a>
              <ul class="sidebar-submenu collapse">
                <li class="menu-subtitle">Users</li>
                <li class="<?php if($page_name == 'admin_users.php') { echo "active"; } ?>"><a href="admin_users.php">Admin Users</a></li> 
                <li class="<?php if($page_name == 'users.php') { echo "active"; } ?>"><a href="users.php">Users</a></li>
              </ul>
            </li>  
 
            <li class="with-sub">
              <a href="banners.php" aria-haspopup="true">
                <span class="menu-icon">
                   <i class="zmdi zmdi-border-all"></i> 
                </span> 
                <span class="menu-text">Banners</span>
              </a>
            </li>  


          </ul>
        </div>
      </div>