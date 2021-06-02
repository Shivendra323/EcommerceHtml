<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="styleA2.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .row_style{
               margin-top:  12%;
               margin-bottom:  12%;
            }
        </style>
    </head>
    <body>
         <?php
       include 'common.php';
       ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-8 col-md-4  col-md-offset-4 col-xs-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>Login</h1>
                        </div>
                        <div class="panel-body">
                        <p class="text-warning">Login to make a purchase</p>
                        <form method="POST" action="validation.php">
                        <div class="form-group">
                            <input type="text" name="Email" placeholder="Email" class="form-control">
                        </div>
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control">
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary">
                        </form>
                        </div>
                        <div class="panel-footer">
                            <a href="SignUp.php">Don't have an account? Register</a>
                        </div>
                    </div>
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


