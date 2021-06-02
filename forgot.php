<?php
session_start();
$con = mysqli_connect("localhost","root","","Assignament") or die(mysqli_error($con));
$Email = $_POST['Email'];
$select= "SELECT  Email FROM sign where Email = '$Email'";
$select_query_result = mysqli_query($con, $select) or die(mysqli_error($con));
$num = mysqli_num_rows($select_query_result);
echo "$num"."<br/><br/>";


  if($num==1){

$OTP = rand(100000, 999999);
  $update_query = "UPDATE sign SET OTP = md5('$OTP') where Email = '$Email'";
    $update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
include("class.phpmailer.php");
include("class.smtp.php"); 

$mail             = new PHPMailer();

$body             = "Hello user,<br/><br/>             You have requested for password reset, your OTP <b>".$OTP."</b>.<br/><br/><br/>Regards,<br/>Team Lifestyle store";

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  
$mail->SMTPSecure = "ssl";              
$mail->Host       = "smtp.gmail.com";  
$mail->Port       = 465;                   

$mail->Username   = "xyz@gmail.com";  
$mail->Password   = "*************";            

$mail->From       = "xyz@gmail.com";
$mail->FromName   = "Lifestyle store";
$mail->Subject    = "password reset";
$mail->AltBody    = "This is the body when user views in plain text format"; 
$mail->WordWrap   = 50;

$mail->MsgHTML($body);


$mail->AddAddress("$Email","xyz ");

$mail->IsHTML(true); // send as HTML

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message has been sent";
  $_SESSION['pReset']="Active";
  header('location:Reset.php');
  
}
}else{
 echo "incorrect email";
}
?>













