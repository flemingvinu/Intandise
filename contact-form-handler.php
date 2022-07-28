<?php
    $name = $_Post['name'];
    $visitor_email = $_POST['email'];
    $messege = $_POST['messege'];


    $email_from = 'fleming.b.vinu007@gmail.com';

    $email_subject = "New form";

    $email_body = "User Name: $name.\n";
                        "User email: $visitor_email.\n";
                         "User Message: $messege.\n";
    

    $to = "flemingvinu@gmail.com";

    $headers = "From: $email_from \r\n";


    $headers = "Reaply-to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>