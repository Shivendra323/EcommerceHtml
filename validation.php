<?php
session_start();
$con = Mysqli_connect("localhost","root","","Assignament") or die(mysqli_error($con));
$email = mysqli_real_escape_string($con, $_POST['Email']);
$password = $_POST['password'];

$select_query = "SELECT  Email, password FROM sign where Email = '$email' and password = md5('$password') ";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$num = mysqli_num_rows($select_query_result);
if($num == 1){
    session_start();
    $_SESSION['Email']=$email;
    
    header('location:index.php');
    
} else {
?>
<html>
<body>
  <a href="index.php">Click here for login</a> 
  <script>alert("Invalid Email Or Password")</script>
</body>
</html>
 
<?php
}

?>
