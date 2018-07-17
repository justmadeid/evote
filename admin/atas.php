  <header class="main-header bg-teal">
    <!-- Logo -->
    <a href="#" class="logo" style="background: #e74c3c;text-decoration: none; font-size: 25px;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="img/jm.png" width="50px;"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="img/jmi.png" width="50px;"> Project Inventory</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background: #fff;box-shadow: 0px 5px #dcdde1;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="background: #fff; color: #e74c3c;">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu" style="color: #000;">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php
                 if(isset($_SESSION['username'])){
                  $username = $_SESSION['username'];
    echo "<img src='img/user.png' class='user-image' alt='User Image'>
    <span class='hidden-xs' style='color: #000;''>HI, $username</a></span>";
  }
  else {
    echo "<span class='hidden-xs'>LOGIN</span>";
  }
  ?>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header" style="background: url(img/ok.jpg);">
                <img src="img/user.png" class="img-circle" alt="User Image">

              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Ubah Password</a>
                </div>
                <div class="pull-right">
                  <a href="config/signout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>