<?php
	if(isset($_SESSION["id"])){
		header("location: products.php");
	}
	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LifeStyle Stores Sign Up</title>
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
		<?php
			require "./includes/header.php";
		?>
	<div class='container'>
            <div class='row row-style'>
                <div class="col-xs-offset-2 col-xs-8 col-xs-offset-2">
                    <div class="panel">
                        <div class='panel-heading'>
                            <h3><b>SIGNUP</b></h3>
                        </div>
                        <div class="panel-body">
					<form method="post" action="signup_script.php">
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Name" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
						<div class="form-group">
							<input type="number" class="form-control" name="contact" placeholder="Contact" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="city" placeholder="City" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="address" placeholder="Address" required>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
			</div>
				<div class="panel-footer">
                                    Already have an account?Click <a href="login.php">here</a> to Login.
				</div>
                    </div>
		</div>
            </div>
        </div>
		<?php
			require "./includes/footer.php";
		?>
	</body>
</html>