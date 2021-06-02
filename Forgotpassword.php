<?php 
session_start();
$con = mysqli_connect("localhost","root","","Assignament") or die(mysqli_error($con));


?>


<html>
    <head>
        <title>Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="styleA2.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
       .row_style{
            padding-top: 75px;
        }
  </style>
    </head>
    <body>
        <?php
       include 'common.php';
       ?>
          <div class="row row_style">
             <div class="col-xs-4 col-xs-offset-4">
           <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>Reset password</h1>
                        </div>
                        <div class="panel-body">
                        <p class="text-warning">Enter Registered Email</p>
                        <form method="POST" action="forgot.php">
                        <div class="form-group">
                            <input type="text" name="Email" placeholder="Email" class="form-control"/>
                        </div>
                            <input type="submit" value="Send OTP" class="btn btn-primary" />
                            
                        </form>

                        </div>
                        
                    </div>
        </div>
    </div>

    </body>
</html>

























