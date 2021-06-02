<?php
session_start();
$con = mysqli_connect("localhost","root","","Assignament");
?>
<?php
$user_id = $_POST['user_id'];

$Confirmed_query = "UPDATE users_items SET status = 'Confirmed' where users_id = '$user_id'";
$Confirmed_query_submit = mysqli_query($con, $Confirmed_query) ;




?>
<html>
    <head>
        <title>Success</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="styleA2.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #ss{
                padding-top: 75px;
            }
        </style>
    </head>
    <body>
        <?php
       include 'common.php';
       ?>
    <center><div id="ss">Your order is confirmed. Thank you for shopping with us.<br><a href="Product.php">Click here</a> to purchase any other item.</div></center>
    </body>
</html>

