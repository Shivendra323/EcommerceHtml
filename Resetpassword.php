<?php

session_start();
$con = mysqli_connect("localhost","root","","Assignament") or die(mysqli_error($con));
$Email = $_POST['Email'];
$OTP = $_POST['OTP'];
$newpassword =$_POST['newpassword'];
$retypenewpassword = $_POST['retypenewpassword'];
$select_query = "SELECT  Email, OTP FROM sign where Email = '$Email' and OTP = md5('$OTP') ";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$num = mysqli_num_rows($select_query_result);
if($newpassword==$retypenewpassword){
    if($num == 1){
    $update_query = "UPDATE sign SET password = md5('$newpassword') where Email = '$Email'";
    $update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
    echo "successfully changed";
    header('location:index.php');
} else {
    echo "no";
}} else {
    echo "new password not matched with retypenewpassword";
}
?>


