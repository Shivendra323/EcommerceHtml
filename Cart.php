<?php
session_start();
$con = mysqli_connect("localhost","root","","Assignament") ;
?>

<html>
    <head>
        <title>Cart</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="styleA2.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .table_style{
                margin-top: 12%;
            }
        </style>
    </head>
    <body>
 
         <?php
       include 'common.php';
       ?><?php
                          $id_email = $_SESSION['Email'];
                          $id_select_query = "SELECT id, Name, city, Address, Contact FROM sign where Email = '$id_email'";
                          $id_select_query_result = mysqli_query($con, $id_select_query) or die(mysqli_error($con));
                          $id_row = mysqli_fetch_array($id_select_query_result);
                          ?>
        <?php $id_sign=$id_row['id'];?>
               <?php
$select_cart_query = "SELECT items.pid, items.Name, items.Price, users_items.id FROM users_items  INNER JOIN items  ON users_items.items_id = items.pid WHERE users_items.users_id = '$id_sign' and users_items.status = 'Add to Cart' ";
$select_cart_query_result = mysqli_query($con, $select_cart_query) or die(mysqli_error($con));

?>
        
        <div class="container">
            <table class="table table_style">
                <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <?php while ($cart = mysqli_fetch_array($select_cart_query_result)) {?>
                    <tr>
                        <td><?php echo $cart['pid'];?></td>
                        <td><?php echo $cart['Name'];?></td>
                        <td><?php echo $cart['Price'];?></td>
                        <td><form method="POST" action="removecart.php">
                                <input type="hidden" name="user_id" value="<?php echo $id_row['id'];?>">
                                <input type="hidden" name="id" value="<?php echo $cart['id'];?>">
                                <input type="submit" value="Remove" class="btn btn-primary ">
                            </form>
                        </td>
                    </tr>
                    <?php }?>
                    <tr>
                        <?php
$sum_cart_query = "SELECT  sum(items.Price) FROM users_items  INNER JOIN items  ON users_items.items_id = items.pid WHERE users_items.users_id = '$id_sign' and users_items.status = 'Add to Cart' ";
$sum_cart_query_result = mysqli_query($con, $sum_cart_query) or die(mysqli_error($con));
$cart_row = mysqli_fetch_array($sum_cart_query_result);
?>
                        <td></td>
                        <td>Total</td>
                        <td>Rs <?php echo $cart_row['sum(items.Price)'] ;?>/-</td>
                        <td><form method="POST" action="Success.php">
                                <input type="hidden" name="user_id" value="<?php echo $id_row['id'];?>">
                                <input type="submit" value="Confirmed" class="btn btn-primary btn-block">
                            </form></td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </body>
</html>
