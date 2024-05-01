<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $emailFrom = 'faheem@gmail.com';

    $email_subject = 'New Form Submission';

    $email_body ="User Name : $name.\n".
                    "Email: $email.\n".
                    "User Name : $subject.\n".
                    "User Name : $message.\n";

    $to = 'faheemmir129@gmail.com';

    $headers = "Form : $emailFrom \r\n";

    $headers .= "Reply To : $email \r\n"; 

    mail($to,$email_subject,$email_body,$headers);

    header("Location : contact.html");
?>