<?php 
session_start();

?>


<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="styleA2.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <?php
       include 'common.php';
       ?>
        <div id="banner_image">
            <div class="container" >
                <center><div id="banner_content">
                        <?php
                        if(isset($_SESSION['Email'])){
                        ?>
                        <a href="Product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        <?php }else{ ?>
                        <a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-danger btn-lg active">Shop Now</a>
                        <?php } ?>
                    </div></center>
            </div>
        </div>
        <footer>
            <div class="container">
                <center>Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 9000000000</center>
            </div>
        </footer>
    </body>
</html>

