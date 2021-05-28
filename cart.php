<?php
    require './includes/common.php';
    // check if logged in
    if(!isset($_SESSION["email_id"])){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Cart</title>
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

            // get the products purchased by the user
            $user_id = $_SESSION["id"];
            $query = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";

            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if(mysqli_num_rows($result) == 0){
                echo '<h4 class="container panel-margin">Add products to cart first. Goto <a href="products.php">Products</a> page.</h4>';
            }else{
                $total = 0;
        ?>
        <div class="row-style">
        <div class="container panel-margin">
            <table class="table table-hover">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php $total += $row["price"]; echo $row["price"] ?></td>
                    <td><a href="cart-remove.php?id=<?php echo $row["id"]; ?>">Remove</a></td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total: <i class="fa fa-rupee"></i> <?php echo $total; ?></td>
                    <td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
                </tr>
            </table>
        </div>
        </div>
            <?php
            }
            require './includes/footer.php';
        ?>
        
    </body>
</html>
