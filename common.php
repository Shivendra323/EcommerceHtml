<?php

$con = mysqli_connect("localhost","root","","Assignament");
?>


 <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION['Email'])){
                        ?>
                        <?php
                          $id_email = $_SESSION['Email'];
                          $id_select_query = "SELECT id, Name, city, Address, Contact FROM sign where Email = '$id_email'";
                          $id_select_query_result = mysqli_query($con, $id_select_query) or die(mysqli_error($con));
                          $id_row = mysqli_fetch_array($id_select_query_result);
                          ?>
                        <li><a href="#"><?php echo $id_row['Name'];?></a></li>
                        <li><a href="Cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        <li><a href="Settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                        <li><a href="Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        
                        <?php }else{ ?>
                        <li><a href="SignUp.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#loginmodal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
<div id="loginmodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
               
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
                             <a href="Forgotpassword.php">Forgot Password</a>
                        </div>
                        <div class="panel-footer">
                            <a href="SignUp.php">Don't have an account? Register</a>
                        </div>
                    </div>
        </div>
    </div>
</div>
