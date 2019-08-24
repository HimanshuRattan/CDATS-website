<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit']))
{
    $email=$_POST["email"];//from form
    $name = $_POST['name'];
    $message = $_POST['message'];
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = false;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '';                 // SMTP username
        $mail->Password = '';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('rattanhimanshu@gmail.com', 'CDATS');
        $mail->addAddress($email, $name);     // Add a recipient

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Message from website';
        $mail->Body    = 'Hello!'; // Our message above including the link
        $mail->send();
        echo $email;
    } catch (Exception $e) {
        echo "Error: " . $email;
    }
}






// if (isset($_POST['submit'])) {
// $name = $_POST['name'];
// $subject = "Response from website";
// $mailFrom = $_POST['email'];
// $message = $_POST['message'];

// $mailTo = "rattanhimanshu@gmail.com";
// $headers = "From: ".$mailFrom;
// $txt = "You have received an e-mail from ".$name.".\n\n".$message;

// mail($mailTo, $subject, $txt, $headers);
// header("Location: contact.php?mailsent");
// }
?>