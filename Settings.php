<?php
session_start();
?>
<html>
    <head>
        <title>Settings</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="styleA2.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .row_style{
                margin-top: 12%;
                margin-bottom: 14%;
            }
        </style>
    </head>
    <body>
         <?php
       include 'common.php';
       ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4">
                    <h4>Change Password</h4>
                    <form method="POST" action="update.php">
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Oldpassword" class="form-control">
                        </div>
                            <div class="form-group">
                                <input type="password" name="newpassword" placeholder="NewPassword" class="form-control">
                            </div>
                        <div class="form-group">
                                <input type="password" name="retypenewpassword" placeholder="retypeNewPassword" class="form-control">
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary">
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
