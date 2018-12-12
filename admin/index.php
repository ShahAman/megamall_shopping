<?php 
require_once("config/default.php");
require_once("control/control.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Login</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form method="post" class="form-signin" action="">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">SuperStore Admin</h1>
            <img src="images/login-logo.png" alt="" />
        </div>
			<?php 
				if( isset($_POST['do_login']) )
				{
					$loginResult = $control->do_login($_POST['user_name'], $_POST['pass_word']);

					if($loginResult['status'] == true)
					{
						$_SESSION['SSA_USERNAME'] = $loginResult['data']['admin_user'];
						$_SESSION['SSA_FULLNAME'] = $loginResult['data']['admin_name'];
						$_SESSION['SSA_TYPE'] = $loginResult['data']['admin_type'];
						header("Location: dashboard.php");
					}
					else
						echo "<div class='alert alert-danger text-center'>Please try correct username/password!</div>";
				}
			?>
			
		<!-- LOGIN FORM -->
        <div class="login-wrap">
            <input name="user_name" placeholder="Your Username" type="text" class="form-control" placeholder="Username" autofocus>
            <input name="pass_word" placeholder="Your Password" type="password" class="form-control" placeholder="Password">

            <button name="do_login" class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>
        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>

</body>

</html>
