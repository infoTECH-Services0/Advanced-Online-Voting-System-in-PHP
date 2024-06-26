<html>
<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition login-page" style="background-color: maroon">
<div class="login-box"
     style="     /*Floating the logo to the left corner for the background space area*/
        //float: left;
        //margin-left: 6%;
     ">
  	<div class="login-logo">
        <a href="../"><img src="../images/afru logo.jpg" style="border-radius: 50%; height: 100px; width: 100px;"> </a><br>
  		<h3 style="color: white"><b>KAYE Voting System</b></h3>
  	</div>
  
  	<div class="login-box-body"
         style="
            border-top-left-radius: 20%;
            border-bottom-right-radius: 30%;
            box-shadow: 0 0 20px #fff;
         ">
    	<p class="login-box-msg">Sign in as ELECTION Admin</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Admin Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Admin Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login" style="border-radius: 20px;"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>

</html>