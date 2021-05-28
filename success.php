<?php
    require './includes/common.php';
    // check if signed in
    if(!isset($_SESSION["email_id"])){
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<!--Success Page-->
<html>
    <head>
        <title>Happy Buyer</title>
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
            require './includes/header.php';

            // check all items to confirmed
            $user_id = $_SESSION["id"];
            $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            
            while($row = mysqli_fetch_array($result)){
                $item_id = $row["item_id"];
                $query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";
                
                $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
            }
        ?>
        <div class="container">
            <div class="jumbotron row-style">
                <center>
                    <p>Your order is confirmed. Thank you for shopping with us.<br> 
                    <a href="Products.php">Click here</a> to purchase any other item.</p>
                </center>
            </div>
        </div>
        <!-- Footer of website -->
        <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>
