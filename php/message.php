<?php

    if(isset($_POST['send_message']))
    {
        header('Content-Type: text/html; charset=utf-8');

        $email_odbiorcy = 'mail@paweluchanski.pl';
        $header = 'Reply-To: <'.$_POST['email']."> \r\n";
        $header .= "MIME-Version: 1.0 \r\n";
        $header .= "Content-Type: text/html; charset=UTF-8";
        $wiadomosc = "<p>Dostałes wiadomość od:</p>";
        $wiadomosc .= "<p>Imie: ".$_POST['name']. "</p>";
        $wiadomosc .= "<p>Email: ".$_POST['email']. "</p>";
        $wiadomosc .= "<p>Wiadomość: ".$_POST['message']."</p>";
        $message = "<!doctype html><html><head><meta charset='UTF-8'>".$wiadomosc."</head></html>";
        $subject = 'Wiadomosc z formularza kontaktowego';
        $subject ='=?utf-8?B?'.base64_encode($subject).'?=';

        if(mail($email_odbiorcy, $subject, $message, $header))
        {
            header("Location: https://www.paweluchanski.pl?status=success");
        }
        else
        {
            header("Location: https://www.paweluchanski.pl?status=error");
        }
    }
    else
    {
    }
?>