<?php
session_start();
/**
 * Contact form processing file
 */
if(!empty($_POST))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'priscillathen@gmail.com';

    $headers = "From: $name <$email>\r\n";

    if(!empty($name) && !empty($email) && !empty($message)) {
        $headers = "From: $name <$email>\r\n";
        @mail($to, 'Contact from my portfolio', $message, $headers);
        $headers = 'From: Priscilla Then <priscillathen@gmail.com>'."\r\n";
        @mail($email, 'Your message to priscilla', $message, $headers);

        $_SESSION['feedback'] = "Your message has been sent!";
    }

    header('location: contact.php');
}