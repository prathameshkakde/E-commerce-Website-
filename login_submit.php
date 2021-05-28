<!DOCTYPE html>
<html>
	<head>
		<title>LifeStyle Stores</title>
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
    require "./includes/common.php";
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $hashed_password = md5($password);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$hashed_password'";
    $query_result = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_result) == 0){
        echo '<div class="container">
            <div class="jumbotron row-style">
                <center>
                    <p>No user found for entered E-mail ID. You need to register first.  <br> 
                    <a href="signup.php">Click here</a> to register with us.</p>
                </center>
            </div>
        </div>';
    }else{
        $row = mysqli_fetch_array($query_result);
        $_SESSION["email_id"] = $email;
        $_SESSION["id"] = $row["id"];

        // redirect to products page
        header("location: products.php");
    }
?>
</body> 
</html>

