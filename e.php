<?php
if(isset($_POST) & !empty($_POST)){
$name = mysqli_real_escape_string($con, $_POST['Name']);
$email = mysqli_real_escape_string($con, $_POST['Email']);
$password = $_POST['Password'];
$city = mysqli_real_escape_string($con, $_POST['City']);
$address = mysqli_real_escape_string($con, $_POST['Address']);
$contact = $_POST['Contact'];
$email_select_query = "SELECT Email FROM sign where Email = '$email'";
$email_select_query_result = mysqli_query($con, $email_select_query) or die(mysqli_error($con));
$email_row = mysqli_num_rows($email_select_query_result);
if($email_row==0){
$user_registration_query = "insert into sign(Name, Email, Password , City, Address,Contact) values ('$name', '$email', md5('$password'), '$city', '$address', '$contact')";
$user_registration_submit = mysqli_query($con, $user_registration_query) ;
echo "User successfully inserted";
} else {
    echo "Email Already registered";
}}
?>
