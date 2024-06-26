<aside class="main-sidebar" style="background-color: #800000">


  <!-- sidebar: style in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>

      <div class="pull-left info">
        <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header" style="background-color: #590000">REPORTS</li>
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class=""><a href="votes.php"><i class="glyphicon glyphicon-lock"></i> <span>Votes</span></a></li>
      <li class=""><a href="tally.php"><i class="fa fa-bar-chart"></i> <span>Results</span></a></li>

      <li class="header" style="background-color: #590000">MANAGE</li>
      <li class=""><a href="voters.php"><i class="fa fa-users"></i> <span>Voters</span></a></li>
      <li class=""><a href="positions.php"><i class="fa fa-sitemap"></i> <span>Positions</span></a></li>
      <li class=""><a href="candidates.php"><i class="fa fa-address-card-o"></i> <span>Candidates</span></a></li>

      <li class="header" style="background-color: #590000">SETTINGS</li>
      <li class=""><a href="ballot.php"><i class="fa fa-list-ol"></i> <span>Ballot Position</span></a></li>
      <li class=""><a href="#config" data-toggle="modal"><i class="fa fa-cogs"></i> <span>Election Title</span></a></li>
        <li class=""><a href="#schedule" data-toggle="modal"><i class="fa fa-calendar"></i> <span>Time schedule</span></a></li>

      <li class="header" style="background-color: #590000">EXIT</li>
        <li class=""><a href="logout.php"><i class="fa fa-power-off"></i> <span>LogOut</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>
<?php include 'schedule_modal.php'; ?>
