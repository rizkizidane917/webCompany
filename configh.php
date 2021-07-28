<?php
require 'PHPMailerAutoload.php';


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'youremail@gmail.com';                 // SMTP username
$mail->Password = 'your password';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($_POST['email'],$_POST['name']);
$mail->addAddress('youremail@gmail.com ');     // Add a recipient
$mail->addReplyTo($_POST['email'],$_POST['name']);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Message From : '.$_POST['name'];
$mail->Body    = '<h1 align=center> Nama :'.$_POST['name'].'<br>Email : '.$_POST['email'].'<br>Pesanan: '.$_POST['message'].'</h1>'; 

// ini
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

header("Location:index.html");
?>
