<?php
$con = mysqli_connect("localhost","root","","Assignament");
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

/*require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try {
    
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host       = $smtphost;
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtpuser;
    $mail->Password   = $smtppass;
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    //Recipients
    $mail->setFrom('xyz@gmail.com', 'xyz');
    $mail->addAddress('joe@example.net', 'Joe User');     


    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
*/
} else {
    echo "Email Already registered";
}
?>
<html>
    <head>
    <title></title>
    </head>
    <body>
        <a href="index.php">Click here for login</a>
    </body>
</html>

