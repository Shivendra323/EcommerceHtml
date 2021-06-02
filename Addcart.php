<?php
session_start();
$con = mysqli_connect("localhost","root","","Assignament") ;
?>
<?php
$user_id = $_POST['user_id'];
$pid= $_POST['pid'];

$add_cart_query = "insert into users_items(users_id, items_id, status) values ('$user_id', '$pid', 'Add to Cart')";
$add_cart_submit = mysqli_query($con, $add_cart_query) ;
echo "User successfully inserted";
echo $_POST['pid'];
echo $_POST['user_id'];
header('location:Product.php');


?>
