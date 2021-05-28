<?php
require 'includes/common.php';
if (isset($_SESSION['email_id']))
{
    header('Products.php');
}
?>
<!DOCTYPE html>
<!--Login page for LifeStyle Store-->
<html>
    <head>
        <title>Login for LifeStyle Store</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Extrenal Stylesheet -->
        <link rel="stylesheet" type="text/css" href="Bootstarp_Assignment_style.css">
    </head>
    <body>
        <!-- Header for website -->
        <?Php
        require 'includes/header.php';
        ?>
 
        <!-- Login form -->
        <div class="container">
            <div class='row row-style'>
                <div class="col-xs-offset-4 col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><b>LOGIN</b></h4>
                    </div>
                    <div class="panel-body">
                        <p class='text-warning'><i>Login to make purchase.</i></p>
                    <div class="text-content">
                    <form action="login_submit.php" method="POST">
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    </div>
                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account?<b><a href="signup.php">Sign Up with us.</a></b></p>
                     </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer of website -->
        <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>
