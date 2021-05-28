<!DOCTYPE html>
<!--Header for all-->
<html>
    <head>
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
        <!-- Header of website -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                        <a href="index.php" class="navbar-brand"><b>LifeStyle Store</b></a>
                    </div>
                    <div>
                        <ul class="nav navbar-nav navbar-right">
                            <?php 
                            if (isset($_SESSION['email_id']))
                            {
                            ?>
                            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                            <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span>Setting</a></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                            ?>
                            <?php
                            }
                            else
                            {
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
        </nav>
    </body>
</html>
