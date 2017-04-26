<?php
include_once("connection.php");
require 'PHPMailerAutoload.php';


$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipCode = $_POST['zip-code'];
$password = $_POST['password'];
$areaCode = $_POST['area-code'];
$telephone = $_POST['telephone'];


$check = 0;



/*
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Please enter a valid email:";
	header("Location: signup.php");
}
 * 
 */
/* above variable is for checking email and other parameters */

$check = "SELECT * FROM `customer` where `email_customer`='".$email."'";
$result = mysqli_query($conn,$check);
$numResults = mysqli_num_rows($result);

if ($numResults >= 1) {
    $message = "Email already exists!";
    echo $message;
   
        header("Location: alreadyregistered.php");

    /*Create a php file titled alreadyregistered.php
     * file should contain a button that redirects to home page
     */
}
else {

    $query = "INSERT INTO `customer`(`id_customer`,`firstname_customer`, `lastname_customer`, `address_customer`, `city_customer`, `state_customer`, `zipcode_customer`, `email_customer`, `area_customer`, `phone_customer`, `password_customer`)
    VALUES (NULL, '$firstName','$lastName','$address','$city', '$state', '$zipCode', '$email', '$areaCode', '$telephone','$password')"; 


    $mail = new PHPMailer;


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'uva.easel@gmail.com';                 // SMTP username
$mail->Password = 'commerce';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to





$mail->setFrom('uva.easel@gmail.com', 'Easel');
$mail->addAddress($email, $firstName . ' ' . $lastName);     // Add a recipient
//$mail->addAddress($firstName);               // Name is optional 
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Welcome to Easel!';
$mail->Body    = 'Congratulations, ' . $firstName . '! You have successfully registered on Easel! Start exploring artwork today, made easy by Easel.';
$mail->AltBody = 'Congratulations, ' . $firstName . '! You have successfully registered on Easel! Start exploring artwork today, made easy by Easel.';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
   
    if (!mysqli_query($conn, $query))  { /*this line is for testing purposes*/
        echo "FAIL";
    }
    else
    {
        include_once("signin.php");
        //echo "You have successfully signed up! A confirmation email has been sent to your email address!";
        header("Location: confirmation.php");
        
         
    }
   
    mysqli_close($conn);
}
?>