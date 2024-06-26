<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | AFRU VOTES</title>
    <link rel="stylesheet" href="dist/css/LoginStyle.css">

    <style>
        body {
    /* background-image: url('img/background.jpg'); */
    background-size: cover;
    background-color: maroon;
     }
        .container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;

            /* right: -20%; */

            width: 400px;
            height: 580px;
            box-shadow: 0 0 60px #000;
            border-radius: 30px;
        }

        p {
            margin-top: 10px;
            color: white;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="login-box">
            <img src="images/afru logo.jpg" style="border-radius: 50%; height: 100px; width: 100px; position: relative; display: flex;
    justify-content: center;
    align-items: center;"> <br>
            <h2 style="color: white; text-align: center; text-shadow: 2px 2px 5px blue;">Recover Password</h2>

            <form action="#" method="POST">
                <p>Please enter your account email address below and click "Reset my Password" button.</p>
                <p>You will recieve an email containing a link to reset your password</p>
                
                <div class="input-box">
                    <input type="text" required>
                    <label>Enter your Full Name</label>
                </div>

                <div class="input-box">
                    <input type="email" required>
                    <label>Enter your Email</label>
                </div>


                <button type="submit" class="btn" onclick="javascript:alert('Email sent successfully with reset Link')">Reset my Password</button>

                <div class="forgot-pass"> <br><br>
                    <a href="index.php">Return to Login Page</a>
                </div>


            </form>
        </div>


    </div>

</body>

</html>