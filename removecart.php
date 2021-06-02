<?php
session_start();
$con = mysqli_connect("localhost","root","","Assignament");
?>
<?php
$user_id = $_POST['user_id'];
$id = $_POST['id'];
$delete_query= "DELETE FROM users_items where users_id = $user_id and id = $id";
$delete_query_result = mysqli_query($con, $delete_query);
header('location:Cart.php');
?>

