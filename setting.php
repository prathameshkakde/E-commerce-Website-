<?php
	require './includes/common.php';
	// check  if logged in
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<!--Setting page-->
<html>
    <head>
        <title> Settings for LifeStyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        include 'includes/header.php';
        ?>
        
        <!-- Setting Form -->
        <div class="container">
            <div class="row row-style">
                <div class="col-xs-offset-4 col-xs-4 col-xs-offset-4">
                    <h4><b>Change Password</b></h4>
                    <form actiom="settings_script.php" method="post">
						<div class="form-group">
							<input type="password" class="form-control" name="old_pass" placeholder="Old Password" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="new_pass" placeholder="New Password" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="retype_new_pass" placeholder="Re-type New Password" required>
						</div>
                        <button type="submit" href="login.php" class="btn btn-primary">Apply Change</button>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Footer of website -->
        <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>
