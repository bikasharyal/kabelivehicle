<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kabeli - Admin Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/admin.png"/>

    <!--===============================================================================================
    -->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/login_style.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/img-01.jpg');">
        <div class="wrap-login100 p-t-30 p-b-30">

            <form method="post" action="./admin_login_process.php">

                <div class="login100-form-avatar">
                    <img src="images/admin.png" alt="AVATAR">
                </div>

                <span class="login100-form-title p-t-10 p-b-25">
						Admin Login
					</span>

                <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                </div>

                <div class="container-login100-form-btn p-t-10">
                    <button class="login100-form-btn" type="submit" name="admin_submit">
                        Login
                    </button>
                </div>


            </form>
        </div>
    </div>
</div>


</body>
</html>