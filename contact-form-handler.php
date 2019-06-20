<?php
    $name=$_POST['Name'];
    $visitor_email=$_POST['E-mail'];
    $message=$_POST['Message'];

    $email_from='akshaykhandelwal06@gmail.com';
    $email_subject="New form Submission";
    $email_body="User Name : $name.\n".
                    "User_E-mail : $visitor_email.\n".
                        "User Message : $message.\n";

    $_to="akshaykhandelwal17071998@gmail.com";
    $headers="From : $email_from \r\n";
    $headers .= "Reply-To : $visitor_email \r\n";
    mail($_to,$email_subject,$email_body,$headers);
    header("Location : index.html");
    ?>