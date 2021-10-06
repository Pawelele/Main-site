<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<title>Paweł Uchański</title>
        <link rel="icon" href="/img/icon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Paweł Uchański">
		<meta name="description" content="Front-End developer Paweł Uchański">
		<meta name="keywords" content="Paweł Uchański, Front-End, Paweł, Uchański, Programista, Programista Uchański">
		<link rel="stylesheet" href="/style.css" type="text/css">

        <!-- Czcionka -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<!-- Czcionka end -->
        <!-- Particles -->
        <script src="/js/particles.js" defer></script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <!-- Particles end -->
        <script src="/js/popup.js" defer></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TZZQG2TEMS"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-TZZQG2TEMS');
        </script>

    </head>

    <body>
        <!-- particles.js container -->
        <div id="particles-js">
        </div>
        <!-- end particles.js -->

         <!-- pl/en -->
         <div class="language">
            <a href="/" title="Change language to Polish">PL</a>&nbsp
            <a href="/en/" title="Change language to English">EN</a>
        </div>
        <!-- end pl/en -->

        <div class="contact-popup">
            <div class="contact-up">
                <span>Contact me</span>
                <span id="x">X</span>
            </div>
            <form method="POST">
                <input type="text" name="name" class="input" placeholder="Your name"><br>
                <input type="text" name="email" class="input" placeholder="Your email"><br>
                <textarea id="message" name="message" placeholder="Message"></textarea><br>
                <input type="submit" name="send_message" value="Send" id="send_submit"><br>
            </form>
        </div>

        <div class="menu">
            <a href="https://linkedin.com/in/pawel-uchanski" target="_blank"><img src="/img/linkedin.png"></a>
            <a href="https://github.com/Pawelele" target="_blank"><img src="/img/github.png"></a>
            <img src="/img/email.png" id="send_message">
        </div>

        <div class="site">
            <a href="/en/"><img class="logo" src="/img/logo.png"></a>
            <p class="title">Paweł Uchański</p>
            <p class="subtitle">My projects:</p>
            <a href="https://portfolio.paweluchanski.pl" target="_blank"><div class="button">Portfolio</div></a><br>
            <a href="https://urzad.paweluchanski.pl" target="_blank"><div class="button">City Hall</div></a><br>
            <a href="https://kursly.paweluchanski.pl" target="_blank"><div class="button">Kursly</div></a><br>

        </div>


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
                    echo '<script> alert("Wiadomość została wysłana."); </script>';
                }
                else
                {
                    echo '<script> alert("Błąd wysyłania wiadomości."); </script>';
                }
            }
            else
            {
            }
        ?>
    </body>
</html>