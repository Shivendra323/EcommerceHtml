<?php
session_start();
?>
<?php 
$con = mysqli_connect("localhost","root","","Assignament");
$select_query = "SELECT pid ,Name, Image, Price FROM items";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
?>


<html>
    <head>
        <title>Product</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="styleA2.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .jumbotron{
                margin-top: 8%;
            }
        </style>
    </head>
    <body>
          <?php
       include 'common.php';
       ?>
        <div class="container">
            <div class="jumbotron">
                <center><h1>Welcome to our Lifestyle Store!</h1>
                    <p>We have the best Cameras,watches and shirts for you. No need to hunt around, we have all in one place.</p></center>
            </div>
            <div class="row text-center">
                <?php while ($row = mysqli_fetch_array($select_query_result)) {?>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/<?php echo $row['Image'] ;?>" alt="Responsive image">
                        <div class="caption">
                            <h4><b><?php echo $row['Name'];?></b></h4>
                            <p>Price: Rs. <?php echo $row['Price'];?>/-</p>
                            <form method="POST" action="Addcart.php">
                                <input type="hidden" name="user_id" value="<?php echo $id_row['id'];?>">
                                <input type="hidden" name="pid" value="<?php echo $row['pid'];?>">
                                
                                <input type="submit" value="Add to Cart" class="btn btn-primary btn-block">
                            </form>
                        </div>
                    </div>
                </div>
                      
                <?php }?>
            </div>

        </div>
        <footer>
            <div class="container">
                <center>Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 9000000000</center>
            </div>
        </footer>
    </body>
</html>


