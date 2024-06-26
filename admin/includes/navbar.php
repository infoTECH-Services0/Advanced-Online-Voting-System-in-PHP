<header class="main-header">
  <!-- Logo -->
  <a href="#" style="background-color: rgb(40, 2, 2);" class="logo">

    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>AFRU</b></span>

    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>ADMIN</b> Panel</span>
  </a>


  <!-- Header Navbar: style found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>



    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color:rgb(70,15,15);">
            <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"> <b> <?php echo $user['firstname'].' '.$user['lastname']; ?> </b></span>
          </a>

          <ul class="dropdown-menu">

            <!-- Admin Profile and image -->
            <li class="user-header">
              <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">

              <p>
                <?php echo $user['firstname'].' '.$user['lastname']; ?>
                <small>Member since <?php echo date('D d, M. Y', strtotime($user['created_on'])); ?></small>
              </p>
            </li>

            <li class="user-footer">
              <div class="pull-left">
                <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Update</a>
              </div>
              <div class="pull-right">
                <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>

          </ul>
        </li>
      </ul>
    </div>

  </nav>
</header>
<?php include 'includes/profile_modal.php'; ?>