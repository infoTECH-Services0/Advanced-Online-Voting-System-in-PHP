<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="dist/css/LoginStyle.css">
    <style>
    body {
    /* background-image: url('img/background.jpg'); */
    background-size: cover;
    background-color: maroon;
    }

   .container span {
    position: absolute;
    left: 0;
    width: 32px;
    height: 10px;
    background: yellow;
    border-radius: 50%;
    /* box-shadow: 0 0 5px blue; */
    transform-origin: 133px;  /***radius of the circle, higher pixel, larger circle ***/
    transform: scale(2.2) rotate(calc(var(--i) * (-360deg / 60)));
    animation: animateBlink 2s linear infinite;
    animation-delay: calc(var(--i) * (3s / 60));
    }

    @keyframes animateBlink {
    0% {
        background: cyan;
    }

    25% {
        background: rgba(2, 255, 255, 0.2);
        box-shadow: 0 0 2px yellow;
    }
    }

    </style>
</head>

<body>

    <div class="container">

        <div class="login-box">
            <div class="login-logo">
                <a href="admin/"><img src="images/afru logo.jpg" style="border-radius: 50%; height: 100px; width: 100px;"></a> <br>
                <h3 style="color: white; text-align: center; text-shadow: 2px 2px 5px blue;"><b>KAYE Voting System</b></h3>
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

            <form action="login.php" method="POST">

                <div class="input-box">
                    <input type="text"  name="voter" required>
                    <label>Enter your Registration No</label>
                </div>


                <div class="input-box">
                    <input type="password" name="password" required>
                    <label>Enter Password</label>
                </div>


                <button type="submit" class="btn" name="login">Login</button><br /><br>

                <div class="forgot-pass">
                    <!-- replace chat/ with forgot-pass.php -->
                    <a href="chat/" target="_blank">Forgot login Password?</a>
                </div>

            </form>
        </div>

       <div> 
            <span style="--i:0;"></span>
            <span style="--i:1;"></span>
            <span style="--i:2;"></span>
            <span style="--i:3;"></span>
            <span style="--i:4;"></span>
            <span style="--i:5;"></span>
            <span style="--i:6;"></span>
            <span style="--i:7;"></span>
            <span style="--i:8;"></span>
            <span style="--i:9;"></span>
            <span style="--i:10;"></span>
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:13;"></span>
            <span style="--i:14;"></span>
            <span style="--i:15;"></span>
            <span style="--i:16;"></span>
            <span style="--i:17;"></span>
            <span style="--i:18;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:21;"></span>
            <span style="--i:22;"></span>
            <span style="--i:23;"></span>
            <span style="--i:24;"></span>
            <span style="--i:25;"></span>
            <span style="--i:26;"></span>
            <span style="--i:27;"></span>
            <span style="--i:28;"></span>
            <span style="--i:29;"></span>
            <span style="--i:30;"></span>
            <span style="--i:31;"></span>
            <span style="--i:32;"></span>
            <span style="--i:33;"></span>
            <span style="--i:34;"></span>
            <span style="--i:35;"></span>
            <span style="--i:36;"></span>
            <span style="--i:37;"></span>
            <span style="--i:38;"></span>
            <span style="--i:39;"></span>
            <span style="--i:40;"></span>
            <span style="--i:41;"></span>
            <span style="--i:42;"></span>
            <span style="--i:43;"></span>
            <span style="--i:44;"></span>
            <span style="--i:45;"></span>
            <span style="--i:46;"></span>
            <span style="--i:47;"></span>
            <span style="--i:48;"></span>
            <span style="--i:49;"></span>
            <span style="--i:50;"></span>
            <span style="--i:51;"></span>
            <span style="--i:52;"></span>
            <span style="--i:53;"></span>
            <span style="--i:54;"></span>
            <span style="--i:55;"></span>
            <span style="--i:56;"></span>
            <span style="--i:57;"></span>
            <span style="--i:58;"></span>
            <span style="--i:59;"></span>
      </div>

     
    </div>
    </div>

</body>

</html>