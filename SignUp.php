<?php
session_start();
$con = mysqli_connect("localhost","root","","Assignament");
?>

<html>
    <head>
        <title>SingUp</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="styleA2.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .row_style{
                 margin-top: 12%;
                 margin-bottom: 12%;
            }
        </style>
    </head>
    <body>
          <?php
       include 'common.php';
       ?>
        <div class="container">
            <div class="row row_style">"
                <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">
                    <h1>Sign Up</h1>
                    <form method="POST" action="registration.php">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" id="Name" name="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="Email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="Password">
                            </div>
                             <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="City">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="Address">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control" id="contact" name="Contact">
                            </div>
                            <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
                        </form>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <center>Copyright © Lifestyle Store. All Rights Reserved|Contact Us: +91 9000000000</center>
            </div>
        </footer>
    </body>
</html>
