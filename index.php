<?php
require 'includes/common.php';
if (isset($_SESSION['email_id']))
{
    header('Products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LifeStyle Store</title>
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
        require 'includes/header.php';
        ?>
        
        <!-- Background image -->
        <div id="banner_image">
            <div class="container">
                <div id="inner_banner_image">
                    <div id="banner_content">
                        <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands.</p>
                        <a href="products.php" class="btn btn-danger btm-lg active">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- content -->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <a href="Products.php">
                        <div class="thumbnail">
                                <img src='img/1.jpg' class='img-responsive img-rounded' alt="Cameras">
                                    <div class="caption">
                                        <center>
                                            <h3>Cameras</h3>
                                            <p>Choose among the best available in the world.</p>
                                        </center>
                                    </div>
                            </div>
                    </a>
                    </div>
                <div class="col-sm-4 col-xs-12">
                    <a href="Products.php">
                        <div class="thumbnail">
                                <img src='img/7.jpg' class='img-responsive img-rounded' alt="Watches">
                                    <div class="caption">
                                        <center>
                                            <h3>Watches</h3>
                                            <p>Original watches from the best brands.</p>
                                        </center>
                                    </div>
                            </div>
                    </a>
                    </div>
                <div class="col-sm-4 col-xs-12">
                    <a href="Products.php">
                        <div class="thumbnail">
                                <img src='img/8.jpg' class='img-responsive img-rounded' alt="Shirts">
                                    <div class="caption">
                                        <center>
                                            <h3>Shirts</h3>
                                            <p>Our exquisite collection of shirts.</p>
                                        </center>
                                    </div>
                            </div>
                    </a>
                    </div>
                
            </div>
        </div>
        
        <!-- Footer of website -->
        <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>
