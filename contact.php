<?php
if (!empty($_POST)) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $toEmail = 'spamstuff920@gmail.com';
    $emailSubject = 'New email from your contant form';
    $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

    $bodyParagraphs = ["Name: {$name}","Phone : {$phone}", "Email: {$email}", "Message:", $message];
    $body = join(PHP_EOL, $bodyParagraphs);

    if (mail($toEmail, $emailSubject, $body, $headers)) {
    header('Location: thank-you.html');
        } 
        else {
    $errorMessage = 'Oops, something went wrong. Please try again later';
        }
}

?>
