<?php

$errors = '';
$myemail = 'd00251846@student.dkit.ie';// <-----Put your DkIT email address here.
if(empty($_POST['username'])  ||
   empty($_POST['password']) ||
   empty($_POST['name']) ||
   empty($_POST['address']) ||
   empty($_POST['country']) ||
   empty($_POST['zip']) ||
   empty($_POST['email']) ||
   empty($_POST['sex']) ||
   empty($_POST['language']) ||
   empty($_POST['desc']))
{
    $errors .= "\n Error: all fields are required";
}

// Important: Create email headers to avoid spam folder
$headers .= 'From: '.$myemail."\r\n".
    'Reply-To: '.$myemail."\r\n" .
    'X-Mailer: PHP/' . phpversion();


$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$address = $_POST['address'];
$country = $_POST['country'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$language = $_POST['language'];
$desc = $_POST['desc'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n Email: $email \n Message \n $desc";

        mail($to,$email_subject,$email_body,$headers);
        //redirect to the 'thank you' page
        header('Location: contact-form-thank-you.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
        <title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>