<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<title>Paweł Uchański</title>
        <link rel="icon" href="img/icon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Paweł Uchański">
		<meta name="description" content="Front-End developer Paweł Uchański">
		<meta name="keywords" content="Paweł Uchański, Front-End, Paweł, Uchański, Programista, Programista Uchański">
		<link rel="stylesheet" href="style.css" type="text/css">

        <!-- Czcionka -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
		<!-- Czcionka end -->
        <!-- Particles -->
        <script src="js/particles.js" defer></script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <!-- Particles end -->
        <script src="js/popup.js" defer></script>

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
                <span>Napisz do mnie</span>
                <span id="contact_x">X</span>
            </div>
            <form method="POST">
                <input type="text" name="name" class="input" placeholder="Podaj swoje imię" required><br>
                <input type="text" name="email" class="input" placeholder="Podaj swój email" required><br>
                <textarea id="message" name="message" placeholder="Tutaj wpisz wiadomość" required></textarea><br>
                <input type="submit" name="send_message" value="Wyślij" id="send_submit"><br>
            </form>
        </div>

        <div class="project3-popup">
            <div class="project3_left">
                <div class="project3_logo">
                    <img src="/img/kursly_logo.png">
                </div>
                <p><span>Nazwa:</span> Kursly</p>
                <p><span>Autor:</span> Paweł Uchański</p>
                <p><span>Status:</span> W rozbudowie</p>
                <p><span>Github:</span> <a href="#">LINK</a></p>
            </div>
            <div class="project3_right">
                <div class="project3_txt">
                    <h2>OPIS</h2>
                    <p>Platforma umożliwiająca kupowanie kursów internetowych. Aplikacja powstała jako projekt na studiach. Podstawowa funkcjonalność obejmuje: logowanie, rejestrację, doładowanie wirtualnego portfela oraz kupowanie wybranych kursów.<br><br><br>Do stworzenia projektu zostały wykorzystane technologie: HTML, CSS, Bootstrap, JavaScript, PHP oraz Bazy Danych.<br><br><br> Przykładowe dane do logowania:<br> Login: test@test.pl<br> Hasło: Test_123</p>
                </div>

            </div>
        </div>

        <div class="menu">
            <a href="https://linkedin.com/in/pawel-uchanski" target="_blank"><img src="img/linkedin.png"></a>
            <a href="https://github.com/Pawelele" target="_blank"><img src="img/github.png"></a>
            <img src="img/email.png" id="send_message">
        </div>

        <div class="site">
            <a href="/"><img class="logo" src="img/logo.png"></a>
            <p class="title">Paweł Uchański</p>
            <p class="subtitle">Projekty:</p>
            <a href="https://portfolio.paweluchanski.pl" target="_blank"><div class="button">Portfolio</div></a><br>
            <a href="https://urzad.paweluchanski.pl" target="_blank"><div class="button">Urząd Miasta</div></a><br>
            <a href="https://kursly.paweluchanski.pl" target="_blank"><div class="button">Kursly</div></a><br>

        </div>

        <!-- Message php script -->
        <?php
            $status = $_GET['status'];

            if($status == 'success')
            {
                echo '<script> alert("Wiadomość została wysłana."); </script>';
            }
            else if($status=='error')
            {
                echo '<script> alert("Błąd wysyłania wiadomości."); </script>';
            }

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
                    header('Location: https://paweluchanski.pl/index.php?status=success');
                }
                else
                {
                    header('Location: https://paweluchanski.pl/index.php?status=error');
                }
            }
            else
            {
            }
        ?>
    </body>
</html>